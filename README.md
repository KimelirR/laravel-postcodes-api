# Laravel API to search location through valid postcode
## Installation

* clone this project into your machine
  ```
  git clone https://github.com/KimelirR/laravel-postcodes-api.git
  ```

* Install project dependencies

  ```php
   composer install
  ```

  ```javascript
    npm install
  ```

* Create .env file through copy
  ```
    cp .env.example .env
  ```
 
* Provide database credentials below in .env file.
  ```
     DB_DATABASE=?
     DB_USERNAME=?
     DB_PASSWORD=?
  ```

> Incase you want multidatabase connection then uncomment commented database and provide credentials

* To run the project

    ```php
    php artisan key:generate
    ```
    ```php
    php artisan migrate --seed
    ```

* Spin development servers

    ```javascript
    npm run dev
    ```

    ```php
    php artisan serve
    ```

* Then check localhost:8000 or click the link provided on npm run dev and check your browser
