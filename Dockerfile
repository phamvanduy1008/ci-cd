# # Sử dụng Apache HTTP Server làm web server
# FROM httpd:latest

# # Sao chép mã nguồn HTML/CSS/JS vào thư mục mặc định của Apache
# COPY ./src/ /usr/local/apache2/htdocs/

# # Expose cổng 80
# EXPOSE 80


# Sử dụng PHP với Apache làm base image
FROM httpd:latest

# Cài đặt các thư viện phụ thuộc cần thiết cho PHP và Apache
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    git && \
    docker-php-ext-configure gd --with-freetype --with-jpeg && \
    docker-php-ext-install gd mysqli

# Bật mod_rewrite của Apache
RUN a2enmod rewrite

# Sao chép mã nguồn HTML/CSS/JS vào thư mục của Apache trong image httpd
COPY ./src/ /usr/local/apache2/htdocs/

# Expose cổng 80 cho Apache
EXPOSE 80
