<h1 align="center"> Play Laravel 4 FUN! </h1> 


## Table of Contents

- [Table of Contents](#table-of-contents)
- [Requirements](#requirements)
- [Installation](#installation)
- [Laravel simple note](#laravel-simple-note)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

### Introduction

Just for fun to learn laravel.

### Requirements

* Composer
* PHP 8
* Mysql

### Installation

_Below is an example of how you can instruct your audience on installing and setting up your app. This template doesn't rely on any external dependencies or services._

1. Clone the repo
   ```sh
   git clone https://github.com/izmal91/laravel4fun.git
   ```
2. Run composer
   ```sh
   composer install
   ```
3. Create database
4. Setup .env / put value in env
5. Run migration and seed
   ```sh
   php artisan migrate:fresh --seed
   ```
6. Start Laravel app
   ```sh
   php artisan serve
   ```

* * *

## Laravel simple note

### Basic setup

- laragon
- composer
- https://laravel.com/docs/10.x/installation
- Doc : https://laravel.com/docs/10.x/routing
- Make sure .env is exist.

Start laravel app in local
- `php artisan serve`

Migrate db and table with data
- `php artisan migrate:fresh --seed`

Create controller
- `php artisan make:controller UserController`

Create model
- `php artisan make:model Staff`

Create view
- `php artisan make:view firstPage`

Clear env cache (if new value not relfected)
- `php artisan cache:clear`

* * *

### Basic file/path to know before run laravel.

1 - Route
- routes/web.php

2 - Controller
- app/Http/controller/name_file_controller.php

3 - Model
- app/name_file_model.php

4 - View
- resources/views/page_pertama_view.blade.php