FROM php:7.4-apache
MAINTAINER jonsolakis@gmail.com

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    unzip \
    curl

# Install extensions
RUN docker-php-ext-install pdo_mysql

# Copy existing application directory contents
COPY . /var/www/c51
WORKDIR /var/www/c51

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install

#copy apache files
COPY ./docker/default.conf /etc/apache2/sites-available/000-default.conf
RUN a2enmod rewrite
RUN chown -R www-data:www-data /var/www


# Set working directory
#WORKDIR /var/www/html/c51/public
CMD ["sh", "startup.sh"]


