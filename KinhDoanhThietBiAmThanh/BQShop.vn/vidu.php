<?php include_once('KetNoiCSDL'); ?>
<?PHP
	session_start();
	if(isset($_POST['dangnhap']))
	{	
		$sql_dn='selct * from admin where taikhoan="'.$_POST['user'].'" and matkhau="'.$_POST['password'].'"';
		$sql=mysql_query($sql_dn);
		$row=mysql_num_rows(
		if($row==1)
		{
			$row_user=mysql_fetch_array($sql);
			$_SESSION['dangnhap']=array();
			$_SESSION['dangnhap'][0]['iduser']=$row_user['id'];
			header(location,'admin.php');
		}
		else
		{
			 $thongbao='';
		}
	}
?>

<?php
	session_start(et();
	if(isset($_POST['dangnhap']))
	{
		$sql
	}
?>