# Daily Routine Application
## Requirements
    $ php 8.0 +
    $ node.js

## Setting up environment

    // Clone the project.
    $ Create database 'foneseka' or any other database.
    $ Use the existing environment file provided or Copy .env.example and setup the environment
    $ composer install
    $ npm install
    $ npm run dev
    $ php artisan migrate:fresh --seed

## Running artisan and node command
    $ php artisan serve
    $ npm run watch

## Run the custom command to manually send the notification to all the users to enter daily routine via email
    $ php artisan schedule:run
    * Note: The automatic message is sent every minute for testing purpose. To make it daily change everyMinute() to daily() in line 19 in app/console/kernel.php.
    * Setup mailtrap for testing.

## Note:
	* Add button will be disabled after the data is added. It will be enable on the next day. To test it please alter the day of 'created_at' in 'routine' table.
