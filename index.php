<?
require __DIR__ . '/vendor/autoload.php';

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));

$log->log('INFO', 'Started: '.$_ENV['Test']);

echo "Hello world (php)!\n";
echo $_ENV['Test'];
