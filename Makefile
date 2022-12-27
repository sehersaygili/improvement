setup:
	make build
	make up 
	make composer-update
build:
	docker-compose build --no-cache --force-rm
stop:
	docker-compose stop
up:
	docker-compose up -d
composer-update:
	docker exec improvement bash -c "composer update"
data:
	docker exec improvement bash -c "php artisan migrate"
	docker exec improvement bash -c "php artisan db:seed"