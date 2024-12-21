# Sử dụng PHP với Apache
FROM php:8.2-apache

# Sao chép mã nguồn PHP vào thư mục gốc của web server
COPY ./src/ /usr/local/apache2/htdocs/

# Expose cổng 80
EXPOSE 80
