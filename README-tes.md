## Requirements
- PHP >= 7.4
- Composer


## Installation
- Create project
  ```bash
  composer create-project laravel/laravel my_project
  ```
- or Initialize existing project
  ```
  composer install
  ```
- Configure `.env`
- Generate app key if not exists
  ```
  php artisan key:generate
  ```
- Start dev server
  ```bash
  php artisan serve
  ```
- Migrate database
  ```
  php artisan migrate
  ```
- Install authentication package Laravel Fortify
  ```
  composer require laravel/fortify
  
  php artisan vendor:publish Laravel\Fortify\FortifyServiceProvider

  php artisan migrate
  ```

- Route file: `routes/web.php`
- Controller directory: `app/Http/Contollers`
- View directory: `resources/views`

- Generate resource controller
  ```
  php artisan make:controller --resource NameController
  ```