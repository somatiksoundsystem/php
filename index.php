<?
declare(strict_types=1);

$PATH_DELIMITER = '/';

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

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

// Template rendering.
$loader = new FilesystemLoader(__DIR__ . '/templates');
$twig = new Environment($loader, array(
    'cache' => __DIR__ . '/cache',
    //'cache' => FALSE,
    'debug' => true
));
//$twig->addExtension(new MyExtension());
//$twig->addExtension(new Twig_Extensions_Extension_Text());
$twig->addGlobal('current_page', $uri);

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
?>