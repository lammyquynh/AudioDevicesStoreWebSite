
<?php
session_start();
include ("KetNoiCSDL.php");
	if(isset($_SESSION["giohang"]))
	{
		
		if(isset($_GET["idxoa"]))
		{
			
			$idSP=$_GET["idxoa"];
			if($idSP==0)
			{
				session_destroy();	
			}
			else
			{
				
				for($i=0;$i<count($_SESSION["giohang"]);$i++)
				{
					if(isset($_SESSION["giohang"][$i]["idSP"]))
					{
						if($_SESSION["giohang"][$i]["idSP"]==$idSP)
						{
							unset($_SESSION["giohang"][$i]["idSP"]);
							
						}
					}
				}
			}
			header("location:ChiTietGioHang.php");
			exit();	
		}
	}
	else
	{
		header("location:ChiTietGioHang.php");
	}
?>