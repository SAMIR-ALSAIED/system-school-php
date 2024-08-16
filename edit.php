<?php


$coon =  new mysqli ("localhost","root","","school system");
include("nav.php");

$id=$_GET['id'];
 
$select="SELECT * FROM info_student WHERE id='$id' ";

$result= $coon -> query ($select);

while($row= $result -> fetch_assoc()){
 
 ?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width='device-width', initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>



    <!-- form -->



    <div class="main">
<h2> </h2>
<form class="post-form" action="doedit.php?id=<?= $row['id']?>" method="POST">

        <div class="form-group">
            <label>   اسم الطالب:</label>
            <input type="text" name="name" required  value="<?= $row['name']  ?>" />
        </div>

        <div class="form-group">
            <label>العنوان :</label>
            <input type="text" name="address"  value="<?= $row['address']  ?>" />
        </div>

        <div class="form-group">
        <label>رقم الموبايل :</label>
            <input type="number" name="phone" required   value="<?= $row ['phone'] ?>"; />
        </div>

        <div class="form-group">
        <label> العمر :</label>
            <input type="number" name="age" required  value="<?= $row['age'] ?>"/>
        </div>
      

        <!-- <div class="form-group">
        <label> القسم :</label>

            <select name="class" >
            <option value="" selected disabled> اختار القسم</option>
            
            </select>
        </div> -->
        <input    class="submit" type="submit" value="تعديل  ">

</form>

<?php
}
?>


 

 </div>


  </div>






<script src="./main.js"></script>
</body>
</html>