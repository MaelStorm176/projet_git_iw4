#!/bin/bash

# We need to install dependencies only for Docker
[[ ! -e /.dockerenv ]] && exit 0

set -xe

# Install git (the php image doesn't have it) which is required by composer
apt-get update -yqq
apt-get install git -yqq

# Install phpunit, the tool that we will use for testing
curl --location --output /usr/local/bin/phpunit "https://phar.phpunit.de/phpunit.phar"
chmod +x /usr/local/bin/phpunit

#install composer
curl -s https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer  

composer install