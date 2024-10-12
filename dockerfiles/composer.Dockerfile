FROM composer:2

WORKDIR /var/www/laravel

ENTRYPOINT ["composer","--ignore-platform-reqs"]