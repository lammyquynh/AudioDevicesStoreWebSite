<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!–Kết nối cơ sở dữ liệu–>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Quản lý sữa - Thông tin khách hàng</title>
</head>
<link rel="stylesheet" type="text/css" href="dinhdang_Phantrang.css">
<body>
<form name="4_Index_update" method="post" action="4_Index_QLKH.php"  >
<div class="content">
<center><h2>QUẢN LÝ THÔNG TIN KHÁCH HÀNG</h2></center>
<table width="748" height="170" border="1" align="center" cellpadding="5" style="border-collapse:collapse">
	<tr bgcolor="#999999" >
    	<td><strong> Mã khách</strong></td>
        <td><strong> Tên_Khách </strong></td>
        <td><strong> Phái </strong></td>
        <td><strong> Điện thoại</strong></td>
        <td><strong> Địa chỉ </strong></td>
        <td><strong> Email </strong></td>
        <td><strong> Sửa </strong></td>
        <td><strong> Xoá </strong></td>
    </tr> 
<?php 
	include('4_pagination_update.php');
	$results = "SELECT * FROM Khach_hang 
	ORDER BY Ma_khach ASC LIMIT $position, $display";
	foreach($conn->query($results) as $KH)
	{
?>
    <tr>
        <td > <?php echo $KH['Ma_khach']?></td>
        <td > <?php echo $KH['Ten_Khach']?></td>
        <td><img src="<?php echo $KH['Phai']?>.png" width="30" height="30" /></td>
        <td > <?php echo $KH['Dien_thoai']?></td>
        <td > <?php echo $KH['Dia_chi']?></td>
        <td > <?php echo $KH['Email']?></td>
        <td><a href="4_Form_Edit1.php?id=<?php echo $KH["Ma_khach"]?>">Sửa</a></td> 
        <td><a href="4_delete.php?del=<?php echo $KH["Ma_khach"]?>">Xoá</a></td> 
        
    </tr>
<?php
    } 
?>
    <tr>
            <td colspan="8" align="center"> <a href="4_Form_Insert.php?">Thêm</a> </td>
                  
    </tr>
</table>
<!--phân trang-->
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
       </ul>
    </div>
</div>
</form>
<script language="javascript">  
	function xac_nhan()  
	{   
		var xn = confirm("Bạn có muốn xóa hay không?");   
			if(xn == true)    
				return true;   
			else    
				return false;  
	} 
</script> 
</body>
</html>
