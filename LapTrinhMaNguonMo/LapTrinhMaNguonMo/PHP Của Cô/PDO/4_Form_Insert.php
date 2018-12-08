<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="dinhdang.css"/>
<title>CẬP NHẬT THÔNG TIN KHÁCH HÀNG</title>
</head>
<?php
 	include('0_ketnoi.php');
	//Khai báo biến
	if(isset($_POST["insert"]))
	{error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		$Ma_khach=$_POST['TxtMakhach'];
		$Ten_Khach=$_POST['TxtTenkhach'];
		$Phai=$_POST['TxtPhai'];
		$Dien_thoai=$_POST['TxtDienthoai'];
		$Email=$_POST['TxtEmail'];
		$Dia_chi=$_POST['TxtDiachi'];
	
		//Xây dựng câu lệnh thêm khách hàng
	try {
			$sql = "INSERT INTO khach_hang (`Ma_khach`, `Ten_Khach`, `Phai`, 
			`Dien_thoai`, `Email`, `Dia_chi`) 
			VALUES  ('$Ma_khach','$Ten_Khach','$Phai','$Dien_thoai',
			'$Email','$Dia_chi')";
			$kq=$conn->exec($sql);
			$thongbao="Thêm dữ liệu thành công";
		}
	catch (PDOException $e) 
		{
   			$thongbao= "Thêm dữ liệu không thành công, Mã khách hàng "
			.$Ma_khach."đã có trong CSDL";
 		}
	}
?>
<body>
<form action="4_Form_Insert.php" method="post" name="4_Form_Insert">
<h1 align="center" style="color:#00F">THÊM THÔNG TIN KHÁCH HÀNG</h1>
    <table width="600" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#FF99FF">
           <tr>
            <td width="100">Mã khách</td>
            <td ><input type="text" name="TxtMakhach" placeholder="KH001" size="20" value=<?php error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED); echo $Ma_khach;  ?>  ></td>
          </tr>
          <tr>
            <td>Họ và tên</td>
            <td ><input type="text" name="TxtTenkhach" placeholder="Phan Thị Ngọc Mai" size="50" value=<?php error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED); echo $Ten_Khach;  ?>  > </td>
          </tr>
          <tr>
            <td>Phái</td>
            <td><input type="text" name="TxtPhai"  placeholder="0 (Nữ) hoặc 1 (Nam)"   size="20" /></td>
          </tr>
          <tr>
            <td>Địa chỉ</td>
            <td><input type="text" name="TxtDiachi" placeholder="140, Lê Trọng Tấn, Tây thạnh, Tân phú, Tp.HCM" size="50" /></td>
          </tr>
          <tr>
            <td>Điện thoại</td>
            <td><input type="text" name="TxtDienthoai" placeholder="0918453318" size="20" /></td>
          </tr>
          <tr>
            <td>Mail</td>
            <td><input type="text" name="TxtEmail" placeholder="maiptn@gmail.com"  size="30" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" name="insert" value="Thêm" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><?PHP error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);echo $thongbao;?></td>
          </tr>
      </table>
</body>
</html>
