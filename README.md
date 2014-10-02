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
* Symfony bundles
    * FOSUserBundle
    * Nelmio Alice / Faker
    * KnpPaginatorBundle
    * KnpMenuBundle
    * LiipImagineBundle
* SASS
* Front libraries
    * Bootstrap
    * Bootstrap datepicker
    * Selectize
    * jQuery


## Useful commands

Generate entities:

    php app/console doctrine:mongodb:generate:documents RadioNeoDatabaseBundle --no-backup

Generate repositories classes:

    app/console doctrine:mongodb:generate:repositories RadioNeoDatabaseBundle

Load fixtures:

    php app/console doctrine:mongodb:fixtures:load

Install assets:

    app/console assets:install --relative --symlink

Dump assets (compiles SASS files to CSS):

    app/console assetic:dump --env=prod

## TODO

* Indexes on MongoDB
