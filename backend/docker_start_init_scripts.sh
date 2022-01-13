[ ! -f ".env" ] && echo ".env file doesnot exists"

php artisan clear
php artisan cache:clear
php artisan config:clear
php artisan vue:clear

php artisan migrate --seed;

cp -f -r ../vendor vendor 
cp -f -r ../composer.lock composer.lock 

php artisan serve --host 0.0.0.0 --port 8000;