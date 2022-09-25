#!/bin/bash

sed -i "s/listen = \/run\/php\/php7.3-fpm.sock/listen = 9000/" "/etc/php/7.3/fpm/pool.d/www.conf";
chown -R www-data:www-data /var/www/*;
chown -R 755 /var/www/*;
mkdir -p /run/php/;
touch /run/php/php7.3-fpm.pid;

if [ ! -f  /var/www/adminer/index.php ]; then
    wget https://github.com/vrana/adminer/releases/download/v4.8.1/adminer-4.8.1.php > /dev/null
    cp adminer-4.8.1.php /var/www/adminer/index.php
fi

echo "adminer"

/usr/sbin/php-fpm7.3 --nodaemonize