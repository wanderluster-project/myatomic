#!/bin/sh

php vendor/bin/php-cs-fixer fix src/
php vendor/bin/php-cs-fixer fix tests/
php vendor/bin/phpstan analyse tests --level=7
php vendor/bin/phpunit tests/