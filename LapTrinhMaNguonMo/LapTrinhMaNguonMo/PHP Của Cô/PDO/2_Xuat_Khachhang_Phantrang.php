<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!–Kết nối cơ sở dữ liệu–>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý sữa - Thông tin khách hàng</title>
</head>
<link rel="stylesheet" type="text/css" href="dinhdang_Phantrang.css">
<?php  
//Bước 1: Gọi kết nối CSDL
	try {
		// tạo kết nối cơ sở dữ liệu
		$db = new PDO("mysql:host=localhost;dbname=ql_ban_sua", 'root', '');
	 
		// chế độ báo lỗi: cho phép bạn xử lý lỗi và dừng các đoạn code quan trọng lại
	 
		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$db->exec("set names utf8");
	 
	} 
	catch(PDOException $errMsg) 
	{
		 echo 'Lỗi: ' . $errMsg->getMessage();
	}
//Bước 2: Cài đặt cấu hình dùng để phân trang
  $display = 5; // số khách hàng (số hàng) hiển thị trên 1 trang
  $num_links = 5; // Số link muốn hiển thị (2 link bên trái và 2 link bên phải của trang hiện tại
//Bước 3: Tính tổng số hàng trong bảng dữ liệu
	$records = $db ->query("SELECT COUNT(*) FROM Khach_hang");
	$total_rows = $records->rowCount();
//Bước 4: Lấy trang hiện tại từ URL qua phương thức $_GET[‘page’]
  if(isset($_GET['page']) && is_numeric($_GET['page']))
  {
		$curr_page = $_GET['page'];
  }
   
  else
  {
	   //nếu không tồn tại trang thì mặc nhiên sẽ là trang 1
	   $curr_page = 1;
  }
//Bước 5: Tìm vị trí khách bắt đầu của một trang trong câu truy vấn có từ khóa LIMIT và tổng số trang được tạo ra.
	$position = (($curr_page - 1)*$display);
	//tổng số trang = tổng số hàng chia cho số hàng hiển thị trên 1 trang và làm tròn kết quả
 	$total_pages = ceil($total_rows / $display);
//Bước 6: Tính các trang bắt đầu và kết thúc của link phân trang ($start, $end)
  if($curr_page > $num_links)
  {
	 $start = $curr_page - ($num_links -1);
  }
  else
  {
	 $start = 1;
  }
  
   if(($curr_page + $num_links ) < $total_pages)
  {
	   $end = $curr_page + $num_links;
  }
  else
  {
	  $end = $total_pages;
  }
$sql="select* from Khach_hang";
$KH_Hang=$db->query($sql);
?> 
<body>
<table width="748" height="170" border="1" align="center" cellpadding="5" style="border-collapse:collapse">
	<caption> <h3> THÔNG TIN KHÁCH HÀNG</h3></caption>
    <tr bgcolor="#999999" >
    	<td><strong> Mã khách</strong></td>
        <td><strong> Tên_Khách </strong></td>
        <td><strong> Phái </strong></td>
        <td><strong> Điện thoại</strong></td>
        <td><strong> Địa chỉ </strong></td>
        <td><strong> Email </strong></td>
    </tr> 
<?php 
	foreach($KH_Hang as $KH)
	{
?>
<tr>
    <td > <?php echo $KH['Ma_khach']?></td>
    <td > <?php echo $KH['Ten_Khach']?></td>
    <td><img src="<?php echo $KH['Phai']?>.png" width="30" height="30" /></td>
    <td > <?php echo $KH['Dien_thoai']?></td>
    <td > <?php echo $KH['Dia_chi']?></td>
    <td > <?php echo $KH['Email']?></td>
</tr>
<div class="navigation" align="center">
    <ul>
    <?php
         if(isset($total_pages))
         { 
           if($total_pages > 1) // nếu tổng số trang > 1 in dòng Page..of..      
           {    
                echo '<li class="single">Page '.$curr_page. ' of '.$total_pages.'</li>';
               // nếu trang hiện tại lớn hơn số link muốn hiển thị
               if($curr_page > $num_links)  
               {  
                   // thì hiển thị nút 'First'
                   echo '<li><a href="'.$page_url.'?page=1">First</a></li>';
               }
               // nếu trang hiện tại > 1
               if($curr_page > 1)
               {
                  // hiển thị nút 'Previous'
                  echo '<li><a href="'.$page_url.'?page='.($curr_page-1).'">Previous</a> </li>';
               }    
               // hiển thị các link bao gồm trang hiện tại và link trang hiển thị (trái và phải) bắt đầu từ $start, kết thúc là $end
              // $start và $end được tính trong pagination.php
              for($pages = $start ; $pages <= $end ;$pages++)
              {
                  if($pages == $curr_page)
                  {
                      echo '<li class="active"><a href="'.$page_url.'?page='.$pages.'">'.$pages.'</a></li>';
                  }
                  else
                  {
                  echo '<li><a href="'.$page_url.'?page='.$pages.'">'.$pages.'</a></li>'; 
                  }
              }
              // nếu trang hiện tại < tổng số trang           
             if($curr_page < $total_pages )
             { 
                 // thì hiển thị nút 'Next'
                  echo '<li><a href="'.$page_url.'?page='.($curr_page+1).'">Next</a></li>';
             }
             // nếu trang hiện tại + số link muốn hiển thị (ở đây là + với số link bên phải) > tổng số trang
            if(($curr_page + $num_links) <$total_pages )
            {  
            // thì hiển thị nút 'Last'
            echo '<li><a href="'.$page_url.'?page='.$total_pages.'">Last</a> </li>';
            }  
         }
       }
   ?>
   </ul></div></div>
<?php
    } 
		 $conn = null;
?>
</table>
</body>
</html>