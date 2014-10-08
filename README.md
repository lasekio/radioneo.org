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

* [Symfony](http://symfony.com/) / [Twig](http://twig.sensiolabs.org/) / [Doctrine](http://www.doctrine-project.org/projects/orm.html)
* [MongoDB](https://www.mongodb.org/)
* Symfony bundles
    * [FOSUserBundle](https://github.com/FriendsOfSymfony/FOSUserBundle)
    * [Nelmio Alice](https://github.com/nelmio/alice)
    * [KnpPaginatorBundle](https://github.com/KnpLabs/KnpPaginatorBundle)
    * [KnpMenuBundle](https://github.com/KnpLabs/KnpMenuBundle)
    * [LiipImagineBundle](https://github.com/liip/LiipImagineBundle)
* [SASS](http://sass-lang.com/)
* [Behat](http://www.behat.org/)
* [Bower](http://bower.io/)
* Front libraries
    * [Bootstrap](http://getbootstrap.com/)
    * [Bootstrap datepicker](https://github.com/eternicode/bootstrap-datepicker)
    * [Selectize](http://brianreavis.github.io/selectize.js/)
    * [jQuery](http://jquery.com/)


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
    * Artist: name

* Page titles
