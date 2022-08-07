# Daily Routine Application
## Requirements
    $ php 8.0 +
    $ node.js

## Setting up environment

    // Clone the project.
    
    $ Use the existing environment file provided or Copy .env.example and setup the environment
    $ composer install
    $ npm install
    $ npm run dev
    $ php artisan migrate:fresh --seed

## Running artisan and node command
    $ php artisan serve
    $ npm run watch

## Run the custom command to manually send the notification to enter daily routine via mail
    $ php artisan schedule:run
    $ *Note: The automatic message is sent every minute. To make it daily change everyMinute() to daily() in line 19 in app/console/kernel.php.
