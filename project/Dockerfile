FROM ubuntu:16.04 

RUN apt-get update
RUN apt-get upgrade -y

RUN apt-get update && \
    apt-get dist-upgrade -y && \
    apt-get install -y \
      apache2 \
      php \
      php-cli \
      libapache2-mod-php \
      php-mysql \
      php-opcache \
      php-pgsql \
      php-sqlite3 \
      php-xml \
      php-xsl \
      php-zip \
      php-soap \
      php-xdebug \
      composer

RUN apt-get install apache2 libapache2-mod-php7.0 -y
ENV MYSQL_ROOT_PASSWORD=root
RUN apt-get install mariadb-common mariadb-server mariadb-client -y
RUN rm /var/www/html/index.html
COPY https://github.com/stijnpotters/docker/tree/master/project/payment /var/www/html
RUN chown -R www-data:www-data /var/www/html
#database aanmaken
COPY https://github.com/stijnpotters/docker/blob/master/project/scouts.sql .
RUN service mysql start ; mysql -u root -e "create database scouts" ; mysql -u root scouts < scouts.sql 
RUN sed -Ei 's/^(bind-address|log)/#&/' /etc/mysql/my.cnf

VOLUME /var/www/html
VOLUME /var/log/httpd
VOLUME /var/lib/mysql
VOLUME /var/log/mysql
ENTRYPOINT service apache2 start && service mysql start && /bin/bash
EXPOSE 80
EXPOSE 3306


