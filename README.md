# PTPMMNM-CNTT-1810-NHOM-9 — Bài tập thực hành

Kho mã chứa 3 bài thực hành môn **Phát triển phần mềm mã nguồn mở** của nhóm 9. Mỗi bài nằm trên một **branch riêng** để giữ lịch sử commit độc lập theo yêu cầu nộp bài.

## Danh sách bài

| Bài | Tên đề tài | Branch | Xem trên GitHub |
| --- | --- | --- | --- |
| Lab 01 | Vận hành dự án trên Linux và viết shell script | [`lab1`](../../tree/lab1) | [Mở branch lab1](../../tree/lab1) |
| Lab 02 | Xây dựng module PHP kiểm tra điều kiện đăng ký | [`lab2`](../../tree/lab2) | [Mở branch lab2](../../tree/lab2) |
| Lab 03 | Hiển thị sự kiện, tìm kiếm và xử lý form | [`lab3`](../../tree/lab3) | [Mở branch lab3](../../tree/lab3) |

> **Mặc định GitHub đang mở branch `main`.** Hãy chuyển sang branch tương ứng ở góc trên bên trái (nút branch dropdown) để xem mã nguồn của từng bài.

## Cách chuyển branch

Trên giao diện GitHub: nhìn lên đầu trang, ngay phía trên danh sách file, có nút hiển thị branch hiện tại (mặc định là `main`). Bấm vào đó rồi chọn `lab1`, `lab2` hoặc `lab3`.

Trên terminal (sau khi clone):

```bash
git clone https://github.com/TranDaiHiep2006/PTPMMNM-CNTT-1810-NHOM-9.git
cd PTPMMNM-CNTT-1810-NHOM-9
git checkout lab1   # hoặc lab2, lab3
```

## Tóm tắt nội dung từng bài

### Lab 01 — Vận hành dự án trên Linux và shell script *(branch `lab1`)*

Làm quen với môi trường dòng lệnh Ubuntu/WSL, chạy shell script `lab.sh`, kiểm tra môi trường và chạy chương trình PHP mẫu trên cổng `8101`.

### Lab 02 — Module PHP kiểm tra điều kiện đăng ký *(branch `lab2`)*

Hoàn thiện lớp `RegistrationPolicy` kiểm tra điều kiện đăng ký sự kiện (dung lượng, sự kiện đóng/mở, danh sách chờ) và bộ kiểm thử biên. Máy chủ chạy trên cổng `8102`.

### Lab 03 — Hiển thị sự kiện, tìm kiếm và xử lý form *(branch `lab3`)*

Trang danh sách sự kiện có bộ lọc kết hợp theo **từ khóa + loại + còn chỗ** (AND), Form đăng ký kiểm tra phía máy chủ và hiển thị bản xem trước. Máy chủ chạy trên cổng `8103`.

```bash
bash lab.sh check   # kiểm tra môi trường
bash lab.sh test    # kiểm thử phần mẫu
bash lab.sh extend  # kiểm thử phần mở rộng
```

## Công cụ chung

- PHP 8.1 trở lên
- Git
- Terminal Ubuntu hoặc Ubuntu trong WSL

## Thành viên

Nhóm 9 — CNTT 1810.
