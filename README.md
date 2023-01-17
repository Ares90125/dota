# Test project 

## Auther : Alexis

## Project setup

### Version

  `PHP` 8.0.8
  
  `Laravel` 9.47.0
  
  `Node` 16.14.2

+ step 1
create .env fie

+ Step 2: Set email to .env (copy from .env.example and create schema mysql)

  MAIL_MAILER=smtp

  MAIL_HOST=smtp.gmail.com

  MAIL_PORT=587

  MAIL_USERNAME=<your Email>

  MAIL_PASSWORD=<your email password>

  MAIL_ENCRYPTION=tls

  MAIL_FROM_ADDRESS=null

  MAIL_FROM_NAME=<display name>

+  Step 3: setting DB 

    `create dota database in MySQL`

    `setting .env file for DB`

    DB_CONNECTION=mysql

    DB_HOST=127.0.0.1

    DB_PORT=3306

    DB_DATABASE=dota

    DB_USERNAME=root

    DB_PASSWORD=


+ Step 4:
    Run command
    ```
    composer install
    ```
    ```
    yarn or npm install
    ```
    ```
    Run dota.sql file in dota database with MySQL
    ```
+ Step 5: Generation APP key

    `php artisan key:generate`

+ Step 6: setup queue

    restart queue => `php artisan queue:restart`

    run queue => `php artisan queue:listen`


+ Step 7: reload config

    `php artisan config:cache`

+ Step 8: run server

    `php artisan serve`

## Run project

    php artisan serve
    yarn dev

## Site check
+ admin site   `localhost:8000/admin`

   `email`: admin@test.com

   `password`: 123123123
+ Frontend site   `localhost:8000`
+ Login url     `localhost:8000/login`

    `email`: user1@test.com

   `password`: 123123123



## Contact Info for question or help 
  
  `mail`: maw53574@gmail.com

  `skype`: live:.cid.1ff854fb8e309dce

