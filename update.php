<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tac+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Update|تعديل منتج </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
    include('config.php');
    $ID = $_GET['id'];
    $up = mysqli_query($con, "SELECT*FROM product Where id=$ID");
    $data = mysqli_fetch_array($up);
    ?>
    <center>
<div class="main" >
 <form action="up.php" method="post" enctype="multipart/form-data">
<h2>تعديل المنتجات</h2>
<input type="text" name='id' value='<?php echo $data['id']?>'>
<br>
<input type="text" name='name' value='<?php echo $data['name']?>'>
<br>
<input type="text" name='price' value='<?php echo $data['price']?>'>
<br>
<input type="file" id ="file" name='image' style='display:none;'>
<label for="file">تحديث صوره المنتج</label>
<button name= 'update' type='submit' >تعديل المنتج</button>
<br>
<a href="products.php">عرض كل المنتجات</a>
</form>
</div>
<p>Developer by alaa</p>
    </center>
</body>
</html>