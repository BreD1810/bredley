from alpine:latest

RUN apk update && apk upgrade && apk add hugo

RUN mkdir /src

EXPOSE 80

ENTRYPOINT ["hugo", "server", "--source=/src", "--bind=0.0.0.0", "--port=80", "--disableLiveReload=true", "--watch=true"]
