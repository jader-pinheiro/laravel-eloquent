#! bin/bash

docker container rm -f p_laravel-eloquent

docker run -d -p 80:80 \
-v /home/jader-moura/Projetos-Alpha/Estudos/Laravel/laravel-eloquent/:/var/www/html \
-e TZ='America/Sao_Paulo' \
--link db-mysql-update:db-mysql-update \
--name p_laravel-eloquent \
jadermoura/php-apache:7.3.13