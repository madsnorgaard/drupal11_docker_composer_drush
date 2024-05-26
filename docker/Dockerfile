FROM drupal:10-php8.2-apache

RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends git nano default-mysql-client

# Copy the necessary files into the container
COPY composer.json /opt/drupal/
COPY composer.lock /opt/drupal/
COPY settings.php /opt/drupal/web/sites/default/settings.php
COPY config/* /opt/drupal/config/

# Ensure permissions for settings.php and other directories
RUN mkdir -p /opt/drupal/web/sites/default/files/assets/js && \
    mkdir -p /opt/drupal/web/sites/default/files/translations && \
    chown -R www-data:www-data /opt/drupal/web/sites/default/files && \
    chmod -R 755 /opt/drupal/web/sites/default/files && \
    chown -R www-data:www-data /opt/drupal && \
    chmod -R 755 /opt/drupal && \
    mkdir -p /opt/drupal/.composer/cache && \
    chown -R www-data:www-data /opt/drupal/.composer && \
    chmod -R 755 /opt/drupal/.composer && \
    chown -R www-data:www-data /opt/drupal/config && \
    chmod -R 755 /opt/drupal/config

# Change working directory to /opt
WORKDIR /opt/drupal

CMD ["apache2-foreground"]
