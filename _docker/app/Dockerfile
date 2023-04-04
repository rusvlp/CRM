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

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Install composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin

# Fix Laravel permission error. Server starts from www user account.
COPY --chown=www:www . /var/www/storage
COPY --chown=www:www . /var/www/bootstrap/cache
COPY --chown=www:www . /var/www/storage/framework/sessions

USER www
#RUN chmod 777 -R /var/www
# Whatever you did in your PHP Dockerfile
# this was missing for some reason. Didn't require last time.

# Removing /var/lib/apt/lists worked
#RUN rm -rf /var/lib/apt/lists/ && curl -sL https://deb.nodesource.com/setup_19.x | bash -0
#RUN apt-get install nodejs -y
#RUN apt install --only-upgrade nodejs -y

#WORKDIR /var/www
#RUN chmod 777 -R ./
#RUN npm update
#RUN rm package-lock.json && npm install



#COPY . /var/www/html/


