FROM wordpress:latest

# Instalar las extensiones PHP necesarias para PostgreSQL
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Copiar el archivo wp-config.php personalizado
COPY wp-config.php /var/www/html/wp-config.php