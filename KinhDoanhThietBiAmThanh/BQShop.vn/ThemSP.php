﻿<?php include_once('KetNoiCSDL.php');?>
<?php
	
	if(isset($_POST['btnthem']))
	{
		if(empty($_POST['txttensp'])||empty($_POST['loaisp'])||empty($_POST['txtdongia'])||empty($_POST['txtsoluong']))
		{
			$thongbao = "Bạn phải nhập đầy đủ thông tin sản phẩm";
		}
		else
		{
			$ten = $_POST['txttensp'];
			$loai = $_POST['loaisp'];
			$dongia = $_POST['txtdongia'];
			$soluong = $_POST['txtsoluong'];
			if($_FILES['file']['name'] != NULL)
			{
				if($_FILES['file']['type'] == "image/jpeg" || $_FILES['file']['type'] == "image/png" || $_FILES['file']['type'] == "image/gif")
				{
					$path = "image/"; // file sẽ lưu vào thư mục image
                	$tmp_name = $_FILES['file']['tmp_name'];
               	 	$name = $_FILES['file']['name'];
                	// Upload file
                	move_uploaded_file($tmp_name,$path.$name);
				}
			
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
			//them san pham
				$sql_them = "Insert into sanpham (tenSP, idLoaiSP, DonGia, SLTon, image_link, timeNhap) values ('".$ten."', '".$loai."', '".$dongia."', '".$soluong."', '".$path.$name."', '".$intdate."')";
				mysql_query($sql_them);
				$thongbao = "Thêm sản phẩm thành công";
			}
			else
			{
				$thongbao = 'Bạn hãy chọn hình ảnh minh hoạ';
			}
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
	background-color:#FFC;
	
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
 button {
    color:#00F;
    background-color:#FFC;
    font-size: 14px;
    font-weight: bold;
    height: 30px;
    width: 160px;
}
 
button:hover {
    color: Navy;
    background-color: Silver;
    cursor: pointer;
}

.khung1 .x
{
	width:500px;
	height:300px;
	margin-top:30px;
	margin-left:50px;
	border:2px solid #036;
	border-radius: 10px;
}
.khung1 input
{
	width:300px;
	height:25px;
	border-radius:5px;
}
.khung1
{
	width:600px;
	height:450px;
	float:left;
	margin-top: 50px;
	margin-left:250px;
	background:#FFF;
	border-radius: 10px;
	font-weight:bold;
}
.khung1 .file input
{
	color:#00F;
    height: 30px;
    width: 350px;
	margin-top:10px;
	margin-left:10px;
	font-weight:bold;
}
button {
    color:#00F;
    background-color:#FFC;
    font-size: 14px;
    font-weight: bold;
    height: 30px;
    width: 160px;
	margin-top:10px;
	margin-left:200px;
}
 
button:hover {
    color: Navy;
    background-color: Silver;
    cursor: pointer;
}
table .khung0
{
	height:49px;
	width:1150px;
	margin-left:200px;
	background-color:#333;
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
.khung1 .them
{
	margin-left:200px;
	margin-top:10px;
}

.khung1 .them input
{
	 color:#00F;
    background-color:#FFC;
    font-size: 14px;
    font-weight: bold;
    height: 30px;
    width: 160px;
}
.khung1 .them input:hover {
    color: Navy;
    background-color: Silver;
    cursor: pointer;
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
     <li><a href="Quantri_Loai.php">Đơn đặt hàng</a></li>
     <li><a href="KhachHang.php">Khách Hàng</a></li>
     <li><a href="ThongKe.php">Thống kê</a></li>
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
   	<div class="khung1">
    	<p align="center"><font size="+3" color="#0000FF">Nhập thông tin sản phẩm</font></p><br />
        <p align="center"><font size="+2" color="#FF0000"><?php if(isset($thongbao)) echo $thongbao; ?></font></p>
    	<table class="x" cellpadding="0" cellspacing="0">
        	 <form method="post" enctype="multipart/form-data">
        	<tr>
            	<td align="right" bgcolor="#FFFFCC">Tên sản phẩm:</td>
                <td align="left"><input name="txttensp" type="text" /></td>
            </tr>
            <tr>
            	<td align="right" bgcolor="#FFFFCC">Loại sản phẩm:</td>
                <td  align="left">
               
                	<select name="loaisp">
                        	<?php $sql_theloai = "select *from loaisp ORDER BY id ASC";
									$sql_tl = mysql_query($sql_theloai);
									while($row_tl = mysql_fetch_array($sql_tl))
									{
							 ?>
                            <option value="<?php echo $row_tl['id']; ?>">
							<?php echo $row_tl['tenloai'];?></option>
							<?php } ?>
                        </select>
    
                </td>
            </tr>
            <tr>
            	<td align="right" bgcolor="#FFFFCC">Đơn giá:</td>
                <td align="left"><input name="txtdongia" type="text" /></td>
            </tr>
            <tr>
            	<td align="right" bgcolor="#FFFFCC">Số lượng</td>
                <td align="left"><input name="txtsoluong" type="text" /></td>
            </tr>
            <tr>
            	<td align="right" bgcolor="#FFFFCC">Đường dẫn hình ành:</td>
                <td align="left">

                	<div class="file"><input type="file" name="file"/></div>

                </td>
            </tr>
        </table>
        <div class="them"><input type="submit" value="Thêm sản phẩm" name="btnthem" /></div>
         </form>
    </div>
   </td>
  </tr>
</table>
</body>
</html>
