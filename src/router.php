<?
declare(strict_types=1);

const PATH_DELIMITER = '/';

require __ROOT__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__ROOT__);
$dotenv->load();

$DEFAULT_LOG = new Monolog\Logger('default');
$DEFAULT_LOG->pushHandler(new Monolog\Handler\StreamHandler('php://stdout', Monolog\Logger::DEBUG));
$DEFAULT_LOG->log(Monolog\Logger::WARNING, 'Started: ' . getenv('TEST'));

require_once __ROOT__ . '/src/db.php';

function route(string $publicDir)
{
    global $DEFAULT_LOG;
    // Routing.
    $uri = $_SERVER['REQUEST_URI'];

    if ($uri === PATH_DELIMITER) {
        $uri = '/index';
    }
    $paths = explode(PATH_DELIMITER, $uri);

    $DEFAULT_LOG->log(Monolog\Logger::DEBUG, 'Requested URI: ' . $uri);

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
        require_once $publicDir . '/error/404.php';
    }
    $time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

    echo "Loaded page $uri in $time seconds\n";
}
