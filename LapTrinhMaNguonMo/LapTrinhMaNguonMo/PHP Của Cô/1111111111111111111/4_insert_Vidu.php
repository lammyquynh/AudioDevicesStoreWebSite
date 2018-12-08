<?php
include('0_ketnoi.php');
	//Khai báo biến
	//Xây dựng câu lệnh thêm khách hàng
	$conn->query("set names utf8");
	try {
			$sql = "INSERT INTO khach_hang (`Ma_khach`, `Ten_Khach`, `Phai`, 
			`Dien_thoai`, `Email`, `Dia_chi`) 
			VALUES  ('KH1000','KHánh','0','0918567789',
			'khanh@gmail.com')";
			$conn->exec($sql);
		echo "Record insert successfully";
    }
	catch(PDOException $e)
    {
    	echo "Record insert er: ".$sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>