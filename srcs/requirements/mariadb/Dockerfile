FROM debian:buster

ARG DB_NAME
ARG DB_USER
ARG DB_PASSWORD
ARG DB_HOST
ARG DB_ADMIN_LOGIN
ARG DB_ADMIN_PASSWORD
ARG LHOST
ARG DB_CHARSET

RUN apt-get update
RUN apt-get install -y mariadb-server

EXPOSE 3306

ADD ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
ADD ./tools /var/www/

RUN chmod +x /var/www/*

RUN "/var/www/script2.sh"
ENTRYPOINT ["mysqld"]
