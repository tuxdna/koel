# FROM mera-fedora

FROM fedora

RUN dnf install -y composer php php-mysqlnd npm

RUN mkdir -p /koel

WORKDIR /koel

COPY . /koel

# RUN composer install && php artisan koel:init

CMD /koel/entrypoint.sh

