<?php  
//Bước 1: Gọi kết nối CSDL
	include('0_ketnoi.php');
//Bước 2: Cài đặt cấu hình dùng để phân trang
	$page_url ='http://localhost:8080/C3/PDO/4_Index_update.php'; 
  	$display = 3; 
  	$num_links = 5; 
//Bước 3: Tính tổng số hàng trong bảng dữ liệu
	$sql = "select* from Khach_hang";
	$records=$conn->query($sql);
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
//Tổng số trang = tổng số hàng chia cho số hàng hiển thị trên 1 trang và làm tròn kết quả
	$position = (($curr_page - 1)*$display);
	$total_pages = ceil($total_rows / $display);
//Bước 6: Tính các trang bắt đầu và kết thúc của link phân trang ($start, $end)
//Trang bắt đầu
  if($curr_page > $num_links)
  	 $start = $curr_page - ($num_links -1);
  else
  	 $start = 1;
//trang kết thúc
  if(($curr_page + $num_links ) < $total_pages)
  	   $end = $curr_page + $num_links;
  else
  	  $end = $total_pages;
  
