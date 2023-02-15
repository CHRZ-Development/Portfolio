#!/usr/bin/sudo bash


PORT="80:80"
DOCKER_PATH="."
DOCKER_NAME="chrz-website"

echo "Let's start build httpd docker image..."
docker build --tag $DOCKER_NAME $DOCKER_PATH
echo "Run $DOCKER_NAME on $PORT..."
docker run -dit --name $DOCKER_NAME -p $PORT $DOCKER_NAME
