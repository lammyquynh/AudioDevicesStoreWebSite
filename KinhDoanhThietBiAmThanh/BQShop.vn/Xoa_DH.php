<?php include_once ('KetNoiCSDL.php'); 
?>
<?php
	$id = $_GET["id"];
	$sql = "Delete from hoadon Where idDH = ".$id;
	mysql_query($sql);
	$sql_DH = "Delete from dathang Where idDH= ".$id;
	mysql_query($sql_DH);
	$adminURL = 'DatHang.php';
	header('Location: '.$adminURL);
 ?>