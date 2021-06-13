# Run Database Migrations
php artisan migrate:fresh

# Run Database Seeders
php artisan db:seed --class=LettersTableSeeder
php artisan db:seed --class=WordsTableSeeder