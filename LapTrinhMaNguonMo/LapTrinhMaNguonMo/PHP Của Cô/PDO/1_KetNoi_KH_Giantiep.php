<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kết nối CSDL</title>
</head>
<?php
	include ("0_Ketnoi.php");
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
<?php
	$conn = null;
?>