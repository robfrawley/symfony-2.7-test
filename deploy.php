<?php
require 'recipe/symfony.php';

serverList('app/config/servers.yml');

task('reload:php-fpm', function () {
    run('sudo /usr/sbin/service php5-fpm reload');
});

after('deploy', 'reload:php-fpm');
after('rollback', 'reload:php-fpm');