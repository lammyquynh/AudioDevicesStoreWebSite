------Bài 2: Phần bài tập về nhà
------Bài cũ:
CREATE  DATABASE DB_QLSV_TUAN5
GO
use DB_QLSV_TUAN5
go
CREATE TABLE LOP
(
	MALOP CHAR(10) NOT NULL ,
	TENLOP NVARCHAR(10),
	SISO INT check (SISO >=0) default 0
	PRIMARY KEY(MALOP)
)
CREATE TABLE SINHVIEN
(
	MASV CHAR(10) NOT NULL PRIMARY KEY,
	HOTEN NVARCHAR(30),
	MALOP CHAR(10), 
	DIEM_KT FLOAT,
	DIEM_GK FLOAT,
	DIEM_CK FLOAT,
	DIEM_TK FLOAT
	CONSTRAINT fk_SINHVIEN_LOP FOREIGN KEY(MALOP) REFERENCES LOP(MALOP)
)

INSERT INTO LOP(MALOP, TENLOP)VALUES('L001','08CDTH1')
INSERT INTO LOP(MALOP, TENLOP)VALUES('L002','08CDTH2')
INSERT INTO LOP(MALOP, TENLOP)VALUES('L003','26THTH1')
INSERT INTO LOP(MALOP, TENLOP)VALUES('L004','26THTH2')


INSERT INTO SINHVIEN 
	VALUES('SV001','HUYNH VAN BINH', 'L001', 5,8,6,NULL)
INSERT INTO SINHVIEN
	VALUES('SV002','NGO THANH BINH', 'L002', 6,5,9,NULL)
INSERT INTO SINHVIEN
	VALUES('SV003','DUONG THANH NGAO DA', 'L001', 6,NULL,9,NULL)
INSERT INTO SINHVIEN 
	VALUES('SV004','LAM MY QUYNH', 'L004', 5.5,8.5,4.5,NULL)
INSERT INTO SINHVIEN
	VALUES('SV005','TU HONG MAT BU', 'L003', 7,6,6.5,NULL)
INSERT INTO SINHVIEN
	VALUES('SV006','NGUYEN THI THUY NGO', 'L002', 4.5,NULL,9,NULL)

----câu 1:
Go
create trigger Cau1 ON SINHVIEN
for delete
as
update LOP
set SISO =SISO-1
where MALOP=(SELECT MALOP FROM deleted ) 

go

select*from SINHVIEN
go
----- trigger cập nhập sỉ số.
create proc capnhatss
as 
declare tinhsiso cursor
for select MALOP from LOP
open tinhsiso 
declare @malop char(10)
FETCH NEXT FROM tinhsiso INTO @malop
while (@@FETCH_STATUS=0)
begin 
update LOP
set SISO =(select count(*) from SINHVIEN where MALOP=@malop)
where MALOP=@malop
FETCH NEXT FROM tinhsiso INTO @malop
end
Close tinhsiso
deallocate tinhsiso
exec capnhatss
go
drop trigger capnhapsiso
go
select * from LOP
delete SINHVIEN where MALOP='L001' and MASV='SV001'
----câu 2:
go
create proc tinhdiem 
as
declare diem cursor
for select MASV from SINHVIEN
open diem
declare @masv char(10)
fetch next from diem into @masv
while(@@FETCH_STATUS=0)
begin
declare @diemGK float
set @diemGK=(select DIEM_GK from SINHVIEN where MASV=@masv)
begin
if(@diemGK is null)
update SINHVIEN
	set DIEM_TK=(select (DIEM_KT*0.3+DIEM_CK*0.7) from SINHVIEN where  MASV=@masv)
	where MASV=@masv
else
update SINHVIEN
set DIEM_TK=(select (DIEM_KT*0.2+DIEM_CK*0.5+DIEM_GK*0.3) from SINHVIEN where  MASV=@masv)
	where MASV=@masv
	end
	fetch next from diem into @masv
end
close diem
deallocate tinhdiem

