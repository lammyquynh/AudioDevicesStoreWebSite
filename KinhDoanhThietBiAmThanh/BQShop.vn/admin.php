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
			$tenuser = $row_tenuser['ten'];//xuat tên user
		}
		if(isset($_REQUEST["id"]))
		{
			$idTL = $_REQUEST['id'];
		}
		
	}
	else
	{
		header("location:DangNhap.php");//khi minh chua dang nhap tai khoan tu dong chuyen sang trang dang nhap
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
            return confirm("Bạn có chắc muốn xóa không?");
	}
	function thongbao_xoa()
	{
            return confirm("Bạn có chắc muốn xóa không?");
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
.khung1
{
	width:200px;
	height:500px;
	float:left;
	margin-top:150px;
	margin-left:220px;
	
}
.khung2
{
	width:900px;
	height:600px;
	float:left;
	margin-left:420px;
	margin-top:-500px;
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
     <li><a href="ThongKe.php">Thống kê</a></li>
     <li><a href="QL_TaiKhoan.php">QL_Tài khoản</a></li>
     <li><a href="TinTuc.php">QL_Tin Tức</a></li>
     <li><a href="index.php">Trang chủ</a></li>
    </ul>
   </td>
   <td width="1155">
   <div class="khung0">
       <div class="khung01">
                    <img src="icon/danhsach.png" width="18" height="18" /><a href="#"><b>Danh sách sản phẩm</b></a>
                    <img src="icon/tieubieu.png" width="18" height="18" /><a href="#"><b>Sản phẩm mới</b></a>
                    <img src="icon/new.png" width="18" height="18" /><a href="#"><b>Sản phẩm tiêu biểu</b></a>
                    <img src="icon/hetsl.png" width="18" height="18" /><a href="#"><b>Sản phẩm xắp hết</b></a>
                    
       </div>
       <div class="khung02">Chào bạn! <?php if(isset($tenuser)) {echo $tenuser; }?> <!-- hi?n th? tên dang nh?p-->
       			<a href="admin.php?dangxuat=1"><button>Ðăng xuất</button></a>
       </div>
   </div>
   <div class="khung03">
   		<div class="khung03_01">
        	<img src="icon/add.png" width="18" height="18" /><a href="ThemSP.php"><b>Thêm sản phẩm mới</b></a>
        </div>
   </div>
   <div class="khung1">
   	<table>
    	<tr>
        	<td>
            	<div class="menutruot">
              			<a href="admin.php?id=0"><dt>Tổng cộng</dt></a>
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
                            <li><a href="admin.php?id=<?php echo $row_lsp["id"]; ?>"><?php echo $row_lsp['tenloai']; ?></a></li>
                            <?php } ?>
                        </ul>
                        </dd>
                        
                        </dl>
                        
                        <?php } ?>
                </div>
            </td>
        </tr>
    </table>
    </div>
    <div class="khung2">
        
    	<table width="100%" height="100%">
        	<tr bgcolor="#CCCCCC" align="center" height="50">
            	<td>Ảnh Sản Phẩm</td>
            	<td>Tên Sản Phẩm</td>
                <td>Loại Sản Phẩm</td>
                <td>Ðon giá</td>
                <td>Thời Gian Nhập</td>
                <td>Số Lượng Tồn</td>
                <td>Lượt xem</td>
                <td>Đường dẫn file</td>
                <td>Sửa</td>
                <td>Xoá</td>
            </tr>
        	<?php 
					if(isset($idTL))
					{ 
						if($idTL == 0)
						{
							$sql = 'select * from sanpham, loaisp where sanpham.idLoaiSP = loaisp.id';
						}
						else
						{$sql = 'select * from sanpham, loaisp where sanpham.idLoaiSP = loaisp.id AND idLoaiSP ='.$idTL;}
					}
					else
					{ $sql = 'select * from sanpham, loaisp where sanpham.idLoaiSP = loaisp.id AND idLoaiSP =1';}
					$sp = mysql_query($sql);
					while($row = mysql_fetch_array($sp))
					{
			  ?>
        	<tr bgcolor="#FFFFFF" align="center">
            	<td><img src="<?php echo $row['image_link']; ?>" width="100" height="100" /></td>
            	<td><?php echo $row['tenSP']; ?></td>
                <td><?php echo $row['tenloai']; ?></td>
                <td><?php echo $row['DonGia']; ?></td>
                <td><?php echo $row['timeNhap']; ?></td>
                <td><?php echo $row['SLTon']; ?></td>
                <td><?php echo $row['luotxem']; ?></td>
                <td><?php echo $row['image_link']; ?></td>
                <td><a href="Sua_SP.php?id=<?php echo $row["idSP"]; ?>"><img src="icon/Sua.png" width="20" height="20" /></a></td>
                <td><a href="Xoa_admin.php?id=<?php echo $row["idSP"]; ?>" onclick="return thongbao_xoa()"><img src="icon/Xoa.PNG" width="20" height="20"/></a></td>
            </tr>
            <?php }?>
        </table>
    </div>
   </td>
  </tr>
</table>
</body>
</html>
