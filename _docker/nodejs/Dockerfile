FROM node:19-alpine3.16

WORKDIR /var/www
RUN chmod 777 -R ./

COPY package*.json ./
RUN npm update
RUN npm install
