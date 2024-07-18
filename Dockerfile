# Use the official PHP image with Apache
FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html/

# Copy only the necessary directories and files
COPY public/ /var/www/html/public/
COPY app/ /var/www/html/app/
COPY config/ /var/www/html/config/
COPY init.sql /docker-entrypoint-initdb.d/init.sql
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Install dependencies
RUN docker-php-ext-install pdo pdo_mysql

# Enable rewrite module
RUN a2enmod rewrite

# Set ServerName directive
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
