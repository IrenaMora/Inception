FROM debian:buster

EXPOSE 9000
RUN mkdir /scripts
WORKDIR /scripts
COPY ./tools/install.sh /scripts/
COPY ./tools/start.sh /scripts/
RUN chmod +x install.sh
RUN chmod +x start.sh
RUN ./install.sh
COPY ./conf/php-fpm.conf /etc/php/7.3/fpm
COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d/
CMD ./start.sh