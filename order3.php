<?php
session_start();

 ?>


<html>
<body>
<center>
<h1>  <?php echo "Welcome!" .$_SESSION['name']; ?>
<br>
  <?php
echo " Congratulations you have choosen the Color: ".$_POST['color'];



   ?></h1>
 </center>
 </body>
 </html>
