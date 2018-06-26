#!/bin/bash
#
#comentarios
#

VAR="/etc/apt/sources.list"

if [ -f $VAR ]
then
apt-get update -y >> log ; apt-get upgrade -y >> log ; apt-get install php-codesniffer -y >> log ; apt-get install zip -y >> log ;
cp /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled >> log ; curl -sS https://getcomposer.org/installer | php >> log ;
mv composer.phar /usr/local/bin/composer >> log

else
   echo "$VAR nao existe"
fi
