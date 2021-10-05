FROM php:8-fpm

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpq-dev \
    libpng-dev \
    libonig-dev \
    libzip-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install mbstring zip exif pcntl
RUN docker-php-ext-install gd
RUN docker-php-ext-install pdo pgsql  pdo_pgsql pgsql

# This image ships with the default php.ini-development and php.ini-production configuration files.
# It is strongly recommended to use the production config for images used in production environments!
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
#RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

#For a custom php.ini file, edit this file and uncomment the line
#COPY ./conf.d/php.ini-custom "$PHP_INI_DIR/php.ini"

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 web-user
RUN useradd -u 1000 -ms /bin/bash -g web-user web-user

# Set directory permissions
RUN chown -R web-user:web-user /var/www

# Change current user to www
USER web-user

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]

