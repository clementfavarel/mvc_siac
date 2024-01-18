FROM php:8.2.7-apache

# Install required extensions
RUN docker-php-ext-install pdo pdo_mysql

# Set the working directory
WORKDIR /var/www/html

# Copy the application code into the container
COPY . /var/www/html

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set DirectoryIndex
RUN echo "DirectoryIndex index.php" >> /etc/apache2/apache2.conf

# Expose port 80 for Apache
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]