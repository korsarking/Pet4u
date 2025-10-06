terminal N1:
docker-compose up -d --build

docker exec -it pet4u_web bash

composer install
npm install
npm run dev


terminal N2:
docker exec -it pet4u_web bash

cp .env.example .env

php artisan key:generate     (php artisan config:clear   ->      if already exists and need to recreate)
php artisan storage:link     (rm -rf public/storage      ->      if already exists and need to recreate)
php artisan migrate

php artisan session:table (if an error occure about unexisting session table)
