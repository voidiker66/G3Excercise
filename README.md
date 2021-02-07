# G3Excercise


How to install:

git clone https://github.com/voidiker66/G3Excercise

docker-compose build

docker-compose up -d

# FIRST TIME INSTALLATION DOCS:

docker-compose exec php php bin/console doctrine:schema:create

docker-compose exec php php bin/console doctrine:fixtures:load

docker-compose exec php php bin/console assets:install –symlink public/