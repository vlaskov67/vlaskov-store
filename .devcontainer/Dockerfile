# Используем официальный образ Ubuntu
FROM mcr.microsoft.com/devcontainers/base:ubuntu

# Устанавливаем зависимости для PHP, MySQL-клиента и дополнительных инструментов
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        php8.2 \
        php8.2-cli \
        php8.2-mbstring \
        php8.2-xml \
        php8.2-curl \
        unzip \
        curl \
        git \
        mysql-client \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Устанавливаем Composer (уже доступен через feature, но дублируем на случай)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Переназначаем рабочую директорию на папку проекта
WORKDIR /workspaces/vlaskov-store

# По умолчанию используем пользователя codespace
USER codespace

