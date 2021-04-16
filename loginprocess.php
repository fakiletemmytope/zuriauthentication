<?php
     session_start();

    //print_r($_POST["email"]);
    $count = 0;

    if ($_POST["email"] == null){
      $count=$count +1;
    }
    else{ $email = $_POST["email"];}

    if ($_POST["password"] == null){
      $count=$count +1;
    }
    else{ $password = $_POST["password"];}
    
    if($count>0){
      $_SESSION["error"] = "Form not completely filled";
      header("Location:login.php");
    }
    else{
          $records = scandir("database");
          foreach($records as $record){
             if($record==$email){
                $details=file_get_contents("database/".$email, true);
               $value= json_decode($details);
                //print($details);
                $pw=$value[3];
                //echo $pw;
                if(password_verify($password,$pw)){
                  $_SESSION["login"]= "You are welcome, ".$value[0]." ".$value[1];
                  header("Location:dashboard.php");
                  exit();
                }
                else{
                  $_SESSION["error"]= "Incorrect password";
                  header("Location:login.php");
                  exit();
                }
              
             }
          }
    }
    $_SESSION["error"]="Email not registered";
    header("location:login.php");
?>