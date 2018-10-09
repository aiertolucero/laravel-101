## Laravel 101

Intended for Tech Forum on 10/10/2018 at Inspire Team. This project includes the following implementations:

- [Blade Templates](https://laravel.com/docs/blade).
- [Routing engine](https://laravel.com/docs/routing).
- [Database ORM](https://laravel.com/docs/eloquent).
- [Shema migrations](https://laravel.com/docs/migrations).


Install [Composer](https://getcomposer.org/download/), [Xampp](https://www.apachefriends.org/download.html) or just [MySQL](https://www.mysql.com/downloads/) and run the following:


1.  `composer install` - This command will install all the dependencies via Composer

2.  Create a `.env` file and copy whats inside the `.env.example`

3.  Modify your database config inside your `.env` file e.g.

        `DB_DATABASE=database_name`
        
        `DB_USERNAME=mysql_user`
        
        `DB_PASSWORD=password`
        
4.  Create a table in your MySql (Should match the database name inside your .env) 

5.  Run `php artisan key:generate` - This command will generate an application key to your `.env` file

6.  Run `php artisan migrate` - This command will generate `UserTable` and `GroupTable` in your database

7.  Run `php artisan serve` - This command will start a development server at `http://localhost:8000`
