<?php

session_start();
$host = "localhost";
$username = "root";
$password = "";
$database = "spikizi"; //localhost/phpmyadmin 
$conn = mysqli_connect($host, $username, $password, $database);


$email = $_POST['Email'];
$pass = $_POST['Password'];

$check_user = mysqli_query($conn, "SELECT * FROM `registration` WHERE `Email` = '$email' AND `Password` = '$pass'");
if (mysqli_num_rows($check_user) > 0) {

    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['Email']=$email;
    $sql= "SELECT Name FROM registration WHERE Email = '$email'";
    $result = $conn-> query($sql);
    if($result-> num_rows > 0)
    {
        $_SESSION['Name']= 'Name' ;
    }	   
    else{
        echo "0 result";
    };
    

 Header("Location: index.php");

} else {

    $response = [
        "status" => false,
        "message" => 'Invalid Name or Password'
    ];

    echo json_encode($response);
}


?>