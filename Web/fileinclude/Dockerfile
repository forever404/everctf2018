# Origin image
FROM ubuntu:16.04

# Meta Information
MAINTAINER sengle "pyymine@gmail.com"

# update
RUN apt update

# Setup Server Environment
RUN apt install -y \
    apache2 \
    php \
    libapache2-mod-php 

# Entry point
ENTRYPOINT service apache2 start && /bin/bash

