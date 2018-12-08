<?php include_once ('KetNoiCSDL.php'); 
?>
<?php
	if ($_SERVER['REQUEST_METHOD'] != 'GET')
    die('Invalid HTTP method!');
	$sql = "Delete From sanpham Where idSP = ".$_GET["id"];
	mysql_query($sql);
	$adminURL = 'admin.php';
	header('Location: '.$adminURL);
 ?>