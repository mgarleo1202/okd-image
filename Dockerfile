FROM php:8.2-cli

WORKDIR /app
COPY . .

# Exponer el puerto del servidor embebido de PHP
EXPOSE 8888

# Comando para iniciar el servidor embebido
CMD ["php", "-S", "0.0.0.0:8888", "index.php"]
