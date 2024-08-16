<?php

include "add.php";


$coon =  new mysqli ("localhost","root","","school system");


$name=$_POST['name'];
$address= $_POST ['address'];
$age=$_POST['age'];
$phone=$_POST['phone'];


// 


$insert="INSERT INTO info_student( `name`, `address`, `age`, `phone`) VALUES ('$name','$address','$age','$phone'
)";

$result =  $coon -> query($insert);





?>