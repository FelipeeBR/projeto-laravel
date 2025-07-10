FROM wyveo/nginx-php-fpm:php82

# Define o diretório de trabalho
WORKDIR /usr/share/nginx/html

# Instala o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