exec tinhdiem
select *from SINHVIEN
drop proc tinhdiem
----Bài mới:
CREATE DATABASE DB_QLBH
USE DB_QLBH
--Tạo bảng 
CREATE TABLE DMKHACH
(
	MAKHACH CHAR(10),
	TENKHACH NVARCHAR(30),
	DIACHI NVARCHAR(50),
	DIENTHOAI NCHAR(30),
	PRIMARY KEY (MAKHACH)
)
CREATE TABLE DMHANG
(
	MAHANG CHAR(10),
	TENHANG NVARCHAR(30),
	DVT NVARCHAR(20),
	SOLUONG INT,
	PRIMARY KEY(MAHANG)
)
CREATE TABLE HOADONBAN
(
	SOHD CHAR(10),
	MAKHACH CHAR(10),
	NGAYHD DATE,
	DIENGIAI NVARCHAR(50),
	PRIMARY KEY (SOHD),
	FOREIGN KEY (MAKHACH) REFERENCES DMKHACH(MAKHACH)
)
CREATE TABLE CHITIETHOADON
(
	SOHD CHAR(10),
	MAHANG CHAR(10),
	SOLUONG INT,
	DONGIA MONEY,
	PRIMARY KEY (SOHD,MAHANG),
	FOREIGN KEY (SOHD) REFERENCES HOADONBAN(SOHD),
	FOREIGN KEY (MAHANG) REFERENCES DMHANG(MAHANG)
)

ALTER TABLE DMHANG 
ADD CHECK (SOLUONG > 0)
ALTER TABLE CHITIETHOADON
ADD CHECK (SOLUONG > 0)
ALTER TABLE CHITIETHOADON
ADD CHECK (DONGIA > 0)
ALTER TABLE DMHANG 
ADD CHECK (DVT =N'cái' OR DVT =N'túi')
ALTER TABLE DMKHACH
ADD UNIQUE (DIENTHOAI)
--1.e
ALTER TABLE HOADONBAN
ADD DEFAULT GETDATE() FOR NGAYHD
--2. Thêm dữ liệu
INSERT INTO DMHANG VALUES
('MH01',N'Bột giặt Omo',N'túi',20),
('MH02',N'Bột giặt Tide',N'túi',30),
('MH03',N'Đèn bàn Rạng Đông',N'cái',50),
('MH04',N'Nồi cơm điện Sharp 3041',N'cái',15),
('MH05',N'Bàn chải đánh răng PS',N'cái',20),
('MH06',N'Nồi cơm điện PANASONIC 2097',N'cái',10),
('MH07',N'Bàn chải đánh răng Colgate',N'cái',30)
INSERT INTO DMKHACH VALUES
('KH01',N'Nguyễn Thanh Tùng',N'Hồ Chí Minh','9-9091-2233'),
('KH02',N'Lê Nhật Nam',N'Hồ Chí Minh','9-1234-2134'),
('KH03',N'Nguyễn Thị Thanh',N'Cà Mau','9-2222-3333'),
('KH04',N'Lê Thị Lan',N'Bình Dương','9-1111-1111'),
('KH05',N'Trần Minh Quang',N'Đồng Nai','9-2222-5555'),
('KH06',N'Lê Văn Hải',N'Hồ Chí Minh','9-1234-4321'),
('KH07',N'Dương Văn Hai',N'Đồng Nai','9-1111-0000')
SET DATEFORMAT DMY
INSERT INTO HOADONBAN VALUES
('HD01','KH01','',NULL),
('HD02','KH02','15-12-2016',NULL),
('HD03','KH05','18-10-2017',NULL),
('HD04','KH01','',NULL),
('HD05','KH02','27-11-2015',NULL)
INSERT INTO CHITIETHOADON VALUES
('HD01','MH01','2',3000),
('HD01','MH02','2',2500),
('HD02','MH01','3',3000),
('HD03','MH02','3',2500),
('HD03','MH03','1',9000),
('HD03','MH01','3',3000),
('HD04','MH04','1',2400),
('HD05','MH06','1',2000),
('HD05','MH01','5',3000)
--3.	Sao lưu dữ liệu
BACKUP DATABASE DB_QLBH
TO DISK= 'D:\DB_QLBH_Full.bak'
WITH INIT
--4.	
--4.1.mã hàng tên hàng không bán trong năm 2016
SELECT DISTINCT DMH.MAHANG
FROM DMHANG DMH
WHERE  DMH.MAHANG NOT IN (
							SELECT CTHD.MAHANG
							FROM CHITIETHOADON CTHD
							WHERE CTHD.SOHD = (	SELECT HD.SOHD
												FROM HOADONBAN HD
												WHERE YEAR(NGAYHD) = '2016'
											)
						)
