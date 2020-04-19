FROM composer:1.10.5
RUN mkdir /usr/src/backend
WORKDIR /usr/src/backend
COPY . .
RUN apk add --update nodejs npm
RUN set -ex \
  && apk --no-cache add \
    postgresql-dev

RUN docker-php-ext-install pdo pdo_pgsql





