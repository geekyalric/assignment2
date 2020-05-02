
<!DOCTYPE HTML>
<html>
<head>
  <style >

    #heading {
      text-align: center;
    }

    .one{
      text-align: center;
    }
  </style>
</head>
<body>

  <?php
  $nameErr = $emailErr = $genderErr = $websiteErr = "";
  $name = $email = $gender = $comment = $website = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name is required";
    } else {
      $name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "ERROR";
}
}

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }

    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
      $comment = "";
    } else {
      $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
      $genderErr = "Gender is required";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>

  <h2 id="heading">PHP Form Validation Example</h2>

  <form class="one" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<strong>    Name: <input id="one" type="text" name="name">
     <?php echo $nameErr;?>
    <br><br>
    E-mail: <input type="text" name="email">
    <?php echo $emailErr;?>
    <br><br>
    Website: <input type="text" name="website">
  <?php echo $websiteErr;?>
    <br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
    <br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
     <?php echo $genderErr;?>
    <br><br>
    <input type="submit" name="submit" value="Submit"></strong>
  </form>




</body>
</html>
