<?
declare(strict_types=1);

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler(__DIR__ . '/logs/app.log', Monolog\Logger::INFO));
$log->log(Monolog\Logger::WARNING, 'Started: ' . getenv('TEST'));


// Routing.
$uri = $_SERVER['REQUEST_URI'];
if ($uri === '/') {
    $uri = '/index';
}

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

$script = __DIR__ . '/public' . $uri . '.php';
if (file_exists($script)) {
    require $script;
} else {
    echo 'Not Found';
}
?>