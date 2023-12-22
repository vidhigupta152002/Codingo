<?php
  require_once('config.php');
  if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  $email = $_POST['email'];
  $password = $_POST['password'];
  $res=mysqli_query($conn,"SELECT password FROM codingologin WHERE email='$email'");
    if(mysqli_num_rows($res)>0)
    {
      $row=mysqli_fetch_assoc($res);
      $verify=password_verify($password,$row['password']);
      if($verify==1)
      {
            echo "<script> location='http://localhost/Login%20and%20Signup%20Form%20Design/Login%20and%20Signup%20Form%20Design/dashboard.html?' </script>";
      }
      else
      {
            echo "<script> alert('Your password is incorrect.... Try again'); location='http://localhost/Login%20and%20Signup%20Form%20Design/Login%20and%20Signup%20Form%20Design/index.html?' </script>";
      }
    }
    else
    {
      echo "<script> alert('Invalid Email id. Signup to continue.'); location='http://localhost/Login%20and%20Signup%20Form%20Design/Login%20and%20Signup%20Form%20Design/index.html?' </script>";
    }


  // $result1=mysqli_query($conn,$sql1);
  // if ($row = mysqli_fetch_assoc($result)) {
  //   echo "<script> alert('You are succesfully logged in....'); location='http://localhost/Login%20and%20Signup%20Form%20Design/Login%20and%20Signup%20Form%20Design/dashboard.html?' </script>";
  //   }
  //   elseif($row = mysqli_fetch_assoc($result1))
  //   {
  //           echo "<script> alert('Your password is incorrect.... Try again'); location='http://localhost/Login%20and%20Signup%20Form%20Design/Login%20and%20Signup%20Form%20Design/index.html?' </script>";
  //   }
  //   else {
  //   echo "<script> alert('Invalid Email id. Signup to continue.'); location='http://localhost/Login%20and%20Signup%20Form%20Design/Login%20and%20Signup%20Form%20Design/index.html?' </script>";
  // }
  }
?>