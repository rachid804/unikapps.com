.PHONY: up start stop down ws fpm

CONTAINERS=nginx mysql redis
LARADOCK_PATH=../laradock
PROJECT_FOLDER=unikapps_v2

up:
	cd ${LARADOCK_PATH} && \
	docker-compose up -d  ${CONTAINERS}

start:
	cd ${LARADOCK_PATH} && \
	docker-compose start ${CONTAINERS}

# Stop All running containers. You can ppend ${CONTAINERS} to specify the containers.
stop:
	cd ${LARADOCK_PATH} && \
	docker-compose stop

#Restart containers
restart:
	cd ${LARADOCK_PATH} && \
	docker-compose stop && \
	docker-compose start ${CONTAINERS}

# Remove All containers. You can append ${CONTAINERS} to specify the containers
down:
	cd ${LARADOCK_PATH} && \
	docker-compose down

ps:
	cd ${LARADOCK_PATH} && \
	docker-compose ps

# SSH into workspace container
ws:
	docker exec -it \
		-w /var/www/${PROJECT_FOLDER} \
		laradock_workspace_1 \
		bash

# SSH into php-worker container
worker:
	cd ${LARADOCK_PATH} && \
	docker-compose exec \
		php-worker \
		bash

# SSH into redis container
redis:
	cd ${LARADOCK_PATH} && \
	docker-compose exec \
		redis \
		bash

# Run laradock/mysql/docker-entrypoint-initdb.d/*.sql
# too create the database if needed
createdb:
	cd ${LARADOCK_PATH} && \
	docker-compose exec \
	mysql \
	mysql -uroot -proot \
	-e "source /docker-entrypoint-initdb.d/uav2.sql"

# SSH into mysql container
mysql:
	cd ${LARADOCK_PATH} && \
	docker-compose exec \
	mysql \
	bash

#Run artisan command into VM
cmd=""
art:
	cd ${LARADOCK_PATH} && \
	docker-compose exec -u root\
		php-fpm \
		php artisan $(cmd) \
        2>/dev/null || true

job:
	cd ${LARADOCK_PATH} && \
	docker-compose exec -u root\
		workspace \
		php artisan make:job $(cmd) \
        2>/dev/null || true

#SSH into workspace
fpm:
	cd ${LARADOCK_PATH} && \
	docker-compose exec \
		php-fpm \
		bash
