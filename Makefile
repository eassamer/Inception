all: build
	docker-compose --env-file srcs/.env -f ./srcs/docker-compose.yml up

build :
	docker-compose --env-file srcs/.env -f ./srcs/docker-compose.yml build

down :
	rm -rf /home/eassamer/data/*
	docker-compose -f ./srcs/docker-compose.yml down

re : down all