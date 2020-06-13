<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'somatiksoundsystem.com');

// Project repository
set('repository', 'git@github.com:somatik-web/php.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

set('allow_anonymous_stats', false);

set('writable_use_sudo', true);
set('cleanup_use_sudo', true);
set('writable_mode', 'chown');

// Hosts

host('somatiksoundsystem.com')
    ->user('deployer')
    ->set('deploy_path', '/var/www/{{application}}');

// Tasks

// NPM tasks
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
    'artisan:view:cache',
    'deploy:writable',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
]);

set('static_path', function () {
    return run('cd ./static && pwd');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

