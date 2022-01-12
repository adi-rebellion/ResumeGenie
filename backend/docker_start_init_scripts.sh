echo "Starting populating vendors"
[ ! -d "vendor" ] && composer install && composer dump-a
echo "Done populating vendors"

echo "Starting populating npm"
[ ! -d "node_modules" ] && npm install  
[ ! -d "node_modules" ] && sudo npm install --save --unsafe-perm=true -g resume-cli
[ ! -d "node_modules" ] && sudo npm install --save -g jsonresume-theme-even 
[ ! -d "node_modules" ] && sudo npm install --save -g jsonresume-theme-elegant
echo "Done populating npm"


[ ! -f ".env" ] && echo ".env file doesnot exists"

php artisan clear
php artisan cache:clear
php artisan config:clear
php artisan vue:clear

php artisan migrate --seed;

php artisan serve --host 0.0.0.0 --port 8000;