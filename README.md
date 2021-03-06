# RESTful APIs using Laravel

**Introduction**

**Pre Workshop Webinar:**

Introduction to Advanced Web Development

**Slides**

https://slides.com/saadbinamjad/intro-to-advanced-web-development

**Video**

[**https://www.facebook.com/watch/?v=34735400019038**](https://www.facebook.com/watch/?v=347354000190387)

**Workshop Structure**

Session 1

- Workshop Introduction
- RESTful API Concepts
- RESTful API Design

Session 2

- Laravel Essentials
- Bootstrapping with Laravel

Session 3

- Building RESTful APIs
- Open API Specification
- Coding Tasks.

Session 4

- Code Review
- Solution Discussion.

**Playground**

Whimsical

- https://whimsical.com/restful-api-design-CjrjT2QFVfnrVfJxSCCSbW

Local Playground:

- https://github.com/typicode/json-server

- Postman or Insomnia

**Reading Materials**

**API**

- https://www.redhat.com/en/topics/api/what-are-application-programming-interfaces
- https://stoplight.io/api-types/
- Eg: https://api.ratings.food.gov.uk/Help/Index
- Eg: https://docs.github.com/en/rest

**HTTP**

- https://developer.mozilla.org/en-US/docs/Web/HTTP/Overview
- https://www.freshblurbs.com/blog/2013/12/03/web-hypermedia-apis-node.html

**REST**

- https://www.ics.uci.edu/~fielding/pubs/dissertation/rest_arch_style.htm
- https://restfulapi.net/
- https://medium.com/extend/what-is-rest-a-simple-explanation-for-beginners-part-2-rest-constraints-129a4b69a582
- https://www.martinfowler.com/articles/richardsonMaturityModel.html
- https://blog.restcase.com/4-maturity-levels-of-rest-api-design/

**REST API Design**

- https://www.thoughtworks.com/insights/blog/rest-api-design-resource-modeling
- https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Objects/JSON

**Why no HATEOAS**

- Hypermedia as the engine of application state (https://www.youtube.com/watch?v=6UXc71O7htc)

**Best Practices:**

- https://stackoverflow.blog/2020/03/02/best-practices-for-rest-api-design/
- https://cloud.google.com/blog/products/api-management/api-design-best-practices-common-pitfalls

**Laravel Learning Paths**

- https://github.com/LaravelDaily/Laravel-Roadmap-Learning-Path

**Tasks**

We want to create an online book store that allows users to browse through different genres of books and then if they
want to purchase it, they need to sign in the system and order for their copy. The Admin, the store owner, can see the
orders and then decide to ship them according to the user addresses.

**Pre-requisites**

**Git**

**Github Account**

**With Docker**

Docker: https://docs.docker.com/get-docker/

Code Editor: like VSCode or get the free trail version of PHPStorm,

**Without Docker**

If no docker, then you have to install Composer, PHP (Preferred PHP 8, PHP 7.4 would also do), MySQL, Git, Redis.

Open API Specification: https://swagger.io/tools/swagger-editor/

****

## PHP

- Create a file named: index.php.

- Drop this code snippet:

```html
<!DOCTYPE html>
<html>
<body>
<h1>Saad</h1>
<?php
echo "Hello World!<br>";
?>
</body>
</html>
```

- Requires a web server to run its code.

- Comes with a built in server, when you install PHP.

- And then run the following command:

  `php -S localhost:3000 index.php`

In order to create web applications, and to have the best practises for reusuable scalable and maintainable PHP code, we
resort to PHP frameworks.

## Laravel

Benefits of Framework:

- Out-of-the-box application architecture.

- Faster development.

- Highly testable.

- Scalable

- Loosely coupled

- Easily maintainable applications.

Principles

    - Model View Controller
    - Laravel Codebase
    - Laravel Essentials
    - Bootstrapping with Laravel Breeze and JetStream

Examples

- Laravel 8 Demo: https://github.com/Saad-Amjad/laravel8-demo
- Laravel Breeze: https://github.com/Saad-Amjad/laravel-breeze-demo
- Laravel Jetstream: https://github.com/Saad-Amjad/laravel-jetstream-demo

## Task

We want to create an online book store that allows users to browse through different genres of books and then if they
want to purchase it, they need to sign in the system and order for their copy. The Admin, the store owner, can see the
orders and then decide to ship them according to the user addresses.

Sample GET Books API Task

```json
{
    "books": [
        {
            "title": "demo 1",
            "author": "saad1",
            "id": 1,
            "book_url": "api/v1/books/1",
            "author_url": "api/v1/authors/saad1"
        },
        {
            "title": "demo 2",
            "author": "saad2",
            "id": 2,
            "book_url": "api/v1/books/2",
            "author_url": "api/v1/authors/saad2"
        }
    ]
}

```
With Pagination and Meta

```json
{
  "data": [
    {
      "id": 1,
      "title": "Compatible exuding software as",
      "book_url": "api\/v1\/books\/1",
      "author": "Bethany Funk III",
      "author_url": "api\/v1\/authors\/1"
    },
    {
      "id": 2,
      "title": "Open-source asynchronous encoding",
      "book_url": "api\/v1\/books\/2",
      "author": "Bethany Funk III",
      "author_url": "api\/v1\/authors\/1"
    },
    {
      "id": 3,
      "title": "Configurable regional budgetarymanagement",
      "book_url": "api\/v1\/books\/3",
      "author": "Verona Lubowitz",
      "author_url": "api\/v1\/authors\/2"
    },
    {
      "id": 4,
      "title": "Ergonomic actuating support",
      "book_url": "api\/v1\/books\/4",
      "author": "Verona Lubowitz",
      "author_url": "api\/v1\/authors\/2"
    },
    {
      "id": 5,
      "title": "Business-focused bifurcated help-desk",
      "book_url": "api\/v1\/books\/5",
      "author": "Gerda Dare I",
      "author_url": "api\/v1\/authors\/3"
    }
  ],
  "links": {
    "first": "http:\/\/localhost:8000\/api\/v1\/books?page=1",
    "last": "http:\/\/localhost:8000\/api\/v1\/books?page=2",
    "prev": null,
    "next": "http:\/\/localhost:8000\/api\/v1\/books?page=2"
  },
  "meta": {
    "current_page": 1,
    "from": 1,
    "last_page": 2,
    "links": [
      {
        "url": null,
        "label": "&laquo; Previous",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/v1\/books?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": "http:\/\/localhost:8000\/api\/v1\/books?page=2",
        "label": "2",
        "active": false
      },
      {
        "url": "http:\/\/localhost:8000\/api\/v1\/books?page=2",
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "path": "http:\/\/localhost:8000\/api\/v1\/books",
    "per_page": 5,
    "to": 5,
    "total": 10
  }
}
```
## Todos / Steps

- [x] Installation

    - Steps: https://laravel.com/docs/8.x/installation

- [x] Design APIs (see above task)

- [x] Migration

    - `php artisan make:migration create_books_table`
    - `php artisan make:migration create_authors_table`

- [x] Relationships

    - `php artisan make:migration add_fk_to_books_table`

- [x] Models

    - `php artisan make:model Book`
    - `php artisan make:model Author`

- [x] Model Relationship

    - Author hasMany Books.
    - Books BelongsTo author.

- [x] Controllers

    - `php artisan make:controller BookController`
    - `php artisan make:controller AuthorController`

- [x] Create Routes

- [x] Create Factory

    - `php artisan make:factory AuthorFactory`
    - `php artisan make:factory BookFactory`

- [x] Create Seeder

    - `php artisan db:seed`

- [x] Create Resource

    - `php artisan make:resource BookResource`
    - `php artisan make:resource BookCollection`

- [x]  Feature Tests
    
    - `php artisan make:test BookTest`
    - Run: `./vendor/bin/phpunit`


- [x] [Optional] Install Sanctum

    - Optional: Install sanctum
      `composer require laravel/sanctum`
    - Enable sanctum
    - Enable middleware

- [x]  [Optional] Login / Register Routes
    
    - Create AuthController
    - Register Api
    - Login Api

- [x]  Predis

- [x]  Cache

- [x]  Swagger lumen

   - `composer require "darkaonline/l5-swagger"`
   - `php artisan l5-swagger:generate`
   - Create doc block and Schemas
   - Generate Docs and see: `http://localhost:8000/api/documentation`

- [ ]  Laravel Sail

- [ ]  JWT

