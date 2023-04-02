FROM php:8.2-fpm




RUN apt-get update && apt-get install -y \
      apt-utils \
      libpq-dev \
      libpng-dev \
      libzip-dev \
      zip unzip \
      git && \
      docker-php-ext-install pdo_mysql && \
      docker-php-ext-install bcmath && \
      docker-php-ext-install gd && \
      docker-php-ext-install zip && \
      apt-get clean && \
      rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

WORKDIR /var/www/
COPY ./Makefile /var/www/
COPY ./_docker/app/php.ini /usr/local/etc/php/conf.d/php.ini

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

RUN chmod 777 -R ./
# Whatever you did in your PHP Dockerfile
# this was missing for some reason. Didn't require last time.

# Removing /var/lib/apt/lists worked
#RUN rm -rf /var/lib/apt/lists/ && curl -sL https://deb.nodesource.com/setup_19.x | bash -
#RUN apt-get install nodejs -y
#RUN apt install --only-upgrade nodejs -y


#RUN chmod 777 -R ./
#RUN npm update
#RUN rm package-lock.json && npm install


#WORKDIR /var/www/
#COPY . /var/www/html/


