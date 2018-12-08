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
			width: 1192px;
			height:1200px;
			background-image:url(nen.jpg);
			 border: 1px  solid none;
			 margin:-15px 150px 0px 150px ;
			 padding:0px;
	}
	
	
 .menutruot
{
	border: 1px solid none;
	width: 150px;
	height:800px;
	float:left;
	position:fixed;
	margin-top:20px;
	
}
.menutruot a
{
	text-decoration:none;
	color:#000;
}
*{margin:0px;padding:0px;}
. munutruot #wrapper{
	width:300px; margin:20px auto;
}
.acctive{
	background: #999 url(image/30530860_1350430341767406_2993319058276876288_o.ipg) no-repeat 2px 50%;
}
dl{
	width:150px;
	
}
dt{
	background:#3883cc url(image/30530860_1350430341767406_2993319058276876288_o.ipg) no-repeat 2px 50%;
	border-bottom:1px solid #FFFFFF;
	font-size:17px;
	padding:15px 20px;
	position:relative
}
dt a{
	color:#FFFFFF; 
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
.menu .tieude
{
	border:3px solid #FFF;
	width:1190px;
	height:150px;
	margin-top:15px;
	float:left;
	background-image:url(image/logo1.jpg);
}
.menu .rieng1
{
	width:1100px;
	height:600px;
	margin-left:50px;
	float:left;
}
fieldset
{
	width:1100px;
	border-radius: 8px;
}

.a1 img
{
	width: 170px;
	height: 190px;
	margin-top:5px;
	margin-left:15px;
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
fieldset legend
{
	font-size:36px;
	font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;
	color: #F00;
}
.a1 h1
{
	font-size:18px;
	text-indent:40px;
	font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
	margin-left:25px;
	
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
.menu .r
	{
		background-color:#999;
		width: 1190px;
		height:190px;
		float:left;
		margin-top:240px;
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
</style>
<?php include_once ('KetNoiCSDL.php'); 
 $id = $_REQUEST['id'];
?>
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
	<div class="tieude">
    </div>
    <div class="rieng1">
    <?php $show_sp = 'select * from sanpham, loaisp, theloai where theloai.idTL = loaisp.idTL AND loaisp.id = sanpham.idLoaiSP AND idLoaiSP ='.$id;
                $sql = mysql_query($show_sp);
				$row = mysql_fetch_array($sql);
               
         ?>
     <fieldset>
     	<legend align="center"><?php echo $row['tenloai']; ?></legend>
        <div class="chung">
    		<?php
				 while($row = mysql_fetch_array($sql))
                { 
			 ?>
                    <div class="a1">
                        <a href="ShowTTSP.php?id=<?php echo $row["idSP"];?>"><img src="<?php echo $row['image_link']; ?>"/></a>
                        <h1><?php echo $row['tenSP']; ?></h1>
                        <h2>Giá: <font color="#FF0000"><?php echo $row['DonGia']; ?></font> </h2>
                        <a href="FormDatHang.php?id=<?php echo $row["idSP"];?>"><button  class="h3"><img src="Untitled-2.jpg"  /></button></a>
                                    
                    </div>
        	<?php }?>
        </div>
        </fieldset>
    </div>
         <div class="r">
             <div class="d0">
                Elegant Shop <br /><br />
                Mọi chi tiết xin liên hệ với chung tôi qua địa chỉ: 118 Lê Trọng Tấn, Quận Tân Phú, TP.HCM<br />
                SDT: 01626485936<br />
                Gmail: elegantshop@gmail.com
             </div>
             <div class="d1">
                <ul>Policies</ul><br />
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
