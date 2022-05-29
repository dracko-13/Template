#!/usr/bin/bash

sudo apt update && sudo apt upgrade -y
sleep 3
sudo dpkg-reconfigure locales
sleep 3
sudo dpkg-reconfigure keyboard-configuration
sleep 3
sudo apt install -y mate-terminal caja engrampa eom pluma atril firefox firefox-locale-es chromium-browser composer mariadb-client php8.1 php8.1-amqp php8.1-ast php8.1-bcmath php8.1-bz2 php8.1-cgi php8.1-cli php8.1-common php8.1-curl php8.1-dba php8.1-dev php8.1-ds php8.1-enchant php8.1-fpm php8.1-gd php8.1-gearman php8.1-gmp php8.1-gnupg php8.1-http php8.1-igbinary php8.1-imagick php8.1-imap php8.1-interbase php8.1-intl php8.1-ldap php8.1-mailparse php8.1-mbstring php8.1-memcache php8.1-memcached php8.1-mongodb php8.1-msgpack php8.1-mysql php8.1-oauth php8.1-odbc php8.1-opcache php8.1-pcov php8.1-pgsql php8.1-phpdbg php8.1-ps php8.1-pspell php8.1-psr php8.1-raphf php8.1-readline php8.1-redis php8.1-rrd php8.1-smbclient php8.1-snmp php8.1-soap php8.1-solr php8.1-sqlite3 php8.1-ssh2 php8.1-sybase php8.1-tidy php8.1-uopz php8.1-uploadprogress php8.1-uuid php8.1-xdebug php8.1-xml php8.1-xmlrpc php8.1-xsl php8.1-yaml php8.1-zip php8.1-zmq 
sleep 3
sudo apt install -y yaru-theme-gnome-shell yaru-theme-gtk yaru-theme-icon yaru-theme-sound yaru-theme-unity
sleep 3
sudo pecl install mongodb
sleep 3
sudo apt autoremove -y
sleep 3
wget -O code.deb https://code.visualstudio.com/sha/download?build=stable&os=linux-deb-x64
sleep 3
sudo dpkg -i code.deb
sleep 3
sudo apt install -f -y
sleep 3
sudo dpkg -i code.deb
