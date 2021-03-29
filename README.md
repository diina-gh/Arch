## Arch
Arch is an admin dashboard build with laravel-admin, an administrative interface builder for laravel which can help us build CRUDs in a limited amount of time.

### About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

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
