<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/ehsanSepahi/toDo/assets/71543126/fd20f62f-50dc-47aa-9f0a-c55740d5142a" width="150" alt="Laravel Logo"></a></p>

<!-- <p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://github.com/ehsanSepahi/toDo/assets/71543126/cee10d3e-41d0-42fd-ae15-8a0c77d24b54" width="20" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p> -->


# Getting started

## Intro


Welcome to our online book store!

Introduction:
Our online book store is a web application built using the Laravel framework, which allows you to discover your favorite books based on various categories and easily purchase them. We proudly offer a diverse collection of books from different genres, including literature, science, educational, and university books.

Main Features of the Application:

1. Advanced Search: Through an advanced search engine, you can find books based on titles, authors, categories, or publication years.

2. Book Details Display: By clicking on each book, you can view detailed information such as the title, author, category, price, and complete description.

3. Add to Cart: You can add your favorite books to the cart and purchase them in the future.

4. Easy Purchase Process: Our secure and reliable checkout system ensures a smooth and confident book-buying experience.

5. Book Management: The book management system allows you to add new books to the store and update book information.

Utilization of Laravel Features:
To create this book store application, we have leveraged the powerful features of the Laravel framework, including:

1. Routing and Controllers: Utilizing routing and controllers in Laravel, we have defined routes and entry points to handle various book management operations.

2. Models and Migrations: With the help of models in Laravel, we interact with the database tables and easily manage book information using migrations.

3. Pagination: To display book lists in a paginated manner and enhance their management, we have implemented pagination within the application.

4. Forms and Validation: We use forms and validation in Laravel to validate user input and enable the addition and editing of books.

5. Sessions and Cart Management: Leveraging sessions in Laravel, we store and manage cart information for users.

By harnessing these Laravel capabilities, our book store application offers users the convenience of purchasing and managing books. Additionally, as we continue to develop the application, we will add new and enhanced features to further improve the user experience.

Note: The original text contained some Persian (Farsi) characters, and the translation does not cover all the information in the original text. Please let me know if you need any specific modifications or additions to the translation.
## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Alternative installation is possible without local dependencies relying on [Docker](#docker). 

Clone the repository

    git clone git@github.com:ehsanSepahi/BookStore.git

Switch to the repo folder

    cd BookStore

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate
    
Edit env file

    nano .env

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

in vps make sure you have activated the following item 

    sudo a2enmod rewrite
    systemctl restart apache2

**TL;DR command list**

    git clone git@github.com:ehsanSepahi/BookStore.git
    cd BookStore
    composer install
    cp .env.example .env
    php artisan key:generate
    nano .env
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve
    
    
## Docker

To install with [Docker](https://www.docker.com), run following commands:

```
git clone git@github.com:ehsanSepahi/BookStore.git
cd BookStore
cp .env.example.docker .env
docker run -v $(pwd):/app composer install
cd ./docker
docker-compose up -d
docker-compose exec php php artisan key:generate
docker-compose exec php php artisan migrate
docker-compose exec php php artisan serve --host=0.0.0.0
```

The BookStore can be accessed at [http://localhost:8000](http://localhost:8000).

## BookStore Specification

In this guide we will walk through building a modern Laravel application from scratch. 
You can login into system and make a chirp

----------

## Folders

- `app` - Contains all the Eloquent models
- `config` - Contains all the application configuration files
- `database/migrations` - Contains all the database migrations
- `routes` - Contains all the api routes defined in api.php file
- `tests` - Contains all the application tests

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------

# Testing

Run the laravel development server

    php artisan serve

The api can now be accessed at

    http://localhost:8000
