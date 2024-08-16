<?php

// print_r($_POST);
$coon =  new mysqli ("localhost","root","","school system");

$id=$_GET['id'];
$name=$_POST['name'];
$address=$_POST['address'];
$age=$_POST['age'];
$phone=$_POST['phone'];

$update="UPDATE info_student SET name='$name',address='$address' ,age='$age',phone='$phone' WHERE id='$id'";

$coon -> query($update);

header("location:index.php");

?>