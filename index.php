<?
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

$log->log(Monolog\Logger::WARNING, 'Started: '.$_ENV['Test']);

echo "Hello world (php)!\n";
echo $_ENV['Test'];
phpinfo();
