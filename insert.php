<?php
include('config.php');


if(isset($_POST['upload'])){
$NAME = $_POST['name'];
$PRICE = $_POST['price'];
$IMAGE = $_FILES['image'];
$image_location =$_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];
$iamge_up = "images/".$image_name;
$insert ="INSERT INTO product (name , price, image) VALUES ('$NAME','$PRICE','$iamge_up')" ;
mysqli_query($con ,$insert);
if(move_uploaded_file($image_location,'images/'.$image_name)){
    echo "<script>alert('تم رفع المنتج بنجاح')</script>";
}else{
    echo  "<script>alert('لم يتم رفع المنتج')</script>";
}
header('location:index.php');
}



?>