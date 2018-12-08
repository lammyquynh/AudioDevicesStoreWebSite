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
	<h1 align="center" style="color:#00F">SỬA THÔNG TIN KHÁCH HÀNG</h1>
    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#999999">
          <input type="hidden" name="Ma_khach" value="<?php echo $id; ?>" </td>
          <tr><td>Họ và tên</td>
            <td ><input type="text" name="Ten_Khach" value="<?php echo $row['Ten_Khach']; ?>" size="50" /> </td>
          </tr>
          <tr><td>Phái </td>
            <td><input type="text" name="Phai" value="<?php echo $row['Phai']; ?>"   size="20" /></td>
          </tr>
          <tr><td>Địa chỉ</td>
            <td><input type="text" name="Dia_chi" value="<?php echo $row['Dia_chi']; ?>" size="50" /></td>
          </tr>
          <tr><td>Điện thoại</td>
            <td><input type="text" name="Dien_thoai" value="<?php echo $row['Dien_thoai']; ?>" size="20" /></td>
          </tr>
          <tr><td>Mail</td>
            <td><input type="text" name="Email" value="<?php echo $row['Email'];?>" size="30" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" value="Save" /></td>
          </tr>
	</table>
</form>
<?php
	}
?>