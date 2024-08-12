FROM drupal:11-php8.3-apache

# Install necessary packages
RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends git nano default-mysql-client unzip

# Create the necessary directories and set permissions
RUN mkdir -p /opt/drupal/web/sites/default/files && \
    mkdir -p /opt/drupal/web/sites/default/files/assets/js && \
    mkdir -p /opt/drupal/web/sites/default/files/translations && \
    chown -R www-data:www-data /opt/drupal/web/sites/default/files && \
    chmod -R 775 /opt/drupal/web/sites/default/files

# Copy files to /opt/drupal
COPY composer.json /opt/drupal/
COPY composer.lock /opt/drupal/
COPY settings.php /opt/drupal/web/sites/default/settings.php
COPY config/* /opt/drupal/config/

# Set ownership and permissions for /opt/drupal
RUN chown -R www-data:www-data /opt/drupal && \
    chmod -R 775 /opt/drupal

# Set the working directory
WORKDIR /opt/drupal

# Ensure Apache runs as the correct user
CMD ["apache2-foreground"]
