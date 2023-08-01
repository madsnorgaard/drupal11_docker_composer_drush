FROM drupal:10-php8.2-apache

RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends git

# Copy the necessary files into the container
COPY composer.json /opt/drupal/
COPY composer.lock /opt/drupal/
COPY settings.php /opt/drupal/web/sites/default/settings.php

# Change working directory to /opt
WORKDIR /opt/drupal
