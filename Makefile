all :
	docker-compose --env-file srcs/.env  -f ./srcs/docker-compose.yml up -d --build


down : 
	docker-compose -f ./srcs/docker-compose.yml down



fclean:
	docker kill $$(docker ps -qa) 
	docker rm $$(docker ps -qa)
	docker volume rm $$(docker volume ls -q)
	docker network rm $$(docker network ls -q)
	docker image prune -a -f
	