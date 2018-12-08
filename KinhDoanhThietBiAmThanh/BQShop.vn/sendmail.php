<?php
	session_start();
	if(isset($_GET['mail']))
	{
		$mail = $_GET['mail'];
		//goi thu vien
		include('class.smtp.php');
		include ('class.phpmailer.php'); 
		$nFrom = "elegantshop.freevnn.com";    //mail duoc gui tu dau, thuong de ten cong ty ban
		$mFrom = 'khongtonthuong@gmail.com';  //dia chi email cua ban 
		$mPass = 'laptrinh123';       //mat khau email cua ban
		$nTo = 'elegantshop'; //Ten nguoi nhan
		$mTo = $mail;   //dia chi nhan mail
		$mail             = new PHPMailer();
		$body             = 'Chúng tôi sẽ giao hàng trong 7 ngày..xin chân thành cám ơn !';   // Noi dung email
		$title = 'Thông báo đặt hàng';   //Tieu de gui mail
		$mail->IsSMTP();             
		$mail->CharSet  = "utf-8";
		$mail->SMTPDebug  = 0;   // enables SMTP debug information (for testing)
		$mail->SMTPAuth   = true;    // enable SMTP authentication
		$mail->SMTPSecure = "ssl";   // sets the prefix to the servier
		$mail->Host       = "smtp.gmail.com";    // sever gui mail.
		$mail->Port       = 465;         // cong gui mail de nguyen
		// xong phan cau hinh bat dau phan gui mail
		$mail->Username   = $mFrom;  // khai bao dia chi email
		$mail->Password   = $mPass;              // khai bao mat khau
		$mail->SetFrom($mFrom, $nFrom);
		$mail->AddReplyTo('khongtonthuong@gmail.com','elegantshop.freevnn.com'); //khi nguoi dung phan hoi se duoc gui den email nay
		$mail->Subject    = $title;// tieu de email 
		$mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
		$mail->AddAddress($mTo, $nTo);
		// thuc thi lenh gui mail 
		if(!$mail->Send()) {
			echo 'email của bạn không chính xác!';
			 
		} else 
		{
			 header('location: FormDatHang.php?ketqua=1');
		}
	}
?>