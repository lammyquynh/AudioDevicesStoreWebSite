<?php include_once('KetNoiCSDL.php'); ?>
 <?php
 	session_start();
 	if(isset($_POST['dangnhap']))
	{
		$sql_dn = 'select * from admin where taikhoan = "'.$_POST['user'].'" and
 matkhau = "'.$_POST['password'].'"';
 		$sql = mysql_query($sql_dn);
		$row = mysql_num_rows($sql);//đếm số dòng
		if($row == 1)
		{
			$row_user = mysql_fetch_array($sql);//lấy từng dòng
			$_SESSION['dangnhap'] = array();
			$_SESSION['dangnhap'][0]['iduser'] = $row_user['id'];
			$adminURL = 'admin.php';
			header('Location: '.$adminURL);
		}
		else
		{
			$thongbao =  'Sai thông tin Tài khoản hoặc Mật khẩu !';
		}
 	}
  ?>

  
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Đăng nhập</title>
<style>
body{
	margin: 0;
	padding: 0;
	font-family: Arial;
	font-size: 12px;
	background-image:url(image/2250370bo_1.jpg);
	background-size:100%;
}

.tieude
{
	width:350px;
	height:50px;
	margin-left:580px;
	margin-top:120px;
	font-size: 50px;
	color:#F0F;
	font-weight:bold;
}
.dangnhap
{
	width:350px;
	height:50px;
	margin-left:640px;
	margin-top: 80px;
	font-size: 36px;
	color: #F00;
	font-weight:bold;
}
.login{
	background-color:#963;
	position: absolute;
	height: 180px;
	width: 350px;
	padding: 10px;
	z-index: 2;
	margin-left:550px;
	margin-top:5px;
	text-align:center;
	color:#FFF;
	border-radius:8px;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=password]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
	
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	padding: 6px;
	margin-top: 10px;
	font-weight:bold;
}

.login input[type=submit]:hover{
	opacity: 0.9;
}

.login input[type=submit]:active{
	opacity: 0.6;
}


.login input[type=submit]:focus{
	outline: none;
}
    </style>

</head>

<body>
		<div class="tieude">BQ SHOP</div>
        <div class="dangnhap">Đăng nhập</div>
        <form method="post">
		<div class="login">
				<input type="text" placeholder="Tên đăng nhập" name="user"><br>
				<input type="password" placeholder="Mật khẩu" name="password"><br><br />
                <?php if(isset($_POST['dangnhap'])) echo '<font size="+1">'.$thongbao.'</font>'.'<br>'; ?>
				<input type="submit" value="Đăng nhập" name="dangnhap">
		</div>
        </form>
</body>
</html>
