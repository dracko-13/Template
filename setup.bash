#!/usr/bin/bash

sudo cp socket.service /etc/systemd/system
sudo chmod +x /etc/systemd/system/socket.service
sudo systemctl daemon-reload
sudo systemctl enable socket.service
