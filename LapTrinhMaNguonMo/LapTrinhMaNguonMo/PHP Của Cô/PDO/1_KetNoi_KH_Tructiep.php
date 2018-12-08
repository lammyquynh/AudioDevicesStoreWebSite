<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kết nối CSDL</title>
</head>
<?php
try {// Kết nối
   	$conn = new PDO("mysql:host=localhost;dbname=ql_ban_sua", 'root', '');
    // Thiết lập chế độ lỗi
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//Thiết lập chế độ font chữ 	 
		$conn->query("set names utf8");
    // Thông báo thành công
    echo "Kết nối thành công";
} 
	// Nhánh kết nối thất bại
	catch (PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
	}
?>
<body>
<hr/>
<?php
	//Lấy dữ liệu từ SQL
 	$sql="select* from Khach_hang";
 	$KH=$conn->query($sql);
	echo "Số Record có trong danh sách khách hàng là: ".$KH->rowcount();
?>
</body>
</html>