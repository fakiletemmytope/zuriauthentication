<?php
   session_start();
   if(isset($_SESSION["login"])){
      header("location:dashboard.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="regprocess.php" method="post">
    <?php
         if(isset($_SESSION["error"])){
            echo "<p>".$_SESSION["error"]."</p>";
         }
    ?>
    <p>
       <label for="firstname">FIRST NAME</label><br>
       <input type="text" name="firstname" id="">
    </p>
    <p>
       <label for="lastname">LAST NAME</label><br>
       <input type="text" name="lastname" id="">
    </p>
    <p>
       <label for="email">EMAIL</label><br>
       <input type="email" name="email" id="">
    </p>
    <p>
       <label for="password">PASSWORD</label><br>
       <input type="password" name="password" id="">
    </p>
  
    <p>
         Already have an <a href="login.php">ACCOUNT</a>
    </p>
    <p>
        <button type="submit">SUBMIT</button>
    </p>
  </form>
</body>
</html>