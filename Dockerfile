# Usar PHP 8.2 con Apache como imagen base del servidor web.
FROM php:8.2-apache

# Activar mod_rewrite para que Apache procese las rutas de la aplicación.
RUN a2enmod rewrite

# Instalar PDO, el controlador PDO para MySQL y la extensión mysqli.
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Permitir que .htaccess aplique las reglas de reescritura.
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

# Instalar nano y limpiar la caché de paquetes para reducir el tamaño de la imagen.
RUN apt-get update && apt-get install -y nano && rm -rf /var/lib/apt/lists/*
