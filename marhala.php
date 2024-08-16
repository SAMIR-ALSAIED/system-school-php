<!-- <?php

include "nav.php";
$marhala=$_POST['$marhala'];

$coon =  new mysqli ("localhost","root","","school system");

$insert_marhala="INSERT INTO infomathala( `cl-name`) VALUES ('$marhala')";
$result =  mysqli_query ( $coon , $insert_marhala);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<div class="main">


<div class="main ">
<h2> </h2>

<form class="post-form" action="marhala.php" method="post">



    <div class="form-group">

    <div class="form-group">
            <label>   الاسم :</label>
            <input type="text" name="marhala" required />
        </div>
     
    </div>
    <input class="submit" type="submit" value="حفظ ">

</form>
   


</form>

</div>


</div>













    
</body>
</html>
 -->
