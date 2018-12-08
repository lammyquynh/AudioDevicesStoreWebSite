<?php
include('4_Index_delete1.php');
try {
    // Kết nối
    	$conn = new PDO("mysql:host=localhost;dbname=ql_ban_sua", 'root', '');
    // Thiết lập chế độ lỗi
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//Thiết lập chế độ font chữ 	 
		$conn->query("set names utf8");
    // sql to delete a record
    $sql = "DELETE FROM Khach_hang WHERE Ma_khach= ".$KH['Ma_khach']"";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>
