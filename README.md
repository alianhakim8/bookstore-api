<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Instalation

Follow this : 
> 1. Download/clone this project && run this command : composer install
> 
> 2. Rename file .env[backup] to .env 
> 
> 3. import db bookstore_api.sql from repository to your localhost mysql
> 
> 4. run this command : php artisan migrate
>
> 4. run this command : php artisan serve 

Setup Virtual Host (Windows 10 xampp) 
add this script to xampp/apache/conf/extra/http-vhost.conf
``` 
<VirtualHost *:8081>
    ServerName bookstore-api
    DocumentRoot "D:/xampp/htdocs/bookstore-api/public"
    SetEnv APPLICATION_ENV "development"
    <Directory "D:/xampp/htdocs/bookstore-api/public">
        DirectoryIndex index.php
        AllowOverride All
        Order allow,deny
        Allow from all
    </Directory>
</VirtualHost> 
```
add this script to C:\Windows\System32\drivers\etc\hosts (edit with admin privilege / run administator for windows)
```
    127.0.0.1 bookstore-api
```
## Output
Simple Get Request Example
```
{
"status": "success",
"message": "books data",

"data": {
"current_page": 1,

"data": [

        {
        "id": 1,
        "title": "Aut beatae iusto dolore ad",
        "slug": "aut-beatae-iusto-dolore-ad",
        "description": "Fugit nesciunt reprehenderit expedita amet. Labore voluptas nihil ea. In quaerat soluta aut repudiandae. Qui consequatur accusamus aut et. Facilis beatae eveniet dolores sint.",
        "author": "Prof. Meta Homenick Sr.",
        "publisher": "Kihn-Erdman",
        "cover": "unavailable.jpg",
        "price": 250000,
        "weight": 0.5,
        "views": 0,
        "stock": 0,
        "status": "PUBLISH",
        "created_at": "2021-06-16T00:19:28.000000Z",

        "updated_at": null,

        "deleted_at": null
        },

        {
        "id": 2,
        "title": "Iusto occaecati voluptatem consequatur quod",
        "slug": "iusto-occaecati-voluptatem-consequatur-quod",
        "description": "Laudantium maiores et aliquid quibusdam explicabo voluptas officia. Doloremque qui expedita rerum eveniet sunt omnis omnis. Aut exercitationem tempora et cupiditate dolores. Animi aperiam ut illum doloribus omnis.",
        "author": "Alberto Douglas",
        "publisher": "Schamberger-Shanahan",
        "cover": "unavailable.jpg",
        "price": 350000,
        "weight": 0.5,
        "views": 0,
        "stock": 0,
        "status": "PUBLISH",
        "created_at": "2021-06-16T00:19:28.000000Z",

        "updated_at": null,

        "deleted_at": null
        },

        {
        "id": 3,
        "title": "Reiciendis dicta rerum voluptas",
        "slug": "reiciendis-dicta-rerum-voluptas",
        "description": "Ipsam voluptas error est nisi. Est tempora quaerat saepe nam sunt ducimus reiciendis fugiat. Nihil exercitationem eius ea et veniam fugit.",
        "author": "Shane Hammes PhD",
        "publisher": "Renner PLC",
        "cover": "unavailable.jpg",
        "price": 250000,
        "weight": 0.5,
        "views": 0,
        "stock": 0,
        "status": "PUBLISH",
        "created_at": "2021-06-16T00:19:28.000000Z",

        "updated_at": null,

        "deleted_at": null
        },

        {
        "id": 4,
        "title": "Voluptatibus earum qui",
        "slug": "voluptatibus-earum-qui",
        "description": "Ipsam id facere esse dicta nisi. Qui et omnis natus porro. Quos ullam doloribus architecto ut id saepe. Sunt recusandae doloribus officia.",
        "author": "Jacinto Russel",
        "publisher": "Bartell, Hammes and Wyman",
        "cover": "unavailable.jpg",
        "price": 100000,
        "weight": 0.5,
        "views": 0,
        "stock": 0,
        "status": "PUBLISH",
        "created_at": "2021-06-16T00:19:29.000000Z",

        "updated_at": null,

        "deleted_at": null
        }
],

"first_page_url": "http://bookstore-api:8000/api/v1/books?page=1",
"from": 1,
"last_page": 7,
"last_page_url": "http://bookstore-api:8000/api/v1/books?page=7",

"links": [
        {

        "url": null,
        "label": "&laquo; Previous",
        "active": false
        },

        {
        "url": "http://bookstore-api:8000/api/v1/books?page=1",
        "label": "1",
        "active": true
        },

        {
        "url": "http://bookstore-api:8000/api/v1/books?page=2",
        "label": "2",
        "active": false
        },

        {
        "url": "http://bookstore-api:8000/api/v1/books?page=3",
        "label": "3",
        "active": false
        },

        {
        "url": "http://bookstore-api:8000/api/v1/books?page=4",
        "label": "4",
        "active": false
        },

        {
        "url": "http://bookstore-api:8000/api/v1/books?page=5",
        "label": "5",
        "active": false
        },

        {
        "url": "http://bookstore-api:8000/api/v1/books?page=6",
        "label": "6",
        "active": false
        },

        {
        "url": "http://bookstore-api:8000/api/v1/books?page=7",
        "label": "7",
        "active": false
        },

        {
        "url": "http://bookstore-api:8000/api/v1/books?page=2",
        "label": "Next &raquo;",
        "active": false
        }
        ],
        "next_page_url": "http://bookstore-api:8000/api/v1/books?page=2",
        "path": "http://bookstore-api:8000/api/v1/books",
        "per_page": 4,

        "prev_page_url": null,
        "to": 4,
        "total": 25
        }
    }
```

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Purpose of the project
dibuat sebagai salah satu tugas praktikum mata kuliah Web Design
