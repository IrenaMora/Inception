sed -i -e "s/DB_NAME_TO_REPLACE/${DB_NAME}/g" /var/www/html/wp-config.php
sed -i -e "s/DB_USER_TO_REPLACE/${DB_USER}/g" /var/www/html/wp-config.php
sed -i -e "s/DB_PASSWORD_TO_REPLACE/${DB_PASSWORD}/g" /var/www/html/wp-config.php
sed -i -e "s/DB_HOST_TO_REPLACE/${DB_HOST}/g" /var/www/html/wp-config.php
echo "Starting PHP"
mkdir -p /run/php/
/usr/sbin/php-fpm7.3 -F -R