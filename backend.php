<?php
// session_start();
$conn = mysqli_connect("localhost", "root", "", "rsu");
if ($conn) {
    if (isset($_GET['fullname'])) {
        $fullname = $_GET['fullname'];
        $email = $_GET['email'];
        $phone = $_GET['phone'];
        $password = $_GET['password'];
        $sql = "INSERT INTO student (fullname, email, phone, password) VALUES('$ullname', '$email', '$phone', '$password')";
        $query = mysqli_query($conn, $sql);
        if ($query){
            header("location: welcome.php");
        }else{
            header("location: register.html?error= wrong_query");
        }

     }else{
      header("location: register.html?error= no_fullname");
    }

}else{
    header("location: down.php?error= connection_error");
}
    


 

