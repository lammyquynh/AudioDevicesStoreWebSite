<?php
session_start();
include("KetNoiCSDL.php");
?>
<?php
	$date = getdate();
	if($date["mon"] < 10)
	{
		if($date["mday"] < 10)
		{ 
			$strdate = $date["year"].'0'.$date["mon"]."0".$date["mday"];
		}
		else 
		{
			$strdate = $date["year"]."0".$date["mon"].$date["mday"];
		}
	}
	else 
	{
		if($date["mday"] < 10)
		{
			$strdate = $date["year"].$date["mon"]."0".$date["mday"];
		}
		else
		{
			$strdate = $date["year"].$date["mon"].$date["mday"];
		}
	}
	$intdate = (int)$strdate;
	//thêm thong tin khach hang
	if(isset($_POST['dathang']))
	{
		if(!empty($_POST['ten'])&&!empty($_POST['email'])&&!empty($_POST['sdt'])&&!empty($_POST['diachi'])&&!empty($_POST['congthanhtoan']))
		{
			$sql_kh = "Insert into khachhang (ten, email, SDT, diachi, CongThanhToan, matkhau, timedk) values ('".$_POST['ten']."','".$_POST['email']."','".$_POST['sdt']."','".$_POST['diachi']."','".$_POST['congthanhtoan']."','".$_POST['matkhau']."','".$intdate."')";
			mysql_query($sql_kh);
			$thongbao = 1;
		}
		else $thongbao = 0;
	}
	//tinh tổng tiền
	$tongtien=0;
	if(isset($_SESSION["giohang"]))
	{	
		for($i=0;$i<count($_SESSION["giohang"]);$i++)
		{
			if(isset( $_SESSION['giohang'][$i]['idSP']))
			{
				$sql="select * from sanpham where idSP = " . $_SESSION['giohang'][$i]['idSP'];
				$result=mysql_query($sql);
				$row=mysql_fetch_array($result);
				$tongtien = $tongtien + ($row["DonGia"]* $_SESSION["giohang"][$i]["soluong"]);
			}
		}
	}
	//thêm vao table Dat hang
	if(isset($thongbao))
	{
		if($thongbao == 1)
		{
			$tim_idKH = "SELECT MAX(khachhang.id) AS 'idmax' From khachhang";
			$idKH = mysql_query($tim_idKH);
			$row_idKH = mysql_fetch_array($idKH);
			$sql_dh = "insert into dathang (idKH, TongTien, hinhthuctt, TrangThai) values ('".$row_idKH['idmax']."', '".$tongtien."','".$_POST['congthanhtoan']."', '0')";
			mysql_query($sql_dh);
		}
	}
	
	//them vao tbale Hoa don
	if(isset($thongbao))
	{
		if($thongbao == 1)
		{
			$tim_idDH = "select MAX(dathang.idDH) AS 'iddhmax' from dathang";
			$idDH = mysql_query($tim_idDH);
			$row_idDH = mysql_fetch_array($idDH);
				for($i=0;$i<count($_SESSION["giohang"]);$i++)
				{
					if(isset( $_SESSION['giohang'][$i]['idSP']))
					{
						$select="select * from sanpham where idSP = ".$_SESSION['giohang'][$i]['idSP'];
						$sql_select=mysql_query($select);
						$row_select=mysql_fetch_array($sql_select);
						$sql_HD = "insert into hoadon (idDH, idSP, TenSP, soluongSP, DonGia) values ('".$row_idDH['iddhmax']."', '".$row_select['idSP']."', '".$row_select['tenSP']."', '".$_SESSION['giohang'][$i]['soluong']."', '".$row_select['DonGia']."')";
						mysql_query($sql_HD);
					}
				}
			
		}
	}
	//update lai so luong san pham
	if(isset($thongbao))
	{
		if($thongbao == 1)
		{
			for($i=0;$i<count($_SESSION["giohang"]);$i++)
				{
					if(isset( $_SESSION['giohang'][$i]['idSP']))
					{
						$select="select * from sanpham where idSP = ".$_SESSION['giohang'][$i]['idSP'];
						$sql_select=mysql_query($select);
						$row_select=mysql_fetch_array($sql_select);
						$slconlai = $row_select['SLTon'] - $_SESSION['giohang'][$i]['soluong'];
						$sql_update = 'update sanpham set SLTon = '.$slconlai.' where idSP = '.$_SESSION['giohang'][$i]['idSP'];
						mysql_query($sql_update);
					}
				}
			session_destroy();
		}
	}
	if(isset($thongbao))
	{
		if(!empty($_POST['email']))
		{
			$mail = $_POST['email'];
			header('location: sendmail.php?mail='.$mail);
		}
	}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
