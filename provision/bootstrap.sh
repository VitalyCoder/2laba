#!/bin/bash

set -e

echo "Starting bootstrap process..."

# Update package list and install necessary packages
apt-get update
apt-get install -y \
    curl \
    wget \
    git \
    vim \
    unzip \
    software-properties-common

# Install additional dependencies if needed
# Example: Install PHP extensions
# apt-get install -y php-xml php-mbstring php-curl

echo "Bootstrap process completed."