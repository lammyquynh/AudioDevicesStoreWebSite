<?php include_once('KetNoiCSDL.php');?>
<?php
	if(isset($_POST['giaohang']))
	{
		$c = 0;
		if(isset($_POST['check']))
		{
			//time nhap
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
			foreach($_POST['check'] as $value)
			{
				$sql_giaohang = "Update dathang Set TrangThai = 1, timeGD = ".$intdate." Where idDH = ".$value;
				mysql_query($sql_giaohang);
				$c = 1;
			}
		}
		if($c == 1)
		{
			$adminURL = 'DH_ChuaGiao.php';
			header('Location: '.$adminURL);
		}
		else
		{
			$thongbao = "Bạn chưa chọn đơn hàng cần giao !";
		}
	}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
	function thongbao()
	{
            return confirm("Bạn có chắc xoá không?");
	}
</script>
<link href="css/styles.css" type="text/css" media="all" rel="stylesheet" />

  <!-- Skitter Styles -->
  <link href="css/skitter.styles.min.css" type="text/css" media="all" rel="stylesheet" />
  
  <!-- Skitter JS -->
  <script type="text/javascript" language="javascript" src="js/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
  <script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>
  
  <!-- Init Skitter -->
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
	pading: 0px;
	margin:0px;
	background-color:#FFF;
	
}
table .n
{
	width:200px;
	height:700px;
	background:#333;
	position:fixed;

	
}
table .n h1
{
	margin-top: -60px;
	margin-left:60px;	
}
table .n img
{
	width: 50px;
	height: 50px;
	margin-top:20px;	
	margin-left:20px;
}

table .n input
{
	border-radius:10px;
	width:180px;
	height:30px;
	margin-top:20px;
}
table .n ul{
	background: #666;
    width: 206px;
 	padding: 0;
 	list-style-type: none;
	margin-top:20px;
	margin-left:-7px;
}
table .n ul li {
 width: 210px;
 height: 40px;
 line-height: 40px;
 border-bottom: 1px solid #e8e8e8;
 padding: 0px;
 margin-left:0px;
}
table .n ul li a {
 text-decoration: none;
 color: #333;
 font-weight: bold;
 display: block;
 color: #FFF;
 text-indent:60px;
 
}
table .n ul li :hover {
 background: #CDE2CD;
}
.khung2
{
	width:900px;
	height:600px;
	float:left;
	margin-left:250px;
	margin-top:100px;
}
.khung2 .tieude
{
	border:1px solid none;
	float:left
	width:600px;
	height:50px;
	font-size:36px;
	color:#F00;
	font-weight:bold;
	text-align:center;
	margin-left:150px;
}
.khung2 .thongbao
{
	border:1px solid none;
	width:600px;
	height:30px;
	margin-left:150px;
	font-size: 20px;
	font-weight:bold;
	color:#F00;
	text-align:center;
}
.khung2 .submit input
{
	width:100px;
	height:40px;
	background:#FFC;
	font-weight:bold;
}
.khung2 .submit input:hover
{
	background:#666;
	color:#FFF;
}
.khung2 .check input
{
	width:20px;
	height:20px;
}
.khung2 a
{
	text-decoration:none;
	color:#F00;
	font-size:18px;
}
table .khung0
{
	height:49px;
	width:1150px;
	margin-left:200px;
	background-color:#333;
	position:fixed;
}
.menutruot
{
	border: 1px solid none;
	width: 150px;
	height:800px;
	float:left;
	position:fixed;

	
}


*{margin:0px;padding:0px;}
. menutruot #wrapper{
	width:300px; margin:20px auto;
		
}
.acctive{
	background: #999 url(drop-down-icon1.png) no-repeat 2px 50%;
}
dl{
	width:150px;
	background-color:#999;
	
}
dt{
	background-color:#666;
	border-bottom:1px solid #FFFFFF;
	font-size:17px;
	padding:15px 20px;
	position:relative
}
dt a{
	color:#FFF;
	text-decoration:none;
}
dd a{
	color:#FFF;
	text-decoration:none;
	

}

ul{
	list-style:none;
	padding:5px 5px 3px 30px ;
}
ul li {
	border-bottom: 1px solid #FFF;
	width:150px;
	margin-left:-40px;
	padding:10px;
	text-indent:20px;
		
}

ul li:last-child
{
	border-bottom: none;	
}
button 
{
    color:#FFF;
    background-color:#999;
    font-size: 14px;
    font-weight: bold;
    height: 30px;
    width: 160px;
	margin-top:10px;
}
 
button:hover {
    color: Navy;
    background-color: Silver;
    cursor: pointer;
}
.khung0 a
{
	text-decoration:none;
	margin-right:10px;
	margin-top:10px;
	color:#FFF;
}
.khung0 .khung01
{
	border:1px solid none;
	width:800px;
	float:left;
	margin-top:10px;
	margin-left:10px;
}
.khung2 table td
{
	border:1px solid #999;
	cellspacing: 0px;
}
</style>


<body>
<table cellpadding="0" cellspacing="0">
  <tr >
   <td width="206" class="n">
    <img src="image/hinhloa/Amply1.jpg" />
    <h1><font color="#FFFFFF">BQSHOP</font></h1><hr / color="#999999" width="200px">
    <input type="text" name="" placeholder="  Tìm kiếm..." />
    <ul>
     <li><a href="admin.php">Sản Phẩm</a>
     <li><a href="DatHang.php">Đơn đặt hàng</a></li>
     <li><a href="KhachHang.php">Khách Hàng</a></li>
     <li><a href="#">Thống kê</a></li>
     <li><a href="index.php">Trang chủ</a></li>
    </ul>
   </td>
   <td width="1155">
   <div class="khung0">
   <div class="khung01">
            	<img src="icon/danhsach.png" width="18" height="18" /><a href="admin.php?id = 0"><b>Danh sách đặt hàng</b></a>
                <img src="icon/tieubieu.png" width="18" height="18" /><a href="DH_ChuaGiao.php"><b>Đơn hàng chưa giao</b></a>
                <img src="icon/new.png" width="18" height="18" /><a href="DH_DaGiao.php"><b>Đơn hàng đã giao</b></a>
                <img src="icon/hetsl.png" width="18" height="18" /><a href="#"><b>Đơn hàng hoàn trả</b></a>
   </div>
        
   </div>
    <div class="khung2">
        <div class="tieude">Danh sách đơn hàng chưa giao</div>
        <form method="post">
        <div class="thongbao"><?php if(isset($thongbao)) echo $thongbao; ?></div>
    	<table width="100%">
        	<tr bgcolor="#CCCCCC" align="center" height="50">
            	<td>idDH</td>
            	<td>idKH</td>
                <td>Tên Khách Hàng</td>
                <td>Địa chỉ</td>
                <td>Tổng tiền</td>
                <td>Trạng thái DH</td>
                <td>Chi tiết đơn hàng</td>
                <td>Sửa</td>
                <td>Xoá</td>
                <td><div class="submit"><input type="submit" value="Giao Hàng" name="giaohang" /></div></td>
            </tr>
        	<?php 
					
					$sql = 'select * from dathang, khachhang where dathang.idKH = khachhang.id AND TrangThai = 0';
					$sp = mysql_query($sql);
					while($row = mysql_fetch_array($sp))
					{
			  ?>
        	<tr bgcolor="#FFFFFF" align="center">
            	<td><?php echo $row['idDH']; ?></td>
                <td><?php echo $row['idKH']; ?></td>
                <td><?php echo $row['ten']; ?></td>
             	<td><?php echo $row['diachi']; ?></td>
                <td><?php echo $row['TongTien']; ?></td>
                <td><?php if($row['TrangThai']==0) echo "Chưa giao"; else echo "Đã giao"; ?></td>
                <td><a href="Xem_CTDH.php?id=<?php echo $row["idDH"]; ?>">Xem chi tiết</a></td>
                <td><a href="Sua_SP.php?id=<?php echo $row["idDH"]; ?>"><img src="icon/Sua.png" width="20" height="20" /></a></td>
                <td><a href="Xoa_SP.php?id=<?php echo $row["idDH"]; ?>"><img src="icon/Xoa.PNG" width="20" height="20"/></a></td>
            	<td><div class="check"><input type="checkbox" name="check[]" value="<?php echo $row["idDH"]; ?>" /></div></td>
            </tr>
            <?php }?>
        </table>
        </form>
    </div>
   </td>
  </tr>
</table>
</body>
</html>
