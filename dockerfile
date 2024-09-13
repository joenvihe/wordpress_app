FROM wordpress:latest

# Instalar las extensiones PHP necesarias para PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev postgresql-client \
    && docker-php-ext-install pdo pdo_pgsql

# Instalar Git
RUN apt-get update && apt-get install -y git

# Install WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp

# Clonar el repositorio del plugin PG4WP
RUN git clone https://github.com/kevinoid/postgresql-for-wordpress.git /tmp/pg4wp \
    && cp -r /tmp/pg4wp/pg4wp /var/www/html/wp-content/plugins/pg4wp \
    && cp /tmp/pg4wp/db.php /var/www/html/wp-content/db.php

# Copiar el archivo wp-config.php personalizado
COPY wp-config.php /var/www/html/wp-config.php