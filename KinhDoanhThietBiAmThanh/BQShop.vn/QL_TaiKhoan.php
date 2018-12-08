<?php include_once('KetNoiCSDL.php');?>
<?php
	session_start();
	if(isset($_GET['dangxuat']))
	{
		if($_GET['dangxuat'] == 1)
		{
			session_destroy();
			header("location:DangNhap.php");
		}
	}
	if(isset($_SESSION['dangnhap']))
	{
		if(isset($_SESSION['dangnhap'][0]['iduser']))
		{
			$sql_user = 'select * from admin where id = '.$_SESSION['dangnhap'][0]['iduser'];
			$row_user = mysql_query($sql_user);
			$row_tenuser = mysql_fetch_array($row_user);
			$tenuser = $row_tenuser['ten'];
		}
		if(isset($_REQUEST["id"]))
		{
			$idTL = $_REQUEST['id'];
		}
		
	}
	else
	{
		header("location:DangNhap.php");
	}
	if(isset($_GET['taotk']))
	{
		if($_GET['taotk']==1)
		{
			header("location:taotaikhoan.php");
		}
	}
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript">
	function thongbaoxoa()
	{
		return confirm (" Bạn có chắc chắn xóa hay không?");
	}
	function thongbaosua()
	{
		return confirm (" Bạn có chắc chắn sửa hay không?");
	}
	function thongbao()
	{
            return alert("Bạn không thể sử dụng chức năng này !");
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
table .khung0
{
	height:49px;
	width:1150px;
	margin-left:200px;
	background-color:#333;
	position:fixed;
	float:left;
}
table .khung03
{
	border:1px solid #000;
	height:40px;
	width:1150px;
	margin-left:200px;
	margin-top:48px;
	background-color:#666;
	position:fixed;
	
}
.khung03 .khung03_01
{
	border:1px solid none;
	width:850px;
	float:left;
	margin-left:40px;
	margin-top:10px;
	
}
.khung03 .khung03_01 a
{
	text-decoration:none;
	margin-top:10px;
	color:#FFF;
}

button 
{
    color:#FFF;
    background-color:#999;
    font-size: 14px;
    font-weight: bold;
    height: 30px;
    width: 100px;
	margin-top:10px;
	margin-left:20px;
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
	width:700px;
	float:left;
	margin-top:10px;
	margin-left:10px;
}
.khung0 .khung02
{
	border:1px solid none;
	width:350px;
	margin-left:800px;
	color:#FFF;
	font-weight:bold;
	margin-top:-35px;
	float:left;
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
     <li><a href="ThongKe.php">Thống kê</a></li>
     <li><a href="QL_TaiKhoan.php">QL_Tài khoản</a></li>
     <li><a href="index.php">Trang chủ</a></li>
    </ul>
   </td>
   <td width="1155">
   <div class="khung0">
       <div class="khung01">
                    <img src="icon/danhsach.png" width="18" height="18" /><a href="#"><b>Danh sách tài khoản</b></a>
                    <img src="icon/tieubieu.png" width="18" height="18" /><a href="QL_TaiKhoan.php?taotk=<?php 
					echo $row_tenuser['quyen'];?>"
                     <?php 
					 	if($row_tenuser['quyen']==0)
						{
							echo 'onclick="return thongbao()"';
							
						}
					 ?>
                    ><b>Tạo tài khoản</b></a>
        
       </div>
       <div class="khung02">Chào bạn! <?php if(isset($tenuser)) {echo $tenuser; }?> 
       			<a href="admin.php?dangxuat=1"><button>Đăng xuất</button></a>
       </div>
   </div>
   <div class="khung2">
        <div class="tieude">Danh sách tài khoản</div>
        <div class="ngay">
        <table>
        	<tr>
            	<td>ID</td>
                <td>Tài khoản</td>
                <td>Tên</td>
                <td>Địa chỉ</td>
                <td>SDT</td>
                <td>Email</td>
                <td>Ngày đăng ký</td>
            </tr>
            <?php
				
				$sql_admin = mysql_query('select * from admin');
				while($row = mysql_fetch_array($sql_admin))
				{
			 ?>
             	<tr>
                	<td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['taikhoan']; ?></td>
                    <td><?php echo $row['ten']; ?></td>
                    <td><?php echo $row['DiaChi']; ?></td>
                    <td><?php echo $row['DienThoai']; ?></td>
                    <td><?php echo $row['Email']; ?></td>
                    <?php
						$nam = $row['NgayDangKy']/10000;
						$thang = ($row['NgayDangKy']%10000)/100;
						$ngay = ($row['NgayDangKy']%10000)%100;
					 ?>
                    <td><?php echo (int)$ngay.'/'.(int)$thang.'/'.(int)$nam; ?></td>
                    <td><a href=<?php 
					 	if($row_tenuser['quyen']==0)
						{
							echo '"QL_TaiKhoan.php" '; 
							echo 'onclick="return thongbao()"';
						}
						else
						{
							echo '"suataikhoan.php?id='.$row['id'].'"';
						}
						
					 ?>
                     >Sửa</a>
                    </td>
                    <td><a href=<?php 
					 	if($row_tenuser['quyen']==0)
						{
							echo '"QL_TaiKhoan.php" '; 
							echo 'onclick="return thongbao()"';
						}
						else
						{
							
							echo '"xoataikhoan.php?id='.$row['id'].'"';
							echo 'onclick="return thongbaoxoa()"';
						}
						
					 ?>
                     >Xoá</a></td>
                </tr>
             <?php }?>
        </table>
    	</div>
   </div>
   </td>
  </tr>
</table>
</body>
</html>
