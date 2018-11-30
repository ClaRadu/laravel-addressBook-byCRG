### CRG Address Book v.1.2 powered by laravel

[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

## License:
This project is under the same license as the Laravel framework ( see below ):

This project is open-sourced software licensed under the [MIT license] (http://opensource.org/licenses/MIT)

For more information you can check the file 'license.md'.

## Installation:
You can create a default laravel project using the command below:

composer create-project laravel/laravel [project_name]

And just replace its contents with the files and folders of my project.

## Setup:
If you're not accustomed to setting up a laravel project for local use, check my tutorials:

https://youtu.be/72ZdoLAp8TI

https://crgtutorials.blogspot.com/2017/10/laravel-hello-world-example-using-xampp.html

## Configuration ( for testing locally ):
In [project_root] -> '.env' file:

DB_HOST=localhost

DB_DATABASE=users

DB_USERNAME=root

DB_PASSWORD=

* You may need to create the database manually

## Project commands (if done manually):
Creating tables:

php artisan migrate:install

php artisan migrate

Creating migrations:

php artisan make:migration [migration_file_name] --create=[table_name]

Populating the tables with test data:

php artisan db:seed

Creating models ( with migration ):

php artisan make:model [name]

Creating controllers:

php atrisan make:controller [name] --plain

Creating policies:

php atrisan make:policy [name]


## Containing:
In 'database/migrations':

xxxx_xx_xx_xxxxxx_create_users_table.php	( default file but modified - holds users )

xxxx_xx_xx_xxxxxx_create_books_table.php	( create address book table )

In 'database/seeds':

DatabaseSeeder.php		( default file but modified - populates the tables with test data )

In 'app/':

User.php	( default file but modified - model - corresponds to 'users' table )

Book.php	( model - handles the book object - corresponds to 'books' table )

In 'app/Http':

routes.php	( default file but modified - holds all routing for the app's pages )

In 'app/Http/controllers':

HomeController.php	( default file but modified )

BookController.php	( created )

In 'app/Providers/':

AuthServiceProvider.php		( created )

RouteServiceProvider.php	( default - modified )

In 'app/Policies':

BookPolicy.php		( created )

In 'app/Repositories/':

BookRepository.php	( created - holds all data access logic for the Book model )

In 'resources/views/':

app.blade.php		( default - modified )

home.blade.php		( default - modified - main page )

welcome.blade.php	( default - modified )

In 'resources/views/books/':

index.blade.php		( created - view - testing )

create.blade.php	( created - view )

update.blade.php	( created - view )

In 'resources/views/common/':

errors.blade.php	( created )


## Thanks to:
links:
https://laravel.com/

https://github.com/laravel/quickstart-intermediate

https://www.tutorialspoint.com/laravel/

https://laracasts.com/

## C.R.G. 2018


## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/downloads.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
