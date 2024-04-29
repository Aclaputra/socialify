FROM php:8.1-fpm

LABEL key="Aclaputra"

# RUN set -ex \
#   && apk --no-cache add \
#   postgresql-dev
#
# RUN docker-php-ext-install pdo pdo_pgsql
RUN apt-get update
# RUN docker-php-ext-install pgsql pdo pdo_pgsql 
# RUN docker-php-ext-enable pgsql
# Install Postgre PDO
RUN apt-get install -y libpq-dev \
  && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
  && docker-php-ext-install pdo pdo_pgsql pgsql
