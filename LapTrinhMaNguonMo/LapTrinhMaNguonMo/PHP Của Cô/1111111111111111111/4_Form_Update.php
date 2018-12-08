<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="dinhdang.css"/>
<title>CẬP NHẬT THÔNG TIN KHÁCH HÀNG</title>
</head>
<?php
 	include('0_ketnoi.php');
	if(isset($_GET['del']))
	{
		$id=$_GET['del'];	
		$Ten_Khach = $_POST['Ten_Khach'];
		$Phai = $_POST['Phai'];
		$Dien_thoai=$_POST['Dien_thoai'];
		$Dien_thoai=$_POST['Dien_thoai'];
		$Email = $_POST['Email'];
		$Dia_chi = $_POST['Dia_chi'];
	// query
		$sql = "UPDATE khach_hang
				SET 
					Ten_Khach,Phai,Dien_thoai,Email, Dia_chi
				WHERE Ma_khach=?";
		$q = $db->prepare($sql);
		$q->execute(array($Ten_Khach,$Phai,$Dien_thoai,$Email,$Dia_chi));
		header("location: 4_Index_update.php");
 
	for($i=0; $row = $result->fetch(); $i++){
?>
    <form action="edit.php" method="POST">
    <input type="hidden" name="memids" value="<?php echo $id; ?>" />
    First Name<br>
    <input type="text" name="fname" value="<?php echo $row['fname']; ?>" /><br>
    Last Name<br>
    <input type="text" name="lname" value="<?php echo $row['lname']; ?>" /><br>
    Age<br>
    <input type="text" name="age" value="<?php echo $row['age']; ?>" /><br>
    <input type="submit" value="Save" />
    </form>
<?php
	}
?>