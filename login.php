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
  <meta name="viewport" content="width= , initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <form action="loginprocess.php" method="post">
     <?php
         if(isset($_SESSION["success"])){
          echo "<p>".$_SESSION["success"]."</p>";
          session_unset();
       }
          if(isset($_SESSION["error"])){
            echo "<p>".$_SESSION["error"]."</p>";
            session_unset();
        }
     ?>
    <p>
      <label for="">Email</label><br>
      <input type="email" name="email" id="">
    </p>  
    <p>
      <label for="">Password</label><br>
      <input type="password" name="password" id="">
    </p>
    <p>
         Not yet a member? <a href="index.php">REGISTER</a>
    </p>
    <p>
      <button type="submit">Submit</button>
    </p>
   </form>
</body>
</html>