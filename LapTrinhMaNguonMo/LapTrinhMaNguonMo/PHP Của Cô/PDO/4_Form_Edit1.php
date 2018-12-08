<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="dinhdang.css"/>
<title>FORM CẬP NHẬT THÔNG TIN KHÁCH HÀNG</title>
</head>
<?php
	include('0_ketnoi.php');
	$id=$_GET['id'];
	$result = $conn->prepare("SELECT * FROM khach_hang WHERE Ma_khach='$id'");
	$result->bindParam(':Ma_khach', $id);
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
<form action="4_edit.php" method="POST">
<input type="hidden" name="Ma_khach" value="<?php echo $id; ?>" />
Tên khách<br>
<input type="text" name="Ten_Khach" value="<?php echo $row['Ten_Khach']; ?>" /><br>
Phái<br>
<input type="text" name="Phai" value="<?php echo $row['Phai']; ?>" /><br>
Điện thoại<br>
<input type="text" name="Dien_thoai" value="<?php echo $row['Dien_thoai']; ?>" /><br>
Email<br>
<input type="text" name="Email" value="<?php echo $row['Email']; ?>" /><br>
Địa chỉ<br>
<input type="text" name="Dia_chi" value="<?php echo $row['Dia_chi']; ?>" /><br>
<input type="submit" value="Save" />
</form>
<?php
	}
?>