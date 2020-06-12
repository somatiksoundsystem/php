<?php
namespace Deployer;

require 'recipe/laravel.php';

// Laravel writable dirs
set('writable_dirs', [
    'bootstrap/cache',
]);

// Project name
set('application', 'somatiksoundsystem.com');

// Project repository
set('repository', 'git@github.com:somatik-web/php.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);
set('allow_anonymous_stats', false);

set('writable_use_sudo', false);
set('writable_mode', 'chmod');

// Hosts

host('somatiksoundsystem.com')
    ->user('deployer')
    ->set('deploy_path', '/var/www/{{application}}');

// Tasks

task('npm:install', function () {
    run('cd {{release_path}}/static && npm i');
});

task('npm:run:build', function () {
    run('cd {{release_path}}/static && npm run build');
});

desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'npm:install',
    'npm:run:build',
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    'artisan:view:cache',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
]);

set('static_path', function () {
    return run('cd ./static && pwd');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

