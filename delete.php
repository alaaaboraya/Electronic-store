<?php

include('config.php');
echo $ID = $_GET['id'];
mysqli_query($con, "DELETE FROM product WHERE id=$ID");
header('location:products.php')
?>