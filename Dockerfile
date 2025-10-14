FROM edwinwcw/ubuntu:22.04
RUN touch /run/nginx.pid && \
    chown www-data:www-data /run/nginx.pid
WORKDIR /var/www/html/restapi
USER root

