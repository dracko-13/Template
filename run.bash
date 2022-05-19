#!/usr/bin/bash

sudo apt update && sudo apt upgrade -y
sleep 3
sudo apt install mate-desktop-environment-core
sleep 3
sudo apt purge -y byobu && sudo apt autoremove -y
sleep 3
sudo dpkg-reconfigure locales
sleep 3
sudo dpkg-reconfigure keyboard-configuration
