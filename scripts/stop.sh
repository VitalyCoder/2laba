#!/bin/bash

# Остановка всех контейнеров, связанных с проектом
docker-compose down

# Удаление всех остановленных контейнеров
docker container prune -f

# Удаление неиспользуемых образов
docker image prune -f

# Удаление неиспользуемых сетей
docker network prune -f

# Удаление неиспользуемых томов
docker volume prune -f

echo "Все контейнеры и сервисы остановлены."