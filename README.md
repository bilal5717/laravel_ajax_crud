Laravel Ajax CRUD 

A version example of Laravel and AJAX with mysql Datatables (jQuery DataTables API for Laravel) application created on:

back end (server side) with PHP and Laravel 8 (PHP framework); there is no authentication free to use without any login sysstem
front end (client side, browser side) with jQuery (JavaScript library) and Bootstrap (CSS framework).
database: MySQL.
Installation

Clone the repository:

git clone https://github.com/albeisoft/products-laravel-crud-ajax.git

Then cd into the folder with this command:

cd laravel-crud-ajax

Then do a composer install:

composer install

Edit .env file with appropriate credential for your database server. Just edit these two parameter(DB_USERNAME, DB_PASSWORD).

Then create a database named "products" and then do a database migration using this command:

php artisan migrate

Run server

Run server using this command:

php artisan serve

Run (compile) front end scripts

Run this command (any change you make to the HTML, CSS, JavaScript code will be reflected immediately in the page you see in your browser):

npm run dev

Then go to http://localhost:8000 from your browser and see the web application.
