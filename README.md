## Installation

1- rename .env.example to .env
2- composer install
3- docker-compose build (Ignore laravel.test failed to build and go to next step)
4- docker-compose up -d
5- connect to adminer with logs in .env
6- import cinema.sql in adminer
7- create account by going to localhost
8- php artisan dusk:install
9- php artisan dusk
