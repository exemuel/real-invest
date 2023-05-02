<p align="center"><img src="public\real-invest-logo.png"></a></p>

## About Real Invest

Real Invest is a web application that is my learning project.


## Getting Started

1. Clone the repo, then enter the project directory with terminal.
2. Install required packages that are stated in `composer.json`.
```
composer install
```
3. Create `.env` file by copying `.env.example`. 
```
cp .env.example .env
```
4. Generate the new key to your `.env` file.
```
php artisan key:generate
```
5. Create new database using migration and fill the database using seeder, then change the `.env`.
```
php artisan migrate --seed
```
6. Run.
```
php artisan serve
```


## License

The application is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
