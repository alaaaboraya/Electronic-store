<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tac+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>products | منتجات</title>
    <link rel="stylesheet" href="index.css">

<style>
h3{
font-family :'cairo' , sans-serif;
font-weight :bold;
}
.card{
float:right;
margin-top : 20px ;
margin-left : 10px ;
margin-right : 10px 
}
.card img{
    width:75%;
    height:200px;
}
main{
    width:60%;
}

</style>
</head>
<body>
<center>
<h3>المنتجات الخاصه بنا </h3>
</center>
<?php
include('config.php'); 
$result =mysqli_query($con, "SELECT *FROM product");
while ($row = mysqli_fetch_array($result)){
echo "
<center>
<main>
<div class='card' style='width: 15rem;'>
<img src='$row[image]' class='card-img-top' >
<div class='card-body'>
  <h5 class='card-title'>$row[name]</h5>
  <p class='card-text'>$row[price]</p>
  <a href='delete.php? id=$row[id]' class='btn btn-danger'>حذف منتج</a>
  <a href='update.php? id=$row[id]' class='btn btn-primary'>تعديل منتج</a>
</div>
</div>
</main>
 </center>
";
}
?>
<a href="shop.php"> Available Product| المنتجات المتاحة</a>

</body>
</html>