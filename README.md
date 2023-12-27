
## Steps to set up
- **Install composer on local PC
- **Run composer install```composer install ``` in the root of your application
- **Setup database name, database user and password
- **Run ```cp .env.example .env```
- **Open .env file and replace with appropriate values
- **```DATABASE_NAME```
- **```DATABASE_PASSWORD```
- **```DATABASE_USER```

- **Run ```php artisan cache:clear```
- **Run ```php artisan key:generate```
- **Run ```php artisan migrate```
- **Run ```php artisan db:seed```
- **Run ```php artisan optimize:clear``` to clear cache, view, config
