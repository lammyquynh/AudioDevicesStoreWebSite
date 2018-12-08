<?php 
	session_start();
	include_once ('KetNoiCSDL.php');
	$id = $_GET['id'];//lay id san pham truyen qua
	$sql_update = 'update sanpham set luotxem = luotxem + 1 where idSP = '.$id;
	mysql_query($sql_update);
?>
<?php 
	if(isset($_GET['themgiohang']))
{
	$idSP = $_GET['themgiohang'];
	if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang']))
	{
		$count = count($_SESSION['giohang']);
		$flag = false;
		for($i = 0; $i < $count; $i++)
		{
			if($_SESSION['giohang'][$i]['idSP']==$idSP)
			{
				$_SESSION['giohang'][$i]['soluong']++;
				$flag = true;
				break;
			}
		}
		if($flag == false)
		{
			$_SESSION['giohang'][$count]['idSP'] = $idSP;
			$_SESSION['giohang'][$count]['soluong'] = 1;
		}
	}
	else
	{
		$_SESSION['giohang'] = array();
		$_SESSION['giohang'][0]['idSP'] = $idSP;
		$_SESSION['giohang'][0]['soluong'] = 1;
	}
	
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

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
.menu .khungthongtin .soluong
{
	color:#000;
	background-color:#999;
	font-size: 24px;
	font-family:Tahoma, Geneva, sans-serif;
	height:30px;
}
.menu .tieude
{
	border: 3px solid #FFF;
	width:1198px;
	height:100px;
	margin-top:15px;
	background-image:url(image/logo2.jpg);
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
    	<?php $sql_img = "select * from sanpham, loaisp where sanpham.idLoaiSP = loaisp.id AND idSP = ".$id;
					$sql_image = mysql_query($sql_img);
					$row = mysql_fetch_array($sql_image);
			  ?>
        <div class="tieude"></div>
    	<div class="khunganh"><img src="<?php echo $row['image_link']; ?>" width="350" height="450" /><br />
        	<a href="index.php"><input type="button" value="Tiếp tục mua" /></a>
        	<a href="index.php?themgiohang=<?php echo $row['idSP']; ?>"><input type="button" value="Thêm vào giỏ hàng" /></a>
        </div>
        <div class="khungthongtin">
        <table width="600" cellpadding="0" cellspacing="0">
        	<tr>
            	<td class="tensp" align="center"><?php echo $row['tenSP']; ?></td>
            </tr>
            <tr>
            	<td class="maso">Mã Số Sản Phẩm: <?php echo $row['idSP']; ?></td>
            </tr>
            <tr>
            	<td class="theloai">Thể Loại: <?php echo $row['tenloai']; ?></td>
            </tr>
            <tr>
            	<td class="dongia"><font color="#000000"> Đơn giá:</font> <?php echo $row['DonGia']; ?> &nbsp;VNĐ</td>
            </tr>
            <tr>
            	<td class="soluong">Số lượng: <?php echo $row['SLTon']; ?></td>
            </tr>
            <tr>
            	<td class="maso">Giới thiệu: <br /><font color="#FFFFFF" size="+1"><?php echo $row['GioiThieu']; ?></font></td>
            </tr>
            <tr>
            	<td class="soluong">Thông số:<br /><img src="image/30581548_1350419225101851_6991458660484382720_n.jpg" width="600" height="246" /></td>
            </tr>
        </table>

        </div>
        <div class="r">
         <div class="d0">
         	BQ Shop <br /><br />
            Mọi chi tiết xin liên hệ với chung tôi qua địa chỉ: 140 Lê Trọng Tấn, Quận Tân Phú, TP.HCM<br />
            SDT: 0933330632<br />
            Gmail: bqshop@gmail.com
         </div>
         <div class="d1">
         	<ul>Polisies</ul><br />
            <li>Cách để mua</li>
            <li>Vận chuyển</li>
            <li>Cách hoàn trả hàng</li>
            <li>Chính sách cá nhân</li>
         </div>
         <div class="d2">
         	<ul>Customer care</ul><br />
            <li>Trung tâm hỗ trợ</li>
         </div>
         <div class="d3">
         	<ul>Trung tâm hỗ trợ</ul><br />
            <li>Stay connected</li>
            <li>Facebook</li>
            <li>Zalo</li>
         </div>
         
     </div>
    </div>
    
</body>
</html>
