<?php 
	session_start();
	include ("KetNoiCSDL.php");
?>
<?php 
	//tang so luong
	//phần quan trong.. có thể hỏi
	if(isset($_SESSION["giohang"]))
	{
		if(isset($_GET["themsp"]))
		{
			$idSP=$_GET["themsp"];
			for($i=0;$i<count($_SESSION["giohang"]);$i++)
			{
				if(isset( $_SESSION['giohang'][$i]['idSP']))
				{
					if($_SESSION["giohang"][$i]["idSP"]==$idSP)
					{
						$sql="select * from sanpham where idSP = ".$idSP;
						$result=mysql_query($sql);
						$row=mysql_fetch_array($result);
						if($row['SLTon'] >= $_SESSION['giohang'][$i]['soluong'] + 1)
						{
							$_SESSION["giohang"][$i]["soluong"]++;	
						}
					}
				}
			}
			header("ChiTietGioHang.php");
			
				
		}
	}
	//giam so luong
	//phần quan trọng !!!!!!!!!!!!
	if(isset($_SESSION["giohang"]))
	{
		if(isset($_GET["xoasp"]))
		{
			$idSP=$_GET["xoasp"];
			for($i=0;$i<count($_SESSION["giohang"]);$i++)
			{
				if(isset( $_SESSION['giohang'][$i]['idSP']))
				{
					if($_SESSION["giohang"][$i]["idSP"]==$idSP)
					{
						if($_SESSION["giohang"][$i]["soluong"] - 1 >= 1)
						{
							$_SESSION["giohang"][$i]["soluong"]--;	
						}
					}
				}
			}
			header("ChiTietGioHang.php");	
		}
	}
	if(isset($_GET['dathang']))
	{
		if(isset($_SESSION["giohang"]))
		{
			
			$adminURL = 'FormDatHang.php';
			header('Location: '.$adminURL);
		}
		else 
		{
			$thongbao = "Giỏ hàng bạn đang rõng ! Không thể đặt hàng";
		}
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
	function thongbao_hethang()
	{
            return alert("Đã vượt quá số lượng sản phẩm trong kho!");
	}
	function thongbao_giamhang()
	{
		return alert("Số lượng đặt phải ít nhất là 1 !");
	}
</script>
<link href="css/styles.css" type="text/css" media="all" rel="stylesheet" />

  <link href="css/skitter.styles.min.css" type="text/css" media="all" rel="stylesheet" />
  
  <script type="text/javascript" language="javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>
  
  <script type="text/javascript" language="javascript">
    $(document).ready(function() {
      $('.box_skitter_large').skitter({
        theme: 'clean',
        numbers_align: 'center',
        progressbar: true, 
        dots: true, 
        preview: true
      });
    });
  </script>
  
  
  <script type="text/javascript">
$(document).ready(function(){ 
	$('dd:not(:first)').hide(); 
		$('dt a').click(function(){
			$('dd').slideUp('slow');  
			$('.acctive').removeClass('acctive');
			$(this).parent().addClass('acctive').next().slideDown('slow');
			return false;
	});
}); 
</script>
</head>
<style>
body
 {
	 
 }	
	.menu{
			width: 1198px;
			height:800px;
			background-image:url(nen.jpg);
			 border: 1px  solid none;
			 margin:-15px 150px 0px 150px ;
			 padding:0px;
			 float:left;
	}
	.menu .r
	{
		background-color:#999;
		width: 1198px;
		height:190px;
		float:left;
		margin-top:87px;
	}
	.menu .r .d0
	{
		color:#FFF;
		float:left;
		width:250px;
		height:100px;
		margin-left:50px;
		margin-top:20px;
	}
	.menu .r .d1
	{
		color:#FFF;
		float:left;
		width:250px;
		height:100px;
		margin-left:40px;
		margin-top:14px;
	}
	.menu .r .d2
	{
		color:#FFF;
		float:left;
		width:250px;
		height:100px;
		margin-left:10px;
		margin-top:16px;
	}
	.menu .r .d3
	{
		color:#FFF;
		float:left;
		width:250px;
		height:100px;
		margin-left:10px;
		margin-top:16px;
	}

 .menutruot
{
	border: 1px solid none;
	width: 150px;
	height:800px;
	float:left;
	position:fixed;
	
}
.menutruot a
{
	text-decoration:none;
	color:#FFF;
}
.acctive{
	background: #999 url(drop-down-icon1.png) no-repeat 2px 50%;
}
dl{
	width:150px;
	
}
dt{
	background:#3883cc url(drop-down-icon.png) no-repeat 2px 50%;
	border-bottom:1px solid #FFFFFF;
	font-size:17px;
	padding:15px 20px;
	position:relative;
	
}	
dt a{
	color: #FFF;
	text-decoration:none;
}
dd a{
	color:#000000;
	text-decoration:none;
	
}

ul{
	list-style:none;
	padding:5px 5px 3px 30px ;
	
}
ul li {
	border-bottom: 1px solid #009;
	width:150px;
	margin-left:-50px;
	padding:10px;
	text-indent:50px;
		
}
ul li:last-child
{
	border-bottom: none;	
}
.menu .khunganh
{
	width:355px;
	height:530px;
	margin-top:50px;
	margin-left:80px;
	float:left;
	
}
.menu .khunganh input 
{
	border:1px solid #FF0;
    color:#FFF;
    background-color:#F00;
    font-size: 18px;
    font-weight: bold;
    height: 60px;
    width: 168px;
	margin-top:10px;
	margin-left:5px;
	float:left;
}

.menu .khunganh input:hover {
    color: Navy;
    background-color: Silver;
    cursor: pointer;
}
.menu .khungthongtin
{
	width:740px;
	height:550px;
	margin-top:50px;
	margin-left:10px;
	float:left;
}
.menu .khungthongtin .tensp
{
	color:#FFF;
	background-color:#000;
	font-size: 36px;
	font-family:Tahoma, Geneva, sans-serif;
	height:50px;
}
.menu .khungthongtin .maso
{
	color:#000;
	background-color:#FFF;
	font-size: 24px;
	font-family:Tahoma, Geneva, sans-serif;
	height:30px;
}
.menu .khungthongtin .theloai
{
	color:#000;
	background-color:#999;
	font-size: 24px;
	font-family:Tahoma, Geneva, sans-serif;
	height:30px;
}
.menu .khungthongtin .dongia
{
	color:#F00;
	background-color:#FFF;
	font-size: 36px;
	font-family:Tahoma, Geneva, sans-serif;
	height: 60px;
}
.menu .tieude
{
	border: 1px solid none;
	width:1198px;
	height:100px;
	margin-top:15px;
	background-image:url(image/thongtinsanpham.jpg);
}
.khungchung
{
	width:800px;
	height:400px;
	margin-top:150px;
	margin-left:200px;
	float:left;
}
.khungchung table
{
	background-color:#FFC;
	color:#000;
	font-size:18px;
	font-weight:bold;
}
.khungchung .dongtieude
{
	background-color:#666;
	color:#FFF;
}
.khungchung .tongtien
{
	font-size: 24px;
	color:#F00;
}
.khungchung input
{
	border:1px solid #FF0;
    color:#FFF;
    background-color:#F00;
    font-size: 18px;
    font-weight: bold;
    height: 40px;
    width: 160px;
	border-radius: 8px;
	margin-left:15px;
}

.khungchung input:hover {
    color: Navy;
    background-color: Silver;
    cursor: pointer;
}
</style>
<body>
	<div class="menutruot">
        	<a href="index.php"><dt>Trang chủ</dt></a>
			<?php
								$sql_theloai = 'select * from theloai';
								$sql_tl = mysql_query($sql_theloai);
								while($row_tl = mysql_fetch_array($sql_tl))
								{
						 ?>
                        <dl>
                            <dt><a href="index"><?php echo $row_tl['TenTL'];  ?></a></dt>
                        <dd>
                        <ul>
                        	<?php $sql_loaisp = 'select * from loaisp where idTL = '.$row_tl['idTL'];
									$sql_lsp = mysql_query($sql_loaisp);
									while($row_lsp = mysql_fetch_array($sql_lsp))
									{
							 ?>
                            <li><a href="ShowSP_TheoLoai.php?id=<?php echo $row_lsp['id']; ?>"><?php echo $row_lsp['tenloai']; ?></a></li>
                            <?php } ?>
                        </ul>
                        </dd>
                        </dl>
                        <?php } ?>
        <img src="image/anhGif.gif" width="150" height="320" />
    </div>
    <div class="menu">
    <div class="khungchung">
    	<table width="100%" cellpadding="1" cellspacing="1" border="1" bordercolor="#FFFFFF">
        	<tr align="center" class="dongtieude">
            	<td>Hình ảnh</td>
                <td>Tên sản phẩm</td>
                <td>Số lượng</td>
                <td>Đơn giá</td>
                <td>Tác vụ</td>
            </tr>
            <?php
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
					$tongtien=$tongtien+($row["DonGia"]* $_SESSION["giohang"][$i]["soluong"]);
		?>
				  <tr>
					<td ><div align="center"><img src="<?php echo $row["image_link"]?>" width="50" height="70"/></div></td>
					<td><div align="center"><?php echo $row["tenSP"]?></div></td>
					<td><div align="center">
					<a href="ChiTietGioHang.php?themsp=<?php echo $_SESSION["giohang"][$i]["idSP"]?>" 
                    <?php 
						if($row['SLTon'] < $_SESSION['giohang'][$i]['soluong'] + 1)
						{
							echo 'onclick="return thongbao_hethang()"';
						}
					?>
                    ><img src="icon/add.png"  width="20" height="20"/></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php echo $_SESSION["giohang"][$i]["soluong"]?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="chitietgiohang.php?xoasp=<?php echo $_SESSION["giohang"][$i]["idSP"]?>" 
                    <?php 
						if($_SESSION['giohang'][$i]['soluong'] - 1 < 1)
						{
							echo 'onclick="return thongbao_giamhang()"';
						}
					?>
                    ><img src="icon/remove.png"  width="20" height="20"/></a></div></td>
					<td><div align="center"><?php echo $row["DonGia"]?></div></td>
					<td><div align="center"><a href = "XoaSP.php?idxoa=<?php echo  $_SESSION['giohang'][$i]['idSP']?>">Xóa </a></div></td>
				  </tr>
				  
			  <?php
					}
				}
			}
			else
			{
			?>
                <tr align="center">
                	<td colspan="5" class="tongtien">
                    <?php
						if(isset($thongbao))
						{
							echo $thongbao;
						}
						else echo "Giỏ hàng rõng ! Mời bạn mua hàng";
					 ?>
                    </td>
                </tr>
                <?php	
			}
			  ?>
              <tr>
                <td colspan="5" class="tongtien"><div align="right">Tổng tiền: <?php echo $tongtien.' VNĐ'; ?></div></td>
              </tr>
              <tr align="center">
                <td colspan="5">
                <a href="index.php"><input type="button" value="Tiếp tục mua" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="XoaSP.php?idxoa=0"><input type="button" value="Huỷ giỏ hàng" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ChiTietGioHang.php?dathang=0"><input type="button" value="Đặt hàng" /></a>
               </td>
              </tr>
        </table>
    </div>
    </div>
</body>
</html>