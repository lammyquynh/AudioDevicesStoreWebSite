<?PHP
	// configuration
	include('0_ketnoi.php');
	// new data
	$Ten_Khach = $_POST['Ten_Khach'];
	$Phai = $_POST['Phai'];
	$Dien_thoai = $_POST['Dien_thoai'];
	$Dia_chi = $_POST['Dia_chi'];
	$Email = $_POST['Email'];
	$id = $_POST['Ma_khach'];
	// query
	$sql = "UPDATE khach_hang 
			SET Ten_Khach=?, Phai=?, Dien_thoai=?,Email=?,Dia_chi=?
			WHERE Ma_khach=?";
	$q = $conn->prepare($sql);
	$q->execute(array($Ten_Khach,$Phai,$Dien_thoai,$Email,$Dia_chi,$id));
	header("location: 4_Index_update.php");
?>