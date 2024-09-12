FROM wordpress:latest

# Instalar las extensiones PHP necesarias para PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev postgresql-client \
    && docker-php-ext-install pdo pdo_pgsql

# Instalar Git
RUN apt-get update && apt-get install -y git

# Clonar el repositorio del plugin PG4WP
RUN git clone https://github.com/kevinoid/postgresql-for-wordpress.git /tmp/pg4wp \
    && cp -r /tmp/pg4wp/pg4wp /var/www/html/wp-content/plugins/pg4wp

# Copiar el archivo wp-config.php personalizado
COPY wp-config.php /var/www/html/wp-config.php