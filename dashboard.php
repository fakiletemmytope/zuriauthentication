<?php
  session_start();
 // echo $_SESSION["success"];
  if(!isset($_SESSION["login"])){
    header("location:login.php");
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
    <div>
     <ul>
       <li><a href="index.php">Home</a></li>
     </ul>
     <ul>
       <li><a href="logout.php">logout</a></li>
     </ul>  
    </div>
    <div>
       <?php
           echo "<h1>".$_SESSION["login"]."</h1>"
       ?>
    </div>
</body>
</html>