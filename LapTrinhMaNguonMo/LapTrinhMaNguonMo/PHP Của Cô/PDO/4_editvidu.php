<?php
try {
    include('0_ketnoi.php');
    $sql = "UPDATE Khach_hang SET Ten_Khach='Lê Thị Lan' WHERE Ma_khach='kh002'";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?>