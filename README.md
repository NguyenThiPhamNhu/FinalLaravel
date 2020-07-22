# b1: tạo database
CREATE TABLE `students` (
  `id` bigint PRIMARY KEY,
  `name` varchar(255),
  `class` varchar(255),
  `address` varchar(255),
  `dob` time
);

INSERT INTO ('name','class','address','dob') VALUE('Nhu','PNV21','Quang Nam','26/12/2000'),
                                                  ('Tien','PNV21','Da Nang','9/10/2000')

# b2: chạy dự án
- Tạo dự án studentsLaravel
- Kết nối database (.evn)
- Tạo controller(StudentController)
- Tạo model(student)
- Tạo view(admin,add,edit)
- Chạy file php tren chorme
- Test thử

# b3: 