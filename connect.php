<?php
$fname = $_POST['fname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$errors = array();
#database_connection
$conn = new mysqli('localhost', 'root', '', 'codingo_login');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    if (mysqli_num_rows(mysqli_query($conn, "select * from codingologin where email='$email'"))) {
        echo "<script> alert('Email id already exists....'); location='http://localhost/Login%20and%20Signup%20Form%20Design/Login%20and%20Signup%20Form%20Design/index.html?' </script>";
    } else {
        if ($password !== $confirm_password) {
            echo "<script> alert('Confirm password did not match.... Try again'); location='http://localhost/Login%20and%20Signup%20Form%20Design/Login%20and%20Signup%20Form%20Design/index.html?' </script>";
        } else {
            $password=password_hash($password,PASSWORD_DEFAULT);
            mysqli_query($conn,"insert into codingologin(fname,email,password) values('$fname','$email','$password')");
            echo "<script> alert('Registration successful....'); location='http://localhost/Login%20and%20Signup%20Form%20Design/Login%20and%20Signup%20Form%20Design/dashboard.html?' </script>";
        }
    }
}
