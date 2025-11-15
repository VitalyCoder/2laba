#!/bin/bash

# Запуск всех необходимых контейнеров и сервисов для приложения
docker-compose up -d

# Ожидание, пока контейнеры полностью запустятся
sleep 10

# Вывод информации о запущенных контейнерах
docker-compose ps

echo "LEMP stack and WordPress are up and running!"