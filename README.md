## Installation

1- rename .env.example to .env
2- docker-compose build (./vendor/bin/sail build)
3- docker-compose up -d (./vendor/bin/sail up -d)
4- docker-compose exec php composer install
5- ./vendor/bin/sail artisan migrate:fresh --seed
6- ./vendor/bin/sail artisan dusk:install
7- ./vendor/bin/sail artisan dusk
8- dl https://github.com/karatelabs/karate/releases/download/v1.1.0/karate-1.1.0.zip
9- copy karate.jar in karate-1.1.0
10- run karate tests : cd karate-1.1.0 && java -cp 'karate.jar':. com.intuit.karate.Main -f ~html,cucumber:json .