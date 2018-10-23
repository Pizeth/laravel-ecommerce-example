# FROM nginx:1.15.3-alpine
FROM nginx:1.10-alpine

ADD vhost.conf /etc/nginx/conf.d/default.conf

COPY public /var/www/public