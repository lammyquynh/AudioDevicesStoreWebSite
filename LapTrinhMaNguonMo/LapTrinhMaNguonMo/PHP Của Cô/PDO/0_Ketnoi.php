<?php
try {
    // Kết nối
    	$conn = new PDO("mysql:host=localhost;dbname=ql_ban_sua", 'root', '');
    // Thiết lập chế độ lỗi
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//Thiết lập chế độ font chữ 	 
		$conn->query("set names utf8");
    // Thông báo thành công
    //echo "Kết nối thành công";
} 
// Nhánh kết nối thất bại
catch (PDOException $e) {
    echo "Kết nối thất bại: " . $e->getMessage();
}
?>