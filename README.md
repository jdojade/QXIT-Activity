<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# QXIT Activity

## Jade Oloroso

## System requirements
- Php 8.1 or higher
- Composer 2.5.4
- Laravel 10
- mysql database


## Preparation
1. Rename or copy .env.example file to .env
2. Generate application key (APP_KEY) in .env file. Type "php artisan key:generate"
3. Paste your mysql database configuration in .env file.

Example:  
  
DB_CONNECTION=mysql  
DB_HOST=localhost  
DB_PORT=3306  
DB_DATABASE=interviewdb  
DB_USERNAME=root  
DB_PASSWORD=secret  

## How to install the project
1.  Open terminal and type "composer install" to install packages
2. Download SQL file in repository -database/dumps/(Latests database dumps)
    - Create database named (interviewdb)
    - Import the SQL file in your database
### Or
3. Create database named (interviewdb)
    - Open terminal and type "php artisan migrate"


## How to run the project
- Open terminal and type "php artisan serve"
### Notes
- You can change the port if "php artisan serve" doesn't work ("php artisan serve --port=8080")
