# Use the official Visual Studio Code Codespaces image as the base image
FROM codespaces/ubuntu:latest

# Install PHP 7.4, MySQL, and Nginx
RUN apt-get update && apt-get install -y \
    php7.4 \
    php7.4-fpm \
    php7.4-mysql \
    nginx \
    mysql-client

# Copy the Nginx configuration file
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Copy the PHP application code to the container
COPY . /var/www/html

# Expose port 80 for Nginx
EXPOSE 80

# Start Nginx and PHP-FPM when the container launches
CMD ["nginx", "-g", "daemon off;"]
