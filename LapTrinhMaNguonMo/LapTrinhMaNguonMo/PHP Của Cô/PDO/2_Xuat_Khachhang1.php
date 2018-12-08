<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!–Kết nối cơ sở dữ liệu–>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý sữa - Thông tin khách hàng</title>
</head>
<link rel="stylesheet" type="text/css" href="dinhdang.css">
<?php  
//Gọi kết nối
include("0_Ketnoi.php");
 $sql="select* from Khach_hang";
 $KH_Hang=$conn->query($sql);
?> 
<body>
<table width="748" height="170" border="1" align="center" cellpadding="5" style="border-collapse:collapse">
	<caption> <h1> THÔNG TIN KHÁCH HÀNG</h1></caption>
    <tr bgcolor="#999999" >
    	<td><strong> Mã khách</strong></td>
        <td><strong> Tên_Khách </strong></td>
        <td><strong> Phái </strong></td>
        <td><strong> Điện thoại</strong></td>
        <td><strong> Địa chỉ </strong></td>
        <td><strong> Email </strong></td>
    </tr> 
<?php 
	foreach($KH_Hang as $KH)
	{
?>
<tr>
    <td > <?php echo $KH['Ma_khach']?></td>
    <td > <?php echo $KH['Ten_Khach']?></td>
    <td><img src="<?php echo $KH['Phai']?>.png" width="30" height="30" /></td>
    <td > <?php echo $KH['Dien_thoai']?></td>
    <td > <?php echo $KH['Dia_chi']?></td>
    <td > <?php echo $KH['Email']?></td>
</tr> 
<?php
    } 
		 $conn = null;
?>
</table>
</body>
</html>