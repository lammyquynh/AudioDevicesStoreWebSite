<?php
 	include('0_ketnoi.php');
    //Neu co ton tai ID
    if(isset($_GET['del']))
	{
		$id=$_GET['del'];
		$sql1="SELECT * FROM hoa_don  WHERE Ma_khach='$id'";
 		$hd=$conn->query($sql1);
		if ($hd->rowcount()>=1)
		{
			header("location:4_Index_QLKH.php"); //Tro ve trang truoc
			
		}
		else
		{
			$sql="Delete from Khach_hang where Ma_khach='$id'";     
			$result=$conn->exec($sql);
			if($result)
			{
				header("location:4_Index_QLKH.php"); //Tro ve trang truoc
			}
			else
			{      
				echo "Kết nối thất bại: " . $e->getMessage();
				header("location:4_Index_QLKH.php");
			}
		
		}
	}
	else
	{
		header("location:4_Index_delete.php"); //Tro ve trang truoc
	}
	
?>