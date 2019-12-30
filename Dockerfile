# rector.phar from December 29th 2019
FROM php:7.4-alpine
RUN wget https://github.com/rectorphp/rector-prefixed/raw/6e5074ec02947b8fea7524d63c13e747768d3e8d/rector \
    -O /usr/bin/rector && chmod +x /usr/bin/rector
WORKDIR /app
ENTRYPOINT ["rector"]
