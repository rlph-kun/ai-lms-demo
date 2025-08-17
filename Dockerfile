# Use official PHP image with Apache
FROM php:8.2-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    sqlite3 \
    libsqlite3-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_sqlite mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Create SQLite database
RUN touch database/database.sqlite

# Generate application key and run migrations
RUN php artisan key:generate --force
RUN php artisan migrate --force

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy Apache configuration
COPY <<EOF /etc/apache2/sites-available/000-default.conf
<VirtualHost *:80>
    DocumentRoot /var/www/html/public
    
    <Directory /var/www/html/public>
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog \${APACHE_LOG_DIR}/error.log
    CustomLog \${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
EOF

# Expose port 80 (Render will map this to the PORT env var)
EXPOSE 80

# Create a startup script that handles the PORT env variable
COPY <<EOF /usr/local/bin/start.sh
#!/bin/bash
# If PORT is set, configure Apache to use it
if [ ! -z "\$PORT" ]; then
    sed -i "s/80/\$PORT/g" /etc/apache2/sites-available/000-default.conf
    sed -i "s/Listen 80/Listen \$PORT/g" /etc/apache2/ports.conf
fi
exec apache2-foreground
EOF

RUN chmod +x /usr/local/bin/start.sh

# Start with our custom script
CMD ["/usr/local/bin/start.sh"]
