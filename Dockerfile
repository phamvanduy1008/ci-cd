# Sử dụng PHP với Apache
FROM php:8.2-apache

# Sao chép mã nguồn PHP vào thư mục gốc của web server
COPY ./src/ /var/www/html/

# Expose cổng 80
EXPOSE 80
