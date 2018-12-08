<?php
	include('0_ketnoi.php');
    $sql = "INSERT INTO `khach_hang`
	(`Ma_khach`, `Ten_Khach`, `Phai`, `Dien_thoai`, 
	`Email`, `Dia_chi`) VALUES ('KH208','Lê Văn Năm',
	'1','0918453360','man@gmail.com','Đại học CNTP')";
    $kq=$conn->exec($sql);
    if($kq)
		echo "New record created successfully";
    else
	{
    	echo $sql . "<br>" . $e->getMessage()."Thất bại";
    }
$conn = null;
?>
