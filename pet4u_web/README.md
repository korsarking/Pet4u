docker-compose up -d --build

docker exec -it pet4u_web bash

composer install
npm install
npm run dev

docker exec -it pet4u_web bash

cp .env.example .env

php artisan key:generate
php artisan storage:link
php artisan migrate