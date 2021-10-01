# Install git (the php image doesn't have it) and other tools
apt-get update -yqq
apt-get install git phpstan -yqq

#install composer
curl -s https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer  

composer install