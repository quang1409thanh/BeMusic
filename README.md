
# BeMusic

## 1. Yêu cầu:
để run project yêu cầu các thứ sau:
- cài composer php
- cái node js 
- cài xampp.

sau khi cài xammpp, cấu hình lại file php.ini xóa bỏ dấu ";" trước ``extension=pdo_sqlite``

## 2. Cấu hình môi trường.
Thêm file .env
 ; copy từ file .env.example:  

    cp .env.example .env
vào file .env
        
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=music1
    DB_USERNAME=root
    DB_PASSWORD=140903

Tên user name và password đúng
Database tạo mới;

sau đó cài thư viện:

    composer install --ignore-platform-req=php

sau đó chạy các lệnh

    php artisan migrate
    php artisan sound:init
    đến đoạn PATH thì gõ C:\

## 3. Nguồn tham khảo

- tham khảo dựa trên dự án koel streaming music.