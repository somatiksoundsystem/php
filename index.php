<?
declare(strict_types=1);

define('__ROOT__', __DIR__);

$PATH_DELIMITER = '/';

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler(__DIR__ . '/logs/app.log', Monolog\Logger::INFO));
$log->log(Monolog\Logger::WARNING, 'Started: ' . getenv('TEST'));

require_once __DIR__ . '/src/db.php';

// Routing.
$uri = $_SERVER['REQUEST_URI'];

if ($uri === $PATH_DELIMITER) {
    $uri = '/index';
}
$paths = explode($PATH_DELIMITER, $uri);

$log->log(Monolog\Logger::DEBUG, 'Requested URI: ' . $uri);


$root = __DIR__ . '/public';
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
    require_once __DIR__ . '/public/404.php';
}
$time = microtime(true) - $_SERVER["REQUEST_TIME_FLOAT"];

echo "Loaded page $uri in $time seconds\n";

?>