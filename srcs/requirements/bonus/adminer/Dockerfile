FROM debian:buster

RUN apt-get update
RUN apt-get -y install php7.3 php-mysqli php-fpm wget sendmail

EXPOSE 9000

COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d
COPY ./tools/script.sh /usr/bin/script.sh

RUN chmod +x /usr/bin/script.sh

ENTRYPOINT [ "/usr/bin/script.sh" ]
