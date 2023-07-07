FROM php
RUN docker-php-ext-install pdo pdo_mysql
COPY . /usr/src/myapp
WORKDIR /usr/src/myapp
CMD [ "php", "-S", "0.0.0.0:8080", "index.php" ]