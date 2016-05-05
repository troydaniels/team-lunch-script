#!/bin/bash

docker stop `docker ps -a -q`
docker rm `docker ps -a -q`
docker build -t my-apache .
docker run --name server -d -p 8080:80 my-apache
