<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
//load database connection
    $host = "localhost";
    $user = "root";
    $password = "";
    $database_name = "ql_ban_sua";
    $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));
// Search from MySQL database table




$search=$_POST['search'];
$query = $pdo->prepare("select * from Khach_hang where Ten_Khach LIKE '%$search%' OR Dien_thoai LIKE '%$search%'  LIMIT 0 , 10");
$query->bindValue(1, "%$search%", PDO::PARAM_STR);
$query->execute();
// Display search result
?>
<html>
<head>
<title> How To Create A Database Search With MySQL & PHP Script | Tutorial.World.Edu </title>
</head>
<body>
<form action="search.php" method="post">
Search: <input type="text" name="search" placeholder=" Search here ... "/>
<input type="submit" value="Submit" />
</form>
<?php
         if (!$query->rowCount() == 0) {
		 		echo "Search found :<br/>";
				echo "<table style=\"font-family:arial;color:#333333;\">";	
                echo "<tr>
				<td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">First Name</td>
				<td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Last Name</td>
				<td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Trade</td>
				<td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Post Code</td>
				<td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Telephone</td>
				<td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Comments</td>
				<td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">To be use</td></tr>";			
            while ($results = $query->fetch()) {
				
				echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";			
                echo $results['Ma_khach'];
				
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";			
                echo $results['Ten_Khach'];
				
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";			
                echo $results['Phai'];
				
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";			
                echo $results['Dien_thoai'];
				
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['Dia_chi'];
				
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['Email'];
				
				echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
				echo $results['id'];
                //this its my button for delete
				echo("<button onclick=\"location.href='search.php?del=$results(id)'\">delete user</button>"); 
                
				echo "</td></tr>";				
            }
				echo "</table>";	

        } else {
            echo 'Nothing found';
        }
?>
</body>
</html>