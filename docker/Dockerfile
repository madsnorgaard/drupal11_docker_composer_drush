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
    mkdir -p /opt/drupal/web/sites/default/files/translations

# Change working directory to /opt
WORKDIR /opt/drupal

CMD ["apache2-foreground"]
