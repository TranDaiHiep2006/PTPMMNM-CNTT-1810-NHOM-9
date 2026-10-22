# PTPMMNM-CNTT-1810-NHOM-9 — Bài tập thực hành

Kho mã chứa 5 bài thực hành môn **Phát triển phần mềm mã nguồn mở** của nhóm 9. Mỗi bài nằm trên một **branch riêng** để giữ lịch sử commit độc lập theo yêu cầu nộp bài.

## Danh sách bài

| Bài | Tên đề tài | Branch | Xem trên GitHub |
| --- | --- | --- | --- |
| Lab 01 | Vận hành dự án trên Linux và viết shell script | [`lab1`](../../tree/lab1) | [Mở branch lab1](../../tree/lab1) |
| Lab 02 | Xây dựng module PHP kiểm tra điều kiện đăng ký | [`lab2`](../../tree/lab2) | [Mở branch lab2](../../tree/lab2) |
| Lab 03 | Hiển thị sự kiện, tìm kiếm và xử lý form | [`lab3`](../../tree/lab3) | [Mở branch lab3](../../tree/lab3) |
| Lab 04 | Quản lý bản nháp đăng ký bằng session và cookie | [`lab4`](../../tree/lab4) | [Mở branch lab4](../../tree/lab4) |
| Lab 05 | Lưu, truy vấn và thống kê đăng ký với MySQL | [`lab5`](../../tree/lab5) | [Mở branch lab5](../../tree/lab5) |

> **Mặc định GitHub đang mở branch `main`.** Hãy chuyển sang branch tương ứng ở góc trên bên trái (nút branch dropdown) để xem mã nguồn của từng bài.

## Cách chuyển branch

Trên giao diện GitHub: nhìn lên đầu trang, ngay phía trên danh sách file, có nút hiển thị branch hiện tại (mặc định là `main`). Bấm vào đó rồi chọn `lab1`, `lab2`, `lab3`, `lab4` hoặc `lab5`.

Trên terminal (sau khi clone):

```bash
git clone https://github.com/TranDaiHiep2006/PTPMMNM-CNTT-1810-NHOM-9.git
cd PTPMMNM-CNTT-1810-NHOM-9
git checkout lab1   # hoặc lab2, lab3, lab4, lab5
```

## Tóm tắt nội dung từng bài

### Lab 01 — Vận hành dự án trên Linux và shell script *(branch `lab1`)*

Làm quen với môi trường dòng lệnh Ubuntu/WSL, chạy shell script `lab.sh`, kiểm tra môi trường và chạy chương trình PHP mẫu trên cổng `8101`.

### Lab 02 — Module PHP kiểm tra điều kiện đăng ký *(branch `lab2`)*

Hoàn thiện lớp `RegistrationPolicy` kiểm tra điều kiện đăng ký sự kiện (dung lượng, sự kiện đóng/mở, danh sách chờ) và bộ kiểm thử biên. Máy chủ chạy trên cổng `8102`.

### Lab 03 — Hiển thị sự kiện, tìm kiếm và xử lý form *(branch `lab3`)*

Trang danh sách sự kiện có bộ lọc kết hợp theo **từ khóa + loại + còn chỗ** (AND), Form đăng ký kiểm tra phía máy chủ và hiển thị bản xem trước. Máy chủ chạy trên cổng `8103`.

### Lab 04 — Quản lý bản nháp đăng ký bằng session và cookie *(branch `lab4`)*

Hoàn thiện luồng đăng ký nhiều bước với bản nháp lưu trong **session** và lựa chọn giao diện lưu bằng **cookie**. Luồng mô phỏng gồm: nhập → xem lại → sửa → hủy → hoàn tất; bản nháp sai cấu trúc hoặc hết hạn bị từ chối, các phiên sử dụng và tùy chọn giao diện được tách biệt. Không cần PostgreSQL, Composer hay framework. Máy chủ chạy trên cổng `8104`.

### Lab 05 — Lưu, truy vấn và thống kê đăng ký với MySQL *(branch `lab5`)*

Bản dùng **MySQL** (MySQL >= 8.0.16, MySQLi + mysqlnd) để lưu đăng ký vào CSDL, truy vấn và tổng hợp thống kê. Quy trình: cấu hình tài khoản/CSDL bằng `bash lab.sh db-config`, nạp `database/schema.sql` qua `bash lab.sh sql`, kiểm tra kết nối bằng `php demo-db.php`, sau đó chạy ứng dụng. Phần tự làm nằm ở `src/RegistrationStats.php`. Máy chủ chạy trên cổng `8105`.

## Cách chạy

```bash
bash lab.sh check   # kiểm tra môi trường
bash lab.sh run     # chạy ứng dụng
bash lab.sh test    # kiểm thử phần mẫu
bash lab.sh extend  # kiểm thử phần mở rộng
```

Riêng Lab 05 có thêm hai lệnh chuẩn bị CSDL: `bash lab.sh db-config` và `bash lab.sh sql`. Giữ terminal máy chủ chạy để kiểm thử, dùng terminal thứ hai cho lệnh `test`/`extend`, nhấn Ctrl+C để dừng máy chủ.

## Công cụ chung

- PHP 8.1 trở lên
- Git
- Terminal Ubuntu hoặc Ubuntu trong WSL
- Lab 05: MySQL 8.0.16 trở lên cùng phần mở rộng MySQLi

## Thành viên

Nhóm 9 — CNTT 1810.