body
{
	background-image:url(nen.jpg);
	width:auto;
}
	.thongbao
{
	width:600px;
	font-size:24px;
	color:#F00;
	font-weight:bold;
	margin-left:480px;
	margin-top:20px;
}
.thongbao a
{
	color:#F00;
}
	.chung
	{
		border: 1px solid #F60;
		width:600px;
		height:400px;
		margin-left:400px;
		margin-top:20px;
		border-radius: 0px 10px 10px 10px;
		background-color:#FF9;
	}
	.chung .c1 img{
		width: 200px;
		height:50px;	
	}
	.chunghet{
		border:3px solid #F00;
	 margin-left:50px;
	 margin-top:10px;
	 width:500px;
	 height:300px;
	 border-radius:8px;	
	}
	.chunghet p
	{
		color:#F00;
		font-size:24px;
		font-weight:bold;
		margin-left:150px;
	}
	.chunghet .h
	{
		font-weight:bold;
		margin-left:30px;
	}
	.chunghet .h input{
		margin-top: 10px;
		float:left;
	}
	.chunghet .Ðc {
		margin-left:280px;
		margin-top:-18px;
		font-weight:bold;
	}
	.chunghet .Ðc input{
		margin-top: 10px;	
	}
	.chunghet .sdt{
		margin-top: 10px;
		float:left;
		margin-left:30px;
		font-weight:bold;
	}
	.chunghet .sdt input{
		margin-top: 10px;	
	}
	.chunghet .email {
		
		margin-left:280px;
		margin-top:10px;
		font-weight:bold;	
	}
	.chunghet .email input{
		margin-top: 10px;	
	}
	.chunghet .congtt{
		margin-top: 10px;
		margin-left:30px;
		float:left;
		float:left;
		font-weight:bold;
	}
	.chunghet .congtt select{
		margin-top: 10px;
		width:173px;
	}
	.chunghet .matkhau {
		
		margin-left:280px;
		margin-top:10px;
		font-weight:bold;	
	}
	.chunghet .matkhau input{
		margin-top: 10px;	
	}
	
.khungnut
{
	width:160px;
	height:30px;
	float:left;
	margin-top:10px;
	margin-left:520px;
}
.khungnut input 
{
	border:1px solid #FF0;
    color:#FFF;
    background-color:#F00;
    font-size: 18px;
    font-weight: bold;
    height: 50px;
    width: 160px;
	
}

.khungnut input:hover {
    color: Navy;
    background-color: Silver;
    cursor: pointer;
}
.khungnut2
{
	width:170px;
	height:30px;
	float:left;
	margin-top:10px;
	margin-left:30px;
}
.khungnut2 input 
{
	border:1px solid #FF0;
    color:#FFF;
    background-color:#F00;
    font-size: 18px;
    font-weight: bold;
    height: 50px;
    width: 160px;
	
}

.khungnut2 input:hover {
    color: Navy;
    background-color: Silver;
    cursor: pointer;
}

</style>
<body>
	<form method="post">
    <div class="thongbao">
    	<?php
        	if(isset($thongbao))
			{
				if($thongbao == 0)
					echo 'Bạn vui lòng nhập đầy đủ thông tin liên lạc';
			}
			if(isset($_GET['ketqua']))
			{
echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Đặt hàng thành công <br>Xin bạn hãy kiểm tra thông báo đặt hàng trong email <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Xin mời bạn <a href="index.php">tiếp tục mua hàng</a>';
			}
		?>
    </div>
	<div class="chung">
    	
    	<div class="c1"><img src="icon/datmua.jpg" /></div>
       
        <div class="chunghet">
        
        	<p>Nhập thông tin liên lạc</p>
            <div class="h">Họ và tên: <br /> <input type="text" name="ten" /></div>
            <div class="Ðc">Ðịa chỉ:<br /> <input type="text" name="diachi" /></div>
            <div class="sdt">Số điện thoại:<br /> <input type="text" name="sdt" /></div>
            <div class="email">Email:<br /> <input type="text" name="email" /></div>
            <div class="congtt">Cổng thanh toán:<br />
            	<select name="congthanhtoan">
                	<option value="Tructiep">TrucTiep</option>
                	<option value="Nganluong.vn">Nganluong.vn</option>
                    <option value="VNmart.vn">VNmart.vn</option>
                    <option value="Payoo.vn">Payoo.vn</option>
                    <option value="OnePay">OnePay</option>
                    <option value="Baokim.vn">Baokim.vn</option>
                    
                </select>
            </div>
            <div class="matkhau">Mật khẩu giao dịch(nếu có):<br /> <input type="text" name="matkhau" /></div>
            
    	</div>
    </div>
    <div class="khungnut"><input type="submit" name="dathang" value="Đặt hàng" /> </div>
    <div class="khungnut2"><a href="index.php"><input type="button" name="trolai" value="Tiếp tục mua"/></a></div>
    </form>
</body>
</html>
