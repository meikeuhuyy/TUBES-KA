#!/bin/bash

# Jalankan migrasi dan generate APP_KEY
php artisan key:generate
php artisan migrate --force

# Lanjutkan ke perintah default
exec "$@"
