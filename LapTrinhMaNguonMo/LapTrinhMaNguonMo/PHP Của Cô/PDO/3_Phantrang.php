<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <title>Phân trang trong PHP và MySQL</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dinhdang.css">
</head>
<body>
<?php
//Phần code PHP
//Bước 1: Kết nối CSDL
	include("0_Ketnoi.php");
// Bước 2: Tính tổng $totalRecords
	$query = "SELECT count(*) AS totalRecords FROM Khach_hang";
	$result = mysql_query($query, $conn);
	$row = mysql_fetch_assoc($result);
	$totalRecords = !empty($row) ? $row['totalRecords'] : 0;

// Bước 3: Lấy $currentPage và thiết lập $recordPerPage
	$currentPage = isset($_GET['page']) && (int) $_GET['page'] > 0 ? (int) $_GET['page'] : 1;
	$recordPerPage = 4; 
 
// Bước 4: Tính tổng số trang($totalPage) và tính $offset
	$totalPage = ceil($totalRecords/$recordPerPage);
// Tính $offset
	$offset = ($currentPage-1)*$recordPerPage;
	$limit = "LIMIT $offset,$recordPerPage";
 	$query = "SELECT * FROM Khach_hang ".$limit; 
	$result = mysql_query($query, $conn);
?>
<table width="748" height="170" border="1" align="center" cellpadding="5" style="border-collapse:collapse">
	<caption> <h1> THÔNG TIN KHÁCH HÀNG</h1></caption>
    <tr>
    	<td > Mã khách</td>
        <td > Tên_Khách </td>
        <td > Phái </td>
        <td > Điện thoại</td>
        <td > Địa chỉ </td>
        <td > Email </td>
     </tr> 
<?php 
	
		while ($KH = mysql_fetch_assoc($result))
	{
?>
  <tr bgcolor="#CCFFFF">
    	<td > <?php echo $KH['Ma_khach']  ?></td>
       	<td > <?php echo $KH['Ten_Khach']  ?></td>
       	<td "><img src="<?php echo $KH['Phai']?>.png" width="30" height="30" /></td>
       	<td "> <?php echo $KH['Dien_thoai']  ?></td>
       	<td "> <?php echo $KH['Dia_chi']  ?></td>
        <td "> <?php echo $KH['Email']  ?></td>
  </tr>
<?php
    } 
		 $conn = null;
?>
<tr>
    <td colspan="5" bgcolor="#FFFFFF" align="center">
 <?php
// PHẦN HIỂN THỊ PHÂN TRANG
 
// Button trang trước
	if($currentPage > 1 && $totalPage > 0)
	{
		echo '<a href="3_Phantrang.php?page='.($currentPage-1).'&t='.time().'"> <= </a>';
	}
	// Danh sách trang
		for($i=1; $i<=$totalPage; $i++)
	{
		echo '<a'.($currentPage==$i?' class="current"':'').' href="3_Phantrang.php?page='.$i.'&t='.time().'">'.$i.'</a>';
	}
	// Button trang kế tiếp
	if($currentPage < $totalPage && $totalPage > 1)
	{
		echo '<a href="3_Phantrang.php?page='.($currentPage+1).'&t='.time().'"> => </a>';
	}

?>
    </td>
  </tr>
</table>
</body>
</html>