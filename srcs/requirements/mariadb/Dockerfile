FROM debian:buster

EXPOSE 3306
RUN mkdir -p /scripts
COPY /tools/install.sh /scripts
COPY /tools/start.sh /scripts
WORKDIR /scripts
RUN chmod +x install.sh
RUN chmod +x start.sh
RUN ./install.sh
COPY ./conf/my.cnf /etc/mysql/
CMD ./start.sh