--4.2.	danh sách khách mua hàng trong năm 2015
SELECT*
FROM DMKHACH DMK, HOADONBAN HD
WHERE HD.MAKHACH = DMK.MAKHACH AND DIACHI = N'Hồ Chí Minh' AND YEAR(NGAYHD) ='2015'
--4.3.	số lượng bán tương ứng của từng mặt hàng
SELECT MAHANG, SUM(SOLUONG) AS SL
FROM CHITIETHOADON
GROUP BY MAHANG
--4.4.	mặt hàng được bán nhiều nhất
SELECT MAHANG, SUM(SOLUONG) AS SL
FROM CHITIETHOADON
GROUP BY MAHANG
HAVING SUM(SOLUONG) = (
						SELECT TOP 1 SUM(SOLUONG) AS SL
						FROM CHITIETHOADON
						GROUP BY MAHANG
						ORDER BY SUM(SOLUONG) DESC
					)
--4.5.	danh sách các khách hàng chưa từng mua hàng
SELECT*
FROM DMKHACH
WHERE MAKHACH NOT IN 
					(
						SELECT MAKHACH
						FROM HOADONBAN
					)
--4.6.	danh sách mặt hàng chưa dduocj bán
SELECT DISTINCT DMH.MAHANG
FROM DMHANG DMH
WHERE  DMH.MAHANG NOT IN (
							SELECT CTHD.MAHANG
							FROM CHITIETHOADON CTHD					
						)
--4.7.	đưa ra số lượng tồn của từng mặt hàng.
GO
CREATE VIEW SLUONGHANGBAN
AS
SELECT MAHANG, SUM(SOLUONG) AS SL
FROM CHITIETHOADON
GROUP BY MAHANG
GO
SELECT DMH.MAHANG, (DMH.SOLUONG - SLB.SL) AS SOLUONGTON
FROM DMHANG DMH, SLUONGHANGBAN SLB
WHERE DMH.MAHANG = SLB.MAHANG
--8.	sao lưu cơ sở dữ liệu với phương thức Diffrential Backup, lưu với tên DB_QLBH_Diff.bak
BACKUP DATABASE DB_QLBH
TO DISK = 'D:\DB_QLBH_Diff.bak'
--5.	sao lưu cơ sở dữ liệu với phương thức Transaction Log Backup, lưu với tên DB_QLBH_Tran.trn (lần 1)
BACKUP LOG DB_QLBH
TO DISK = 'D:\DB_QLBH_Tran.trn'
--7.	cập nhập ThanhTien trong HoaDonBan ứng với SoHD được nhập chi tiết trong CTHD

--10.	sao lưu cơ sở dữ liệu với phương thức Diffrential Backup, lưu với tên DB_QLBH_Diff.bak (lần 2)
BACKUP DATABASE DB_QLBH
TO DISK = 'D:\DB_QLBH_Diff.bak'
--12.	sao lưu cơ sở dữ liệu với phương thức Transaction Log Backup, lưu với tên DB_QLBHT_Tran.trn (lần 2)
BACKUP LOG DB_QLBH
TO DISK = 'D:\DB_QLBH_Tran.trn'
--13.	Thay đổi địa chỉ khách hàng KH03 thành Kiên Giang.
UPDATE DMKHACH
SET DIACHI = N'Kiên Giang'
WHERE MAKHACH ='KH03'
--14.	Viết lệnh xóa cơ sở dữ liệu trên.
GO
ALTER DATEBASE DB_QLBH
DROP  DB_QLBH
GO
--15.	Viết các lệnh phục hồi lại toàn bộ cơ sở dữ liệu trên.
RESTORE DB_QLBH
FROM DISK ='D:\DB_QLBH_Full.bak'
WITH NORECOVERY
RESTORE DB_QLBH
FROM DISK ='DB_QLBH_Diff.bak'
WITH NORECOVERY
RESTORE DB_QLBH
FROM DISK ='D:\DB_QLBH_Tran.trn'
WITH FILE = 2, RECOVERY