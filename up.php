<?php
include('config.php');


if(isset($_POST['update'])){
$ID =$_POST['id'];
$NAME = $_POST['name'];
$PRICE = $_POST['price'];
$IMAGE = $_FILES['image'];
$image_location =$_FILES['image']['tmp_name'];
$image_name = $_FILES['image']['name'];
$iamge_up = "images/".$image_name;
$update="UPDATE product SET name= '$NAME' , price='$PRICE' , image='$iamge_up' WHERE id=$ID ";
mysqli_query($con ,$update);
if(move_uploaded_file($image_location,'images/'.$image_name)){
    echo "<script>alert('تم تحديث المنتج بنجاح')</script>";
}else{
    echo  "<script>alert('لم يتمتحديث المنتج')</script>";
}
header('location:index.php');
}



?>