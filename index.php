<?php
include "nav.php";


$coon =  new mysqli ("localhost","root","","school system");


$select="SELECT * FROM info_student ";

$result= $coon ->query($select);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>بيانات الطلاب</title>
    <link rel="stylesheet" href="./css/main.css">
 
</head>
<body>
    

<div class="main">

<h2>جميع بيانات الطلاب</h2>

<table>

<thead  class="main table">

<th> id</th>
<th>اسم الطالب</th>
<th>العنوان</th>
<th>العمر</th>
<th>رقم الموبايل</th>
<th>التحكم</th>


</thead>

<tbody class="main table"> 



<?php

while($row = $result -> fetch_assoc() ){
    
    ?>
<tr>
    <td><?= $row ['id']  ?></td>
    <td><?= $row ['name'] ?></td>
    <td><?= $row ['address'] ?></td>
  
    <td><?=  $row ['age']  ?></td>
    <td><?= $row ['phone']  ?></td>

    <td>


        <a href='edit.php?id=<?php echo$row['id']?> ' >   تعديل  </a>
    <a href='delete.php ?id= <?php echo $row ['id'] ?> ' >   حذف  </a>


    </td>



</tr>
    <?php


}
 ?>
</tbody  >

</div>












</table>







<script src="main.js"></script>
</body>
</html>