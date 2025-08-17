# Use official PHP image
FROM php:8.2-cli

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

# Copy production environment file
COPY .env.production .env

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Create SQLite database
RUN touch database/database.sqlite

# Generate application key and run migrations
RUN php artisan key:generate --force
RUN php artisan migrate --force

# Set permissions
RUN chmod -R 755 storage bootstrap/cache

# Expose port (Render will provide PORT env var)
EXPOSE 8080

# Start PHP built-in server
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
