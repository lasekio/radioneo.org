Radio Néo
=========

## Install

    sudo ln -s /usr/bin/nodejs /usr/bin/node
    sudo npm install -g bower
    sudo gem install sass

Install Symfony dependencies:

    composer install --optimize-autoloader --prefer-dist
    php app/console doctrine:mongodb:schema:create --index

Install Bower dependencies:

    bower install

## Uses

* Symfony / Twig / Doctrine
* MongoDB
* Faker / Nelmio Alice


## Useful commands

Generate entities:

    php app/console doctrine:mongodb:generate:documents RadioNeoDatabaseBundle --no-backup

Generate repositories classes:

    app/console doctrine:mongodb:generate:repositories RadioNeoDatabaseBundle

Load fixtures:

    php app/console doctrine:mongodb:fixtures:load

## TODO

* Indexes on MongoDB
