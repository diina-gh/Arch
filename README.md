## Arch
Arch is an admin dashboard build with laravel-admin, an administrative interface builder for laravel which can help us build CRUDs in a limited amount of time.

### About Laravel

[Laravel](https://laravel.com/) is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as routing, dependency injection, database ORM, ...

### Getting started with laravel-admin

First, install laravel 5.5, and make sure that the database connection settings are correct.
```shell
composer require encore/laravel-admin
```

Then run these commands to publish assets and config：
```shell
php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"
```

After run command you can find config file in config/admin.php, in this file you can change the install directory,db connection or table names.

At last run following command to finish install
```shell
php artisan admin:install
```
