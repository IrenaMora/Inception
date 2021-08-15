FROM debian:buster

EXPOSE 443
RUN mkdir /scripts
WORKDIR /scripts
COPY ./tools/ /scripts/
RUN chmod +x install.sh
RUN ./install.sh
COPY ./conf/default /etc/nginx/sites-available
RUN ls -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/
CMD echo "Starting nginx" && nginx -g "daemon off;"