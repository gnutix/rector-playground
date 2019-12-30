# rector.phar from December 29th 2019
FROM php:7.4-alpine
RUN wget https://github.com/rectorphp/rector-prefixed/raw/master/rector \
    -O /usr/bin/rector && chmod +x /usr/bin/rector
WORKDIR /app
ENTRYPOINT ["rector"]
