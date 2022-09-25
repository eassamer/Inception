#!/bin/bash

echo "CREATE DATABASE IF NOT EXISTS ${DB_NAME};" > /var/www/initial_db.sql
echo "CREATE USER IF NOT EXISTS ${DB_USER}@'%' IDENTIFIED BY '${DB_PASSWORD}';" >> /var/www/initial_db.sql
echo "GRANT ALL PRIVILEGES ON ${DB_NAME}.* TO ${DB_USER}@'%';" >> /var/www/initial_db.sql
echo "FLUSH PRIVILEGES;" >> /var/www/initial_db.sql
echo "ALTER USER ${DB_ADMIN_LOGIN}@${LHOST} IDENTIFIED BY '${DB_ADMIN_PASSWORD}';" >> /var/www/initial_db.sql


service mysql start
mkdir -p /db/mysql
chmod 777 /db/mysql
mysql_install_db --basedir=/usr --datadir=/db/mysql
mysql -u root < /var/www/initial_db.sql