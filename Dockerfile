# Sử dụng Nginx làm máy chủ web để phục vụ ứng dụng tĩnh
FROM nginx:alpine

# Copy toàn bộ mã nguồn ứng dụng vào thư mục gốc của Nginx
COPY src/ /usr/share/nginx/html/

# Expose cổng 80 để truy cập ứng dụng
EXPOSE 80

# Khởi động Nginx
CMD ["nginx", "-g", "daemon off;"]
