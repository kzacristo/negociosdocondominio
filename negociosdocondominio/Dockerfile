FROM php:7.4-apache
RUN apt update && apt upgrade -y && apt-get install -y \
       zlib1g-dev \
        libzip-dev
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install zip
RUN a2enmod rewrite
RUN a2dismod ssl
RUN apt-get install -y build-essential libssl-dev  libpng-dev libjpeg-dev libfreetype6-dev 
RUN apt-get install -y libmagickwand-dev imagemagick
RUN docker-php-ext-configure gd --with-jpeg && docker-php-ext-install gd


RUN apt-get update && apt-get install -y \
    git \
    curl \
    libxml2-dev \
    zip \
    unzip

RUN apt-get clean

RUN pecl install imagick
RUN yes | pecl install channel://pecl.php.net/xdebug-2.9.8 && docker-php-ext-enable xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_host=172.17.0.2" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_log=/var/www/html/xdebug.log" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_connect_back=1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_port=9000" >> /usr/local/etc/php/conf.d/xdebug.ini


RUN echo "extension=imagick.so" >> /usr/local/etc/php/php.ini-development
RUN echo "extension=imagick.so" >> /usr/local/etc/php/php.ini-production
RUN a2enmod headers \
    && sed -ri -e 's/^([ \t]*)(<\/VirtualHost>)/\1\tHeader set Access-Control-Allow-Origin "*"\n\1\2/g' /etc/apache2/sites-available/*.conf
RUN chmod -R 777 .
RUN service apache2 restart 
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer require aws/aws-sdk-php
COPY --from=composer /usr/bin/composer /usr/bin/composer
RUN usermod -u 431 www-data

RUN set -eux; apt-get update; apt-get install -y libzip-dev zlib1g-dev; docker-php-ext-install zip
EXPOSE 80
EXPOSE 443
EXPOSE 5432
EXPOSE 9000