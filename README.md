# CO-Fan

[*Bài tập] Xây dựng lớp Fan

Mục tiêu
Luyện tập định nghĩa lớp, tạo đối tượng và sử dụng các phương thức của đối tượng.

Điều kiện
- Biết cách khai báo lớp (thuộc tính, phương thức)

- Biết cách khởi tạo đối tượng

- Biết cách sử dụng các phương thức của đối tượng

Mô tả
(Lớp Fan) Thiết kế lớp Fan to để mô tả về cái quạt. Lớp này gồm các thành phần sau:

3 thuộc tính hằng được đặt tên là SLOW, MEDIUM, và FAST với giá trị 1, 2, và 3 để biểu thị tốc độ quạt.

Thuộc tính speed có kiểu số nguyên và mức truy xuất là private để xác định tốc độ quạt, mặc định là SLOW

Thuộc tính on có kiểu lô-gic và mức truy xuất private để xác định quạt đang bật hay tắt, mặc định là false (tắt).

Thuộc tính radius có kiểu thực và mức truy xuất private để xác định bán kính quạt, giá trị mặc định là 5

Thuộc tính color có kiểu dữ liệu là chuỗi và mức truy xuất private để xác định màu quạt, mặc định là "blue"

Các getter và setter cho các thuộc tính

Phương thức khởi tạo không tham số tạo đối tượng Fan mặc định

Phương thức toString() trả về chuỗi chứa thông tin của quạt. Nếu quạt đang ở trạng thái on, phương thức trả về speed, color, và radius với chuỗi "fan is on". Nếu quạt không ở trạng thái on, phương thức trả về color, radius với chuỗi "fan is off".

Vẽ sơ đồ UML cho lớp và cài đặt lớp

Viết chương trình hiển thị các đối tượng bằng cách gọi phương thức toString

Tạo 2 đối tượng Fan
Đối tượng Fan 1: Gán giá trị lớn nhất cho speed, radius là 10, color là yellow và quạt ở trạng thái bật.
Đối tượng Fan 2: Gán giá trị trung bình cho speed, radius là 5, color là blue và quạt ở trạng thái tắt
