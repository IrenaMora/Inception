all:	build up

build:
	sudo mkdir -p /home/imora/data && sudo mkdir -p /home/imora/data/db
	sudo chmod 777 /home/imora/data && sudo chmod 777 /home/imora/data/db
	sudo cp -Rn srcs/requirements/wordpress/tools/wordpress /home/imora/data/
	sudo cp srcs/requirements/wordpress/conf/wp-config.php /home/imora/data/wordpress/
	sudo chmod 777 /etc/hosts && sudo echo -e '127.0.0.1 localhost\n127.0.0.1 imora.42.fr' > /etc/hosts
	sudo chmod 777 /home/imora/data/wordpress
	cd srcs && docker-compose build

up:
	cd srcs && docker-compose up -d

down:
	cd srcs && docker-compose down

clear:
	sudo docker system prune -a