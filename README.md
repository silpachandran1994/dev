<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Clone project

`cd <project_dir>`

`copy .env.example to .env`

`Note: edit database configuration and also create a database in our mysql`

## Run

`composer install`

`php artisan migrate`

`php artisan key:generate`

`php artisan serve`

## What I did?

`Uses latest version of laravel`

`composer create-project laravel/laravel technical-task`

`Change code in welcome.blade.php`

`create css/style.css and css/variable.css file for style`

`php artisan make:model Role -m same way create other model and migration files`

`create seeder file for Roles ::  php artisan make:seeder RoleSeeder`

`php artisan make:controller RegisterController --resource`

`install jsdecena/baserepo package for repository pattern ::   composer require jsdecena/baserepo`

`create repository service provider ::  php artisan make:provider RepositoryServiceProvider`

`create repositories folder inside App directory. And interfaces folder inside App/repositories`

`Create RegisterRepository and RegisterInterfaces and register these two file in serviceprovider`

`create request file php artisan make:request RegisterRequest`

`And validation rule and message there`

`check request message using dd()`

`implement many to many relationship with role and user and wise versa`

`create store function in controller and implement in repositories`

`resource Route created`

`create table view page using blade file and pass the values through compact`

`Display the table values`

`Job and mail section i can't complete. I don't local it's working or not. I create notification file using :::

php artisan make:notification WelcomeEmailNotification `

`And also add notify code in controller. But commented.`
