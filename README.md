[![CI/CD Workflow](https://github.com/madsnorgaard/drupal10_docker_composer_drush/actions/workflows/main.yml/badge.svg?branch=main)](https://github.com/madsnorgaard/drupal10_docker_composer_drush/actions/workflows/main.yml)

# Project description
This project includes Drupal 10, Drush 10, Composer install of Drupal Recommended Project and can be used to develop, stage or put into production any Drupal 10 project.

Also included are drush/config-extra and other utilities for CI/CD in terms of a Drupal project - site updates, database schema updates, database backups, push of databases via git, backup of files, replication of production environments and much more.

This is a terminal built environment based on the minimal install profile and the `./drush site:install minimal` command.

The thought behind this approach is to prepare the environment and tools needed to always be running an updated system with a modern proactive approach. The main goal is to have a fully automated production ready installation. Thus this project includes no modules, dependencies or themes not needed for the project beforehand, making it more manageable and minimal in terms of maintenance.

## Development


### Run with Docker

For development purposes this project can be started with:

   ```sh
   $ docker-compose up -d
   ```

Drupal 9 will be available via [localhost:9998](http://localhost:9998/)

phpMyAdmin will for development purposes be available via [localhost:9999](http://localhost:9999/)

#### Basic site configuration
Rename your project or set your frontpage url:

- [go to your basic settings page via GUI](http://localhost:9998/admin/config/system/site-information)
- fill in the field "Default front page" with `/node`
- [visit the frontpage](http://localhost:9998/)

#### Fix file and cache permissions:

   ```sh
   $ chmod 777 -R web/sites/default/files
   ```


### Using Composer

#### Composer dependencies

To install modules or other dependencies strictly use Composer. Installed dependencies are locked to specific versions using the `composer.lock` file. `composer install` will install every package specified in `composer.json` with respect to the pinned versions in `composer.lock`.

#### Adding dependencies

Use `composer require` to add and install new packages. Alternatively add the requirement to `composer.json` and run `composer install`.

   ```sh
    $ docker-compose exec -T drupal composer require "vendor/package:2.*"
   ```

#### Updating dependencies

When a version update is needed, use `composer update vendor/package`.

   ```sh
   $ docker-compose exec -T drupal composer update vendor/package
   ```

On first run, the `composer.lock` file was generated using `composer update` without further parameters.

#### Running tests (coming soon)

   ```sh

   ```


### Using Drush
Run Drush commands using - this command provides a full list of useful Drush commands:

   ```sh
   $ docker-compose exec -T drupal ./drush
   ```
Full list of commands in [Drush 10](https://drushcommands.com/drush-10x/). A list such as this one is not available yet for Drush 10 but should suffice.

#### Backup of database using Drush and Docker

To backup the database, we will use Drush, Docker, and Bash. The backup files will be stored in the `backups` directory under `data`.

Here is the command to create a backup:

   ```sh
   $ docker exec -it madsnorgaard_drupal drush sql-dump --gzip --result-file=/opt/drupal/backups/drupal.madsnorgaard.net-$(date +%Y-%m-%d-%H-%M-%S).sql
   ```

This command does the following:

- `docker exec -it madsnorgaard_drupal` runs a command in the `madsnorgaard_drupal` Docker container.
- `drush sql-dump` uses Drush to create a dump of the Drupal database.
- `--gzip` compresses the dump file using gzip.
- `--result-file=/opt/drupal/backups/drupal.madsnorgaard.net-$(date +%Y-%m-%d-%H-%M-%S).sql` specifies the output file for the dump. The filename includes the current date and time to ensure that each backup file has a unique name.

After running this command, you can find the backup file in the `data/backups` directory. The backup file will have a `.sql.gz` extension and its name will include the date and time when the backup was created.
