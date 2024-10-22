<?php
include('config.php');
$ID=$_GET['id'];
$up = mysqli_query($con,"select * from product where id=$ID") ;
$data = mysqli_fetch_array($up); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Tac+One&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy A Product |  شراء المنتج</title>
    <style>
        input{
display: none;
        }
.main{
width : 50%;
padding : 20px;
box-shadow: 1px 1px 10px silver;
margin-top: 50px;
}
        
</style>
</head>
<body>
    <center>
        <div class="main">
        <Form action="insert_card.php" method="post">
            <h2>  Are You Need To Buy ? |هل فعلا تريد الشراء؟</h2>
            <input type="text" name="id" Value='<?php echo $data ['id']?>'>
            <input type="text" name="name" Value='<?php echo $data ['name']?>'>
            <input type="text" name="price" Value='<?php echo $data ['price']?>'>
            <button name="add" type="submit" class='btn btn-warning'>تأكيد اضافه المنتج الي العربة</button>
<br>
<a href="shop.php"> Back to product Page|  الرجوع لصفحه المنتجات </a>
</form>
</div>
</center>
</body>
</html>