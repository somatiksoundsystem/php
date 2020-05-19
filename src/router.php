<?
declare(strict_types=1);

// Set default timezone to Europe/Moscow
date_default_timezone_set('Europe/Moscow');

// Set default upload max size to 5MB in php.ini
// upload_max_filesize(5 * 1024 * 1024);

const PATH_DELIMITER = '/';

require __ROOT__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__ROOT__);
$dotenv->load();

$DEFAULT_LOG = new Monolog\Logger('default');
$DEFAULT_LOG->pushHandler(new Monolog\Handler\StreamHandler('php://stdout', Monolog\Logger::DEBUG));
$DEFAULT_LOG->warning('Started: ' . getenv('TEST'));

require_once __ROOT__ . '/src/db.php';

function route(string $home)
{
    define('__TEMPLATES__', $home . '/templates');
    global $DEFAULT_LOG;
    // Routing.
    $uri = $_SERVER['REQUEST_URI'];

    if ($uri === PATH_DELIMITER) {
        $uri = '/index';
    }
    $paths = explode(PATH_DELIMITER, $uri);

    $DEFAULT_LOG->log(Monolog\Logger::DEBUG, 'Requested URI: ' . $uri);

    $publicDir = $home . '/public';
    $root = $publicDir;
    $found = false;
    foreach ($paths as $idx => $path) {
        $root = $root . '/' . $path;
        $current = $root . '.php';
        if (file_exists($current)) {
            $found = true;
            $_SERVER['PATH'] = array_slice($paths, $idx + 1);
            require_once $current;
            break;
        }
    }
    if (!$found) {
        $not_found_page = $publicDir . '/error/404.php';
        if (file_exists($not_found_page)) {
            require_once $not_found_page;
        } else {
            http_response_code(404);
        }
    }
    $time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

    $DEFAULT_LOG->debug("Loaded page $uri in $time seconds\n");
}
