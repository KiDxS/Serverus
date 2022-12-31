# Serverus

Things that are needed:
1. XAMPP Version 8.1.12 (PHP 8.1.12)
2. Composer

## Getting Started
1. Go to the directory of the designated project with the command-line.
2. Install the dependencies of the project ”composer install”.
3. Copy ".env.example" as ".env"
4. Change the following settings in the “.env” file.

    a. DB_USERNAME - your username in your MySQL instance

    b. DB_PASSWORD - your password in your MySQL instance

    c. DB_DATABASE=serverus
5. Turn on your mysql instance.
6. Run “php artisan migrate --seed”.
7. Generate an app key ”php artisan key:generate”
8. Run “php artisan serve” to serve the web application.
