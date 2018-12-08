<?php 
session_start();
include('KetNoiCSDL.php');
?>
<?php
//ph?n quang tr?ng !!!!!!!!!!!!!!!!!!!!!!!!!!
if(isset($_GET['themgiohang']))
{
	
	$idSP = $_GET['themgiohang'];
	$sql_soluong = mysql_query('select * from sanpham where idSP = '.$idSP);
	$row_soluong = mysql_fetch_array($sql_soluong);
	$soluong = $row_soluong['SLTon'];//
	if($soluong > 0)
	{
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
}
	if(isset($_POST['btntim']))
	{
		if(!empty($_POST['timkiem']))
		{
			$tensp = $_POST['timkiem'];
			$timsp = mysql_query('select idSP, tenSP from sanpham ');
			while($row_tim = mysql_fetch_array($timsp))
			{
				if($row_tim['tenSP']== $tensp)
					$id_tim = $row_tim['idSP'];
			}
			if(isset($id_tim))
			{
				header('location:ShowTTSP.php?id='.$id_tim);
			}
			else
			{
				$kqtim = 0;
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
	function thongbao_hethang()
	{
            return alert("Sàn phẩm đã hết số lượng");
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
	body .menu{
			width: 1192px;
			height:3000px;
			background-color: #FCFCFC;
			 border: 1px  solid none;
			 margin:-15px 150px 0px 150px ;
			 padding:0px;
		
	}
	body .menu .r
	{
		background-color:#999;
		width: 1190px;
		height:190px;
		float:left;
		margin-top:220px;
	}
	body .menu .r .d0
	{
		color:#FFF;
		float:left;
		width:250px;
		height:100px;
		margin-left:50px;
		margin-top:20px;
	}
	body .menu .r .d1
	{
		color:#FFF;
		float:left;
		width:250px;
		height:100px;
		margin-left:40px;
		margin-top:14px;
	}
	body .menu .r .d2
	{
		color:#FFF;
		float:left;
		width:250px;
		height:100px;
		margin-left:10px;
		margin-top:16px;
	}
	body .menu .r .d3
	{
		color:#FFF;
		float:left;
		width:250px;
		height:100px;
		margin-left:10px;
		margin-top:16px;
	}
	body .menu .f
	{
		
		margin-bottom:10px;
		margin-top:-40px;
		background-color:#f69;
		width:880px;
		margin-left:-40px;
					
	}	
		.m1 {
			height:600px;
			border:1px solid #FFF;
			margin-top:-14px;
			padding:0px; 
			width: 1064px;	
		}	
	.m1 p{
			border:1px solid #6FF;
			background:#6FF;
			height: 25px;
			padding-top:10px;
			margin-top:-2px;
	}
	
	.m1 p marquee{
		margin-top:0px;
		background: #6FF;
		color:#F00;
		padding-bottom:10px;
			
	}
	 .m1 ul{
			border: 1px solid #000;
			margin-top:2px;
			height: 355px;
			background: #006;
			width:300px;
		
	}
	.m1 ul li{
		list-style:none;
		padding:17px 50px;
		border-bottom: 1px solid #FFF;
		position: relative;
	}
	
	.m1 ul .m11{
		
	
		margin-left:10px;
		margin-top:-3px;
	}
	
	.m1 ul .m15{
		border-right: none;
			margin-top: 2px;
			margin-left:30px;
			color:#FFF;	
	}

	.m1 ul li a{
		color: #FFF;
		text-decoration:none;
	}
	.m1 ul .m12 ul{
		display:none;
		position:absolute;
			height: 20px;
			top: 51px;
			left:0px;	
	}
	.m1 ul .m12:hover ul{
		display: block;
		background: #009;		
		height: 150px;
		width: 300px;
		text-indent: 40px;	
	}
	.m1 ul .m12 ul li{
		border-top: 0.5px solid #FFF;	
		border-right: none;
		width:126px;
	}
	
	.m1 ul .m13 ul{
		display:none;
		position:absolute;
			height: 20px;
			top:51px;
			left:0px;	
	}
	.m1 ul .m13:hover ul{
		display: block;
		background: #009;		
		height:100px;
		width: 236px;
		text-indent: 40px;	
	}
	.m1 ul .m13 ul li{
		border-top: 0.5px solid #FFF;	
		border-right: none;
		width:136px;
	}
	.m1 ul .m13 ul li a{
			color: #F6C;	
	}
	.m1 ul .m13 ul li:hover a
	{
			color: #CF0;	
	}
	
	.m1 ul .m12 ul li a{
			color: #F6C;	
	}
	.m1 ul .m12 ul li:hover a
	{
			color: #CF0;	
	}

	.m1 ul li:hover a{
		
		color: #3F0;	
	}
	
	.menu .ma1 ul {
		foat:left;
		width:1064px;
		margin:0x;
		padding:0p;
		list-style:none;
	}
		
	.m16{
		float: left;
		border:1px solid  #FFF;
		width:1050px;
		height:700px;
		margin-top:5px;
		padding:0px;	
	}
	.m16 a{
		text-decoration:none;
		color: #609;
		margin-left:36px;	
	}
	
	#page{
	
		margin-left: 150px;
		margin-top:100px;

	}
	 .m16 .m161{	 
		
		 width:1050 px;
		 height:1270px;
		 border:1px solid none;
		 margin-left:25px;
	 }
	 .m16 .m161 .m1611 a img{
		 float:inherit;
		 padding-left:33px;
		 padding-top:20px;
	
	 }
	  .m16 .m161 .m1611 .m16111
	  {
		  padding-top:90px;
	  }
	    .m16 .m161 .m1611 .m16112
	  {
		  padding-top:90px;
	  }
		.m16 .u p
		{
			
			width:1066px;
			height:20px;
			margin-top:10px;
			float:left;
			background: none;
			font-size:25px;
			margin-left:38px;
			border:none;	
		}
	.m16 .m162{
		float:left;
		width: 980px;
		height: 500px;
		border:1px solid  none;
		margin-left:32px;
	}
	.m16 .i{
		float:left;
		width: 1063px;
		height:500px;
		border:1px solid #FFF;
	}
	.m16 .i  img{
		width: 300px;
		height: 400px;
		background-size:cover;
		border: 1px solid none;
		margin-left:60px;
		
	}
	.m16 .i p{
		margin-left: 30px;
		background:#FFF;
		border:none;
		margin-top:10px;
	}
	.m16 .box_clone{
		
		width:700px;
		height:400px;
		float:right;
	
		
	
	}
.i .demo-2 {
    position:relative;
    width:299px;
    height:300px;
    overflow:hidden;
    float:left;
}


.i .demo-2 h2 {
	color:#fff;
	 position:relative
	 left:-5px;
    top:20px;
	 padding:10px;
    font-size:20px;
    line-height:24px;
    margin:0 px;
	
   font-family:'Times New Roman';
}
.i .effect img {
    position:absolute;
    left: -1px;
   	bottom: -243px;
 	cursor:pointer;
    margin: 0px;
    -webkit-transition:bottom .3s ease-in-out;
    -moz-transition:bottom .3s ease-in-out;
    -o-transition:bottom .3s ease-in-out;
    transition:bottom .3s ease-in-out
}
.i .effect img.top:hover {
    bottom:-350px;
    padding-top:100px
}
.i h2.zero,p.zero {
    margin:5px;
    padding:0
}
.i .demo-2
{
	border:1px solid #FFF;
	width:300px;
	height:370px;
	margin:8px 0px 0px 30px;
}
.m16 .a img{
 width: 147px;
 height: 184px;
 background-size:cover;
 margin:0px;
 padding-left:3px;	
}

 .menutruot
{
	border: 1px solid none;
	width: 150px;
	height:800px;
	float:left;
	color:#FFF;
	background: #000;
	
	
	
}
.menutruot a
{
	text-decoration:none;
	color: #FFF;
	text-align:center;
}
*{margin:0px;padding:0px;}

.acctive{
	background: #F00;
}
dl{
	width:150px;
	
}
dt{
	
	border-bottom:1px solid #FFFFFF;
	font-size:17px;
	padding:15px 20px;
	position:relative
}
dt a{
	text-decoration:none;
}
dd a{
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
	background:#FF4848;
	
		
}

ul li:last-child
{
	border-bottom: none;	
}

.rieng1
{
	width:1100px;
	height:600px;
	margin-left:50px;
	margin-top:10px;
}
.rieng2{
	width:1100px;
	height:600px;
	margin-left:50px;
	float:left;
	margin-top:180px;
}


.rieng3
{
	width:1100px;
	height:600px;
	margin-left:50px;
	float:left;
	margin-top:180px;
}
fieldset
{
	width:1100px;
	border-radius: 8px;
}


.a1
{
	background:#FFF;
	width: 195px;
	height: 280px;
	float:left;
	padding-bottom:30px;
	padding-right:0px;
	margin-right:0px;
	margin-left:20px;
	margin-top:20px;
	margin-bottom:20px;
	border-radius:10px;
}
.a1 img
{
	width: 170px;
	height: 190px;
	margin-top:5px;
	margin-left:15px;
}
.a1 .b1 img{
		width: 40px;
		height:40px;
		margin-top:-200px;
		margin-left:160px;	
		
	}
fieldset legend
{
	font-size:36px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	color: #F00;
}
.a1 h1
{
	font-size:13px;
	
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	text-align: center;
	
}

.a1 h2
{
		font-size:20px;
		margin-top:5px;
		text-indent:15px;
		margin-left:20px;
}

.a1 .h3
{
	
	
	width: 70px;
	height: 30px;
	margin-top:10px;
	margin-left:60px;

}
.a1 .h3 img
{
	width: 20px;
	height:20px;
	margin-left:0px;	
}

.menuchon
{
	
	width:1190px;
	height:40px;

}
.menuchon .giohang
{
	width:570px;
	height:40px;
	background-color: #FFC;
	color:#000;
	border-radius: 8px;
	margin-left:540px;
	font-weight:bold;
}

.menuchon input 
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

.menuchon input:hover {
    color: Navy;
    background-color: Silver;
    cursor: pointer;
}
.menuchon .xuattt
{
	color:#F00;
}
.rieng1 .chung
{
	float:left;
}
.rieng1 .phantrang
{
	width:1100px;
	text-align:center;
	font-weight:bold;
	font-size: 22px;
	color:#F00;
}
.rieng1 .phantrang a
{
	color:#F00;
	text-decoration:none;
}
.rieng1 .phantrang span
{
	color:#00F;
}
.rieng2 .chung
{
	float:left;
}
.rieng2 .phantrang2
{
	width:1100px;
	text-align:center;
	font-weight:bold;
	font-size: 22px;
	color:#F00;
}
.rieng2 .phantrang2 a
{
	color:#F00;
	text-decoration:none;
}
.rieng2 .phantrang2 span
{
	color:#00F;
}
.rieng3 .chung
{
	float:left;
}
.rieng3 .phantrang3
{
	width:1100px;
	text-align:center;
	font-weight:bold;
	font-size: 22px;
	color:#F00;
}
.rieng3 .phantrang3 a
{
	color:#F00;
	text-decoration:none;
}
.rieng3 .phantrang3 span
{
	color:#00F;
}
.khungthongtin
{
	width:1340px;
	height:80px;
	
	position: fixed;
	margin-top:-100px;
	background: #FCFCFC;
	z-index:10;
	
	
}
.khungthongtin .logo
{
	
	width:500px;
	height:80px;
	float:left;

}
.khungthongtin .timkiem

{
	background-color:#FFF;
	border-radius:8px;
	width:400px;
	height:40px;
	margin-top: -50px;
	margin-left:450px;
	font-weight:bold;
	float:left;
	
}
.khungthongtin .timkiem input
{
	background:#FFF;
	color:#000;
	height:30px;
	width:200px;
	border:1px solid #F00;
	
}
.khungthongtin .timkiem button
{
	width:80px;
	height:35px;
	margin-left:20px;
	background:#F00;
	color:#FFF;
	border-radius:8px;
	font-weight:bold;
	font-size: 18px;
}
.khungthongtin .thongtinll
{
	width:530px;
	height:80px;
	margin-left:850px;
}
</style>

<body>
	<div class="khungthongtin">
    	<div class="logo"><img src="image/hinhloa/Karaoke15.jpg"" width="400" height="80" /></div>
        <div class="timkiem">
    	<table>
        	<tr>
            <form method="post">
            	<td>Tìm kiếm:</td>
                <td><input type="text" name="timkiem" /></td>
                <td><button name="btntim">Tìm</button></td>
             </form>
            </tr>
        </table>
    	</div>
        <div class="thongtinll">
            <img src="image/thongtin.png" width="530" height="80" />
        </div>
    </div>
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
        <img src="image\anhGif.gif" width="150" height="320" />
    </div>
<div class="menu">
	<div id="page" >
      
    <div class="f" align="center" ><font color="#FFFFFF"> CHÀO MỪNG BẠN ĐẾN VỚI THẾ GIỚI ÂM THANH <a href="#" ><font color="#FFFFFF">Shop now</font></a></font></div>
  	<h1><font color="#000099">BQ SHOP</font></h1>
    <div id="content">
      <div class="border_box">
        <div class=" box_skitter box_skitter_large">
          <ul>
          <?php
		  	$sql_pannel = mysql_query('select * from tintuc order by idtin DESC Limit 0, 4');
			while($row_panel = mysql_fetch_array($sql_pannel))
			{
		   ?>
            <li><img src="<?php echo $row_panel['image_minhhoa']; ?>" class="circlesInside"/><div class="label_text">
            <p><?php echo $row_panel['tieude']; ?></p></div></li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div> 
  	<div class="menuchon">
 
    	<table class="giohang">
        	<tr>
            	<td>Giỏ hàng:</td>
                <td class="xuattt">
                	<?php
						 if(isset($_SESSION["giohang"]))
						 {	
							$dem=0;
							for($i=0;$i<count($_SESSION["giohang"]);$i++)
							{
								if(isset( $_SESSION['giohang'][$i]['idSP']))
								{
									$dem++;
									
								}
							}
							echo $dem.' (Sản phẩm)';
						 }
						 else echo "0 (Sản phẩm)";
					 ?>
                </td>
                <td>Tổng tiền:</td>
                <td class="xuattt">
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
									$tongtien = $tongtien + ($row["DonGia"]* $_SESSION["giohang"][$i]["soluong"]);
								}
							}
							echo $tongtien.' VNÐ';
						}
						else
						{
							echo "0 VNÐ";	
						}
					?>
                </td>
                <td colspan="4"><a href="ChiTietGioHang.php"><input type="button" value="Chi tiết giỏ hàng" /></a></td>
            </tr>
        </table>
    </div>
	 <div class="rieng1"><!-- V?a xu?t s?n ph?m v?a t?o phân trang -->
     <fieldset>
     	<legend align="center">Khuyến mãi đặc biệt</legend>
        <div class="chung">
    	<?php 
			//tim tong records
			$row_records = mysql_query('select * from sanpham where idLoaiSP = 1 OR idLoaiSP = 2  ORDER BY idSP DESC');
			$total_records = mysql_num_rows($row_records);
			//tim limt va current_page
			$current_page = isset($_GET['page'])?$_GET['page']:1;
			$limit = 10;
			//tinh total_page va star
			$total_page = ceil($total_records / $limit);//tong so trang
			//gioi han current_page trong khoang 1 den total_page
			if($current_page > $total_page)
			{
				$current_page = $total_page;
			}
			else if($current_page < 1)
			{
				$current_page = 1;
			}
			//tim star
			$start = ($current_page - 1) * $limit;
			//show thong tin
				$sql = mysql_query('select * from sanpham where idLoaiSP = 1 OR idLoaiSP = 2  ORDER BY idSP DESC Limit '.$start.', '.$limit);
                while($row = mysql_fetch_array($sql))//
                {
         ?>
                                <div class="a1">
                                    <a href="ShowTTSP.php?id=<?php echo $row["idSP"];?>"><img src="<?php echo $row['image_link']; ?>"/></a>
                                    <div class="b1"><?php
										if($row['SLTon']<= 0)
										{
											echo '<img src="icon/hethang.png"/>';
										}
										else
										{
											echo '<img src="icon/new1.png"/>';
										}
									 ?></div>
                                    <h1><?php echo $row['tenSP']; ?></h1>
                                    <h2>Giá: <font color="#FF0000"><?php echo $row['DonGia']; ?></font> </h2>
                                    <a href="index.php?themgiohang=<?php echo $row["idSP"];?>" 
                                    <?php
									 if($row['SLTon'] <= 0)
									 {
										 echo 'onclick="return thongbao_hethang()"';
									 }
									 ?>><button  class="h3"><img src="Untitled-2.jpg"  /></button></a>
                                 
                                </div>
        <?php }?>
        </div>
        <div class="phantrang" >
        	<?php
				if($current_page > 1 && $total_page > 1)
					echo '<a href="index.php?page='.($current_page-1).'">Prev</a>-';
				//lap khoang giua
				for($i = 1; $i <= $total_page; $i++)
				{
					if($i==$current_page)
					{
						echo '<span>'.$i.'</span>-';
					}
					else
					{
						echo '<a href="index.php?page='.$i.'">'.$i.'</a>-';
					}
				}
				if($current_page < $total_page && $total_page > 1)
				{
					echo  '<a href="index.php?page='.($current_page+1).'">Next</a>';
				}
			 ?>
        </div>
        </fieldset>
    </div>
        <div class="rieng2">
        <fieldset>
     	<legend align="center">AMPLY & ĐẦU ĐĨA</legend>
        <div class="chung">
    	<?php 
			//tim tong records
			$row_records = mysql_query('select * from sanpham where idLoaiSP = 26 ORDER BY idSP DESC');
			$total_records = mysql_num_rows($row_records);
			//tim limt va current_page
			$current_page = isset($_GET['page2'])?$_GET['page2']:1;
			$limit = 10;
			//tinh total_page va star
			$total_page = ceil($total_records / $limit);//tong so trang
			//gioi han current_page trong khoang 1 den total_page
			if($current_page > $total_page)
			{
				$current_page = $total_page;
			}
			else if($current_page < 1)
			{
				$current_page = 1;
			}
			//tim star
			$start = ($current_page - 1) * $limit;
			//show thong tin
				$sql = mysql_query('select * from sanpham where idLoaiSP = 26 ORDER BY idSP DESC Limit '.$start.', '.$limit);
                while($row = mysql_fetch_array($sql))
                {
         ?>
                                 <div class="a1">
                                    <a href="ShowTTSP.php?id=<?php echo $row["idSP"];?>"><img src="<?php echo $row['image_link']; ?>"/></a>
                                    <div class="b1"><?php
										if($row['SLTon']<= 0)
										{
											echo '<img src="icon/hethang.png"/>';
										}
										else
										{
											echo '<img src="icon/new1.png"/>';
										}
									 ?></div>
                                    <h1><?php echo $row['tenSP']; ?></h1>
                                    <h2>Giá: <font color="#FF0000"><?php echo $row['DonGia']; ?></font> </h2>
                                    <a href="index.php?themgiohang=<?php echo $row["idSP"];?>" 
                                    <?php
									 if($row['SLTon'] <= 0)
									 {
										 echo 'onclick="return thongbao_hethang()"';
									 }
									 ?>><button  class="h3"><img src="Untitled-2.jpg"  /></button></a>
                                 
                                </div>
        <?php }?>
        </div>
        <div class="phantrang2" >
        	<?php
				if($current_page > 1 && $total_page > 1)
					echo '<a href="index.php?page2='.($current_page-1).'">Prev</a>-';
				//lap khoang giua
				for($i = 1; $i <= $total_page; $i++)
				{
					if($i==$current_page)
					{
						echo '<span>'.$i.'</span>-';
					}
					else
					{
						echo '<a href="index.php?page2='.$i.'">'.$i.'</a>-';
					}
				}
				if($current_page < $total_page && $total_page > 1)
				{
					echo  '<a href="index.php?page2='.($current_page+1).'">Next</a>';
				}
			 ?>
        </div>
    </fieldset>
        </div>
         <div class="rieng3">
         <fieldset>
     	<legend align="center">BỘ LOA ĐẲNG CẤP</legend>
        <div class="chung">
    	<?php 
			//tim tong records
			$row_records = mysql_query('select * from sanpham where idLoaiSP = 28 ORDER BY idSP DESC');
			$total_records = mysql_num_rows($row_records);
			//tim limt va current_page
			$current_page = isset($_GET['page3'])?$_GET['page3']:1;
			$limit = 10;
			//tinh total_page va star
			$total_page = ceil($total_records / $limit);//tong so trang
			//gioi han current_page trong khoang 1 den total_page
			if($current_page > $total_page)
			{
				$current_page = $total_page;
			}
			else if($current_page < 1)
			{
				$current_page = 1;
			}
			//tim star
			$start = ($current_page - 1) * $limit;
			//show thong tin
				$sql = mysql_query('select * from sanpham where idLoaiSP = 28 ORDER BY idSP DESC Limit '.$start.', '.$limit);
                while($row = mysql_fetch_array($sql))
                {
         ?>
                                <div class="a1">
                                    <a href="ShowTTSP.php?id=<?php echo $row["idSP"];?>"><img src="<?php echo $row['image_link']; ?>"/></a>
                                    <div class="b1"><img src="icon/new1.png" /></div>
                                    <h1><?php echo $row['tenSP']; ?></h1>
                                    <h2>Giá: <font color="#FF0000"><?php echo $row['DonGia']; ?></font> </h2>
                                    <a href="index.php?themgiohang=<?php echo $row["idSP"];?>"><button  class="h3"><img src="Untitled-2.jpg"  /></button></a>
                                    
                                </div>
        <?php }?>
        </div>
        <div class="phantrang3" >
        	<?php
				if($current_page > 1 && $total_page > 1)
					echo '<a href="index.php?page3='.($current_page-1).'">Prev</a>-';
				//lap khoang giua
				for($i = 1; $i <= $total_page; $i++)
				{
					if($i==$current_page)
					{
						echo '<span>'.$i.'</span>-';
					}
					else
					{
						echo '<a href="index.php?page3='.$i.'">'.$i.'</a>-';
					}
				}
				if($current_page < $total_page && $total_page > 1)
				{
					echo  '<a href="index.php?page3='.($current_page+1).'">Next</a>';
				}
			 ?>
        </div>
    </fieldset>
    </div>
         <div class="r">
         <div class="d0">
         	BQ SHOP <br /><br />
            Mọi chi tiết xin liên hệ với chúng tôi qua địa chỉ: 140 Lê Trọng Tấn, Quận Tân Phú, TP.HCM<br />
            SDT: 0933330632<br />
            Gmail: bqshop@gmail.com
         </div>
         <div class="d1">
         	<ul>Policies</ul><br />
            <li>Cách đặt mua</li>
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
    <?php
		if(isset($kqtim))
		{
			echo '<script language="javascript">alert("Không tìm thấy sản phẩm này !")</script>';
		}
	 ?>
</body>
</html>
