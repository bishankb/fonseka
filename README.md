# Daily Routine Application
## Requirements
    $ php 8.0 +
    $ node.js

## Setting up environment

    * Clone the project.
    * Create database 'foneseka' or any other.
    * Use the existing environment file provided or Copy .env.example and setup the environment
    
## Running command to install dependencies and node modules
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
    * Change APP_URL=http://localhost to APP_URL=http://localhost:8000 in line 5 in .env
    * Setup mailtrap for testing.

## Note:
	* Add button will be disabled after the data is added and will be enable on the next day. To test it please alter the day of 'created_at' in 'routine' table.

## Username and Password for login
    *admin@admin.com
    *secret

