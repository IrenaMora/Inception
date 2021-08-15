#service mysql start
#mysql -e "UPDATE mysql.user SET PASSWORD = PASSWORD('JoJi001') WHERE user = 'root';"
#mysql -e "UPDATE mysql.user SET PLUGIN = '' WHERE USER = 'root';"
#mysql -e "CREATE USER IF NOT EXISTS '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASSWORD}';"
#mysql -e "CREATE USER IF NOT EXISTS 'gmother'@'%' IDENTIFIED BY 'JoJi003';"
#mysql -e "CREATE DATABASE IF NOT EXISTS ${DB_NAME} DEFAULT CHARACTER SET utf8;"
#mysql -e "GRANT ALL ON ${DB_NAME}.* TO '${DB_USER}'@'%';";
#mysql -e "FLUSH PRIVILEGES;"
#service mysql stop
#mysqld

cat << EOF > /scripts/script.sql
CREATE USER IF NOT EXISTS '${DB_USER}'@'%' IDENTIFIED BY '${DB_PASSWORD}';
CREATE USER IF NOT EXISTS 'gmother'@'%' IDENTIFIED BY 'JoJi003';
CREATE DATABASE IF NOT EXISTS ${DB_NAME} DEFAULT CHARACTER SET utf8;
GRANT ALL ON ${DB_NAME}.* TO '${DB_USER}'@'%';
FLUSH PRIVILEGES;
UPDATE mysql.user SET PASSWORD = PASSWORD('${DB_ROOT_PASSWORD}') WHERE user = 'root';
UPDATE mysql.user SET PLUGIN = '' WHERE USER = 'root';
FLUSH PRIVILEGES;
EOF
sleep 1
mysqld_safe --init-file=/scripts/script.sql