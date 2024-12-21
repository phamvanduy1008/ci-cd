
 # Sử dụng Apache HTTP Server làm web server
FROM httpd:latest

# Cài đặt các gói bổ sung nếu cần (ví dụ: PHP)
RUN apt-get update && \
    apt-get install -y php libapache2-mod-php && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Sao chép mã nguồn PHPPHP vào thư mục mặc định của Apache
COPY ./src/ /usr/local/apache2/htdocs/

# Kích hoạt xử lý PHP trên Apache
RUN echo "<?php phpinfo(); ?>" > /usr/local/apache2/htdocs/phpinfo.php && \
    echo "LoadModule php_module modules/libphp.so" >> /usr/local/apache2/conf/httpd.conf && \
    echo "AddType application/x-httpd-php .php" >> /usr/local/apache2/conf/httpd.conf

# Expose cổng 80
EXPOSE 80

# Lệnh khởi động container
CMD ["httpd-foreground"]
