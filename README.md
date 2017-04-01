It is an example application of using Symfony crawler. Configuration is
left as it is served by default when using
[Symfony Installer](http://symfony.com/doc/current/setup.html).

The application scraps all job offers from
[Spotify](https://www.spotify.com/lt/jobs/opportunities/all/all/new-york-ny-united-states/)
and stores in SQLite database.

### Environment requirements

PHP 7.1 with pdo_sqlite extension.

### Setup application

* `composer install`
* `php bin/console doctrine:database:create`
* `php bin/console doctrine:schema:update --force`

### Run application

`php bin/console acme:job:fetch`

### Run tests

`php vendor/bin/phpunit`

