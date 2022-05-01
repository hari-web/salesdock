#Project Setup


##System Requirements

- PHP 7.4
- mysql 5.7 or later
- Laravel Version : 8

##Clone the project

    cd \var\www\html
    git clone https://github.com/hari-web/salesdock.git salesdoc
    cd salesdoc


##Install composer dependencies

    composer install

##.env setup 

Run the below commands

    cp .env.example .env
    php artisan key:generate
    
	
### Update Database Credentials

Open .env file and then update following parameters with your database credentials. You need to create a datadase in your local server

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=salesdock
    DB_USERNAME=root
    DB_PASSWORD=password
    

## Run Migration and Seeder

Please run the following commands

    php artisan migrate
    php artisan db:seed

## Run Application in Local server

    php artisan serve

## Test the Application
Please visit this URL using a browser

    http://127.0.0.1:8000/products


