<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'dan-powell.uk');

// Project repository
set('repository', 'git@github.com:dan-powell/dan-powell.uk.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', [
    'public/projects',
    'public/js/vendor'
]);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts
inventory('hosts.yml');

set('default_stage', 'staging');
    
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');


