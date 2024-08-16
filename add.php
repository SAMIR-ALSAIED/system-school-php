<?php


$coon =  new mysqli ("localhost","root","","school system");


// 

include "nav.php";












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
<form class="post-form" action="save.php" method="POST">

        <div class="form-group">
            <label>   اسم الطالب:</label>
            <input type="text" name="name" required />
        </div>

        <div class="form-group">
            <label>العنوان :</label>
            <input type="text" name="address" required />
        </div>

        
                <div class="form-group">
                <label> العمر :</label>
                    <input type="number" name="age" required />
                </div>
        <div class="form-group">
        <label>رقم الموبايل :</label>
            <input type="number" name="phone" required />
        </div>
      

         <!-- <div class="form-group">
        <label> القسم :</label>

            <select name="class" >








            <option value="" selected disabled> اختار القسم</option>
            
            </select>
        </div>  -->
        <input onclick="add()";   class="submit" type="submit" value="حفظ ">

</form>
       


    </form>

 </div>


  </div>






<script src="./main.js"></script>
</body>
</html>