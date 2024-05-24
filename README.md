# HNC-Education-Management
**Mô tả dự án**<br>
Dự án này tập trung vào việc phát triển một hệ thống quản lý giáo dục sử dụng Laravel và MySQL. Mục tiêu của dự án là cung cấp một nền tảng linh hoạt và mạnh mẽ để quản lý thông tin về học sinh, giáo viên, khóa học, và các hoạt động giáo dục khác.

**Cài đặt**<br>
Yêu cầu hệ thống:<br>
PHP 8.1 trở lên<br>
Composer<br>
MySQL

**Bước cài đặt**
1. Clone repository từ GitHub:
```
git clone https://github.com/copecute/HNC-Education-Management.git
```
2. Di chuyển vào thư mục dự án:
```
cd HNC-Education-Management
```
3. Cài đặt các dependencies thông qua Composer:
```
composer install
```
4. Sao chép file .env.example thành .env:
```
copy .env.example .env
```
5. Cấu hình file .env với thông tin cần thiết:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
6. Nhập cơ sở dữ liệu:<br>
Nhập file `/database/database.sql` vào cơ sở dữ liệu MySQL<br>
7. Khởi động máy chủ phát triển:
```
php artisan serve
```
Truy cập ứng dụng thông qua trình duyệt web tại địa chỉ sau: **http://localhost:8000**

**Quy chuẩn**<br>
1. Quy tắc đặt tên branch:<br>
Đối với feature: `feature/user/feature-name`<br>
Đối với fix bug: `bugfix/user/bug-name`<br>
Đối với việc release: `release-version-x.x`<br>
Lưu ý:<br>
Tên feature hoặc bug viết thường không dấu, sử dụng dấu - thay thế cho dấu cách.<br>
ví dụ: `feature/cdev/dang-ky-tuyen-sinh`<br>
Đối với commits và comments thì ở đây không phải ai cũng thành thạo tiếng anh vậy nên thống nhất là ghi tiếng việt để người khác có thể đọc và hiểu

**Tác giả**<br>
Dự án được phát triển bởi team sinh viên khoa CNTT HPC.

**Liên hệ**<br>
Nếu bạn có bất kỳ câu hỏi hoặc đề xuất nào, vui lòng liên hệ qua email admin@minhgiangpc.com.
