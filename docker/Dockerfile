FROM drupal:10-php8.2-apache

RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends git nano default-mysql-client

# Copy the necessary files into the container
COPY composer.json /opt/drupal/
COPY composer.lock /opt/drupal/
COPY settings.php /opt/drupal/web/sites/default/settings.php

# Create the translations directory with correct permissions
RUN mkdir -p /opt/drupal/web/sites/default/files/translations && \
    chown -R www-data:www-data /opt/drupal/web/sites/default/files/translations && \
    chmod -R 755 /opt/drupal/web/sites/default/files/translations

# Change working directory to /opt
WORKDIR /opt/drupal
