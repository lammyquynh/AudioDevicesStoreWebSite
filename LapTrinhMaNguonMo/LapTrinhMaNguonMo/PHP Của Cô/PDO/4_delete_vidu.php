<?php
 	include('0_ketnoi.php');
    try {
		// sql to delete a record 
		$sql = "DELETE FROM Khach_hang WHERE Ma_khach='KH600'";
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