<div align="center">
    <h1>Serverus</h1>
    <p>Helps retail businesses with their operations</p>
    <a href="https://serverusrms.herokuapp.com">
        <img src="https://img.shields.io/badge/demo-https%3A%2F%2Fserverusrms.herokuapp.com-green">
    </a>
    <img src="https://img.shields.io/mastodon/follow/109370119736891087?domain=https%3A%2F%2Fhachyderm.io&style=social">

</div>

Serverus is a Retail Management System with a web-based user interface and relational database. It is used to process goods throughout the entire supply chain, from purchasing and production to end sales. 


## Getting Started
**Things that are needed:**
- PHP 8.0 and above
- Composer

**Setup steps**
1. Go to the directory of the designated project with the command-line.
2. Install the dependencies of the project ”composer install”.
3. Copy ".env.example" as ".env"
4. Change the following variables in the “.env” file.

    a. DB_USERNAME - your username in your MySQL instance

    b. DB_PASSWORD - your password in your MySQL instance

    c. DB_DATABASE - the name of your database

    d. STORE_NAME - the name of your store

    e. INVENTORY_NAME - the name of your inventory

5. Turn on your mysql instance.
6. Run “php artisan migrate --seed”.
7. Generate an app key ”php artisan key:generate”
8. Run “php artisan serve” to serve the web application.
