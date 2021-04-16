<?php
  session_start();
  //print_r($_POST);
    $count = 0;

    if ($_POST["firstname"] == null){
      $count=$count +1;
    }
    else{ $firstname = $_POST["firstname"];}

    if ($_POST["lastname"] == null){
      $count=$count +1;
    }
    else{ $lastname = $_POST["lastname"];}

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
      header("Location:index.php");
    }
    else{
                $firstname=$_POST["firstname"];
                $lastname=$_POST["lastname"];
                $email=$_POST["email"];
                $password=password_hash($_POST["password"], PASSWORD_DEFAULT);
                //echo $firstname." ".$lastname." ".$email." ".$password;
                $folder = scandir("database");
                //print_r($folder);
                foreach($folder as $file){
                      if($file == $email){
                          $_SESSION["error"]="Email already exists";
                          header("Location:index.php");
                          die();
                      }
                }
                 
              
               $data = [$firstname,$lastname,$email,$password];
               file_put_contents("database/".$email, json_encode($data));
               $_SESSION["success"] = "Registration successful, you can now login";
               header("Location:login.php");

      }

?>