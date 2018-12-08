<?php include_once ('KetNoiCSDL.php');?>
<?php 
	$id=$_GET['id'];
	$sql='delete from admin where id="'.$id.'"';
	mysql_query($sql);
	header("location:QL_TaiKhoan.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>