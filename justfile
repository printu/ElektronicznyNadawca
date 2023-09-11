help:
    just -l

fix:
    ./vendor/bin/php-cs-fixer fix --config php_cs.dist.php --verbose

psalm:
    ./vendor/bin/psalm --config ./psalm.dist.xml --no-progress