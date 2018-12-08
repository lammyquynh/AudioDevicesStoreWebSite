<?php include_once('KetNoiCSDL.php');?>
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
	width:600px;
	height:50px;
	font-size:36px;
	color:#00F;
	font-weight:bold;
	text-align:center;
	margin-left:150px;
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
.khung2 .ngay table
{
	width:800px;
	height:150px;
	font-weight:bold;
	text-align:center;
	margin-left:100px;
	float:left;
	
}
.khung2 .thang table
{
	width:800px;
	height:150px;
	font-weight:bold;
	text-align:center;
	margin-left:100px;
	float:left;
	margin-top:20px;
	
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
        <div class="tieude">Thống kê doanh thu</div>
        <div class="ngay">
        <table>
        	<tr>
            	<td colspan="2" bgcolor="#FFFFCC"><font size="+2" color="#FF0000">TỔNG DOANH THU TRONG NGÀY</font></td>
            </tr>
            <tr>
            	<?php 
				$soluong = 0;
				$tongtien = 0;
				$date = getdate();
				$sql_thongke = 'select * from dathang, hoadon where dathang.idDH = hoadon.idDH AND TrangThai = 1';
				$sql_dh = mysql_query($sql_thongke);
				while($row = mysql_fetch_array($sql_dh))
				{
					$ngay = (int)$row['timeGD']%100;
					if($date['mday'] == $ngay)
					{
						$soluong = $soluong + $row['soluongSP'];
						$tongtien = $tongtien + $row['TongTien'];
					}
				}
		 		?>
            	<td>Tổng số lượng sản phẩm:</td>
                <td bgcolor="#FFFFCC"><?php echo $soluong; ?></td>
            </tr>
            <tr>
            	 <td>Tổng thành tiền:</td>
                 <td bgcolor="#FFFFCC"><?php echo $tongtien.' VNĐ'; ?></td>
            </tr>
           
        </table>
    	</div>
        <div class="thang">
        	<table>
        	<tr>
            	<td colspan="2" bgcolor="#FFFFCC"><font size="+2" color="#FF0000">TỔNG DOANH THU TRONG THÁNG</font></td>
            </tr>
            <tr>
            	<?php 
				$soluong_thang = 0;
				$tongtien_thang = 0;
				$date_thang = getdate();
				$sql_thongke_thang = 'select * from dathang, hoadon where dathang.idDH = hoadon.idDH AND TrangThai = 1';
				$sql_dh_thang = mysql_query($sql_thongke_thang);
				while($row_thang = mysql_fetch_array($sql_dh_thang))
				{
					$thang = (int)($row_thang['timeGD']%10000)/100;
					if((int)$date_thang['mon'] == (int)$thang)
					{
						$soluong_thang = $soluong_thang + $row_thang['soluongSP'];
						$tongtien_thang = $tongtien_thang + $row_thang['TongTien'];
					}
				}
		 		?>
            	<td>Tổng số lượng sản phẩm:</td>
                <td bgcolor="#FFFFCC"><?php echo $soluong_thang;  ?></td>
            </tr>
            <tr>
            	 <td>Tổng thành tiền:</td>
                 <td bgcolor="#FFFFCC"><?php echo $tongtien_thang.' VNĐ';  ?></td>
            </tr>
           
        </table>
        </div>
    </div>
   </td>
  </tr>
</table>
</body>
</html>
