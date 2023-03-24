#!/usr/bin/sudo bash

docker compose up
docker rmi -f $(docker images -a -q)
