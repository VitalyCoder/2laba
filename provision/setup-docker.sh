#!/bin/bash

# Обновление списка пакетов
sudo apt-get update

# Установка необходимых пакетов
sudo apt-get install -y apt-transport-https ca-certificates curl software-properties-common

# Добавление GPG ключа для Docker
curl -fsSL https://download.docker.com/linux/debian/gpg | sudo apt-key add -

# Добавление репозитория Docker
echo "deb [arch=amd64] https://download.docker.com/linux/debian $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list

# Установка Docker
sudo apt-get update
sudo apt-get install -y docker-ce

# Установка Docker Compose
sudo curl -L "https://github.com/docker/compose/releases/latest/download/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod +x /usr/local/bin/docker-compose

# Проверка установки Docker и Docker Compose
docker --version
docker-compose --version

# Добавление текущего пользователя в группу docker
sudo usermod -aG docker $USER

echo "Docker и Docker Compose успешно установлены!"