<?php
session_start();
$_SESSION['name'] = $_POST['name']
 ?>



<html>
<head>
<style>
.centerText{
  text-align: center;
}

.formGroup{
  text-align: center;
}
</style>



</head>



<body>



<h2 class="centerText">Select Color</h2>


<div class="pageContainer">
   <form method="post" action="Order3.php" class="formLayout">
      <div class="formGroup">
         <label>Car color:</label><br><br>
         <div class="formElements">
            <select name="color" required >
               <option  value=""></option>
               <option style="background-color: blue; color:white;" value="blue" >Blue</option>
               <option style="background-color: red" value="red">Red</option>
               <option style="background-color: yellow" value="yellow">Yellow</option>
            </select>

         </div>
      </div><br>
      <div class="formGroup">
         <label></label>
         <button type="submit" value="NEXT PAGE" name="nextpage"> >> Next >> </button>
      </div><br>
      <div class="centerText vertGap55">
         <button type="submit" formnovalidate>Submit without validation</button><br><br>
         <a href="?">Reload page</a>
      </div>
   </form>
</div>
</div>
</body>
</html>
