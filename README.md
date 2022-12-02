# Assessment Website
## Installation Instructions
Clone this repo, open terminal and navigate to the folder containing the cloned repo, then run the following commands.
Before running the commands, create a .env file. _See the .env.example.._


```sh
composer install
php artisan migrate
php artisan db:seed
php artisan serve
```

Now on yr browser goto http://127.0.0.1:8000 for website
& http://127.0.0.1:8000/admin for admin panel

Default email: admin@gmail.com

Default password: admin
