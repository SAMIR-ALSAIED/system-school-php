<?php

$coon =  new mysqli ("localhost","root","","school system");





$id=  $_GET['id'];
if (isset($id)=='id') {

$select=" DELETE FROM  info_student WHERE id ='$id' ";

$result= mysqli_query ($coon , $select);

header("location:index.php");
}

?>