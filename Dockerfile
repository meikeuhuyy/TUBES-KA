# Gunakan image PHP dengan versi yang sesuai
FROM php:8.2.4-fpm

# Set environment variables untuk Composer
ENV COMPOSER_ALLOW_SUPERUSER=1

# Instal dependensi yang diperlukan
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    nginx \
    supervisor \
    && apt-get clean

# Instal PHP extensions yang diperlukan Laravel
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip

# Instal Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Salin file composer.json dan composer.lock
COPY composer.json composer.lock ./

# Instal dependensi Laravel
RUN composer install --no-dev --optimize-autoloader --prefer-dist --no-interaction --no-scripts

# Salin semua file proyek ke dalam container
COPY . .

RUN chown -R www-data:www-data /var/www \
    && chmod -R 755 /var/www

# Beri permission untuk konfigurasi
COPY nginx.conf /etc/nginx/nginx.conf
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Salin entrypoint script
COPY entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/entrypoint.sh

# Expose port 80 untuk Nginx dan port 9000 untuk PHP-FPM
EXPOSE 80 9000

# Gunakan entrypoint script
ENTRYPOINT ["entrypoint.sh"]

# CMD untuk memulai Supervisor
CMD ["/usr/bin/supervisord"]
