1. Giải nén thư mục project vào vị trí bất kỳ
2. Khởi động docker trên máy
3. Sau khi docker đã chạy, mở git bash gõ command sau:
docker-compose up -d --build //Chạy khởi tạo docker
docker-compose ps //Kiểm tra xem có đủ images chưa(có 4 cái chạy nhé, thiếu thì hỏi)
4. Sau khi thấy chạy đủ thì kiểm tra kết quả như sau:
Kiểm tra xem web chạy chưa, mở trình duyệt gõ:

http://127.0.0.1/ or http://localhost/
=> Hiển thị thông tin PHP Version =>  Chạy ok

Kiểm tra database, bạn dùng hệ thống adminer(không dùng workbench nhé)
Mở trình duyệt gõ:
http://127.0.0.1:8081/ or http://localhost:8081/
Sẽ xuất hiện 1 trang login của Adminer, điền thông tin như bên dưới(các thông tin db mọi người kiểm tra trong file docker-compose ở service mysql nhé):
System:	MySQL
Server:	mysql
Username: root
Password: root
Database: rikkeisoft

Điền đầy đủ thông tin rồi login, hiển thị sẵn db rikkeisoft là ok
