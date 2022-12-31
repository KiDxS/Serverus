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
5. Run “php artisan migrate --seed”.
6. Generate an app key ”php artisan key:generate”
7. Run “php artisan serve” to serve the web application.


### Manual importation of the database structure if you skipped the migration step
1. Login into phpmyadmin
2. Select the destination database on the left pane. 
3. Click on the Import tab in the top center pane. 
4. Under the File to import section, click Browse and locate the serverus.sql.
5. From the Format dropdown menu choose 'SQL'.
6. Click the Go button at the bottom to import the database.