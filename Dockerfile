# Composer and NPM work moved to CI/CD stage, just build app into nginx-php-fpm container
FROM unfrgivn/nginx-php-fpm as php
COPY ./src /var/www/html
