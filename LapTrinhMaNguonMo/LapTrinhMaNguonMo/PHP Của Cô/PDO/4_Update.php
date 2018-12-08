<?php
	include('0_ketnoi.php');
	$sql ="UPDATE khach_hang SET Ma_khach='kh002',Ten_Khach='Mai',Phai='0',Dien_thoai='0918456619,Email='mai@gmail.com',Dia_chi='CNTP' WHERE Ma_khach='kh002'";
	if ($conn->query($sql)) {
    echo "Record updated successfully";
	} 
	else 
	{
    echo "Error updating record: " . $conn->error;
	}

$conn->close();
?>
