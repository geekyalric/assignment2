<html>
<body>

 <?php

 if (isset($_POST['password'])) {
     if ($_POST['password'] == 'dabre'){
       echo "welcome to the Page!";
       exit;

     }else{
       echo "password is incorrect";
       exit;
     }
}



 ?>










<center><form action="login.php" method="post">
Name: <input type="text" name="name"><br>
Password : <input type="password" name="password"><br>
<input type="submit"></center>

</body>
</html
