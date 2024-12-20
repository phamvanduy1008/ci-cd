# Sử dụng hình ảnh Nginx làm server
FROM nginx:alpine

# Sao chép các tài nguyên từ thư mục target của Maven vào thư mục mặc định của Nginx
COPY target/classes/ /usr/share/nginx/html/

# Expose cổng 80 để truy cập ứng dụng
EXPOSE 80

# Chạy Nginx
CMD ["nginx", "-g", "daemon off;"]
