<?php
 	include('0_ketnoi.php');
    //Neu co ton tai ID
    if(isset($_GET['del']))
	{
		$id=$_GET['del'];
		try {
			$sql="Delete from Khach_hang where Ma_khach='$id'";     
			$conn->exec($sql);
			header("location:4_Index_delete.php"); //Tro ve trang truoc
		}
		catch(PDOException $e)
    	{
    		echo $sql . "<br>" . $e->getMessage();
			header("location:4_Index_delete.php");
    	}
	}
	$conn = null;
?>
		