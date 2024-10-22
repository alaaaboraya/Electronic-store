<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tac+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Cart |  عربة</title>
    <style>
h3{
    font-family: 'cairo', sana-serif;
    font-weight: bold;

}
main{
width :40%;
margin-top: 30px;
}
table{
    box-shadow: 1px 1px 10px sliver;
}
thead{
    background-color: grey;
    color:white;
    text-align: center;
}
tbody{
    text-align:center;
}
</style>
</head>
<body>
    <center>
<h3>
المنتجات المحجوزه
</h3>
<?php
include('config.php');
$result = mysqli_query($con, "SELECT * FROM addcard");
while($row=mysqli_fetch_array($result)){
echo "
  <main>
<table class='table'>
    <thead>
<tr>
<th scope='col'>Product Name</th>
<th scope='col'>Product Price</th>
<th scope='col'>Delete Product</th>

</tr>
</thead>
<tbody>
<tr>
    <td> $row[name] </td>
    <td> $row[price] </td>
    <td><a href='delete.php? id =$row[id]' class='btn btn-danger'>ازاله المنتج</td>
</tr>
</tbody>
</table>
</main>
";
}
?>
<a href ="shop.php">الرجوع لصفحه المنتجات</a>
</center>

</body>
</html>