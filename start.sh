#!/bin/bash

# Create database if it doesn't exist
if [ ! -f database/database.sqlite ]; then
    touch database/database.sqlite
fi

# Run migrations
php artisan migrate --force

# Start the PHP built-in server
php -S 0.0.0.0:${PORT:-8000} -t public
