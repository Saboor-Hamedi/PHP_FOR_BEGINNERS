# Use the official PHP image as the base
FROM php:8.2.7-apache

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql
RUN apt-get update
RUN apt-get install -y mariadb-server
# RUN apt-get update && apt-get install -y php-bcmath php-gmp
RUN apt update && apt install libgmp-dev -y && docker-php-ext-install gmp
# Copy custom Apache virtual host configuration
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
# Enable Apache rewrite module
RUN a2enmod rewrite
# Set the working directory
WORKDIR /var/www/html
# Copy the custom php.ini file to the container's PHP configuration directory
COPY ./php.ini /usr/local/etc/php/

# Copy your project files into the container
COPY . /var/www/html

EXPOSE 3306


# Start Apache in foreground
CMD ["apache2-foreground"]