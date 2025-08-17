#!/bin/bash

# Exit on any error
set -e

echo "Starting build process..."

# Install PHP dependencies
echo "Installing Composer dependencies..."
composer install --no-dev --optimize-autoloader

# Generate application key if not set
if [ -z "$APP_KEY" ]; then
    echo "Generating application key..."
    php artisan key:generate --force
fi

# Create database file if it doesn't exist
echo "Setting up database..."
touch database/database.sqlite

# Run database migrations
echo "Running database migrations..."
php artisan migrate --force

# Cache configuration for better performance
echo "Caching configuration..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Install Node.js dependencies and build assets
echo "Installing Node.js dependencies..."
npm ci

echo "Building frontend assets..."
npm run build

echo "Build completed successfully!"
