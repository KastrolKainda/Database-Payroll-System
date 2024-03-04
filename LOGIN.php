<?php

// THIS CODES ARE FOR EMPLOYEES & ADMIN 

$email = $_POST['email'];
$pass_word = $_POST['password'];


// THIS CODES ARE FOR CONNECTION OF THE DATABASE TO THE SITE

$con = new mysqli("localhost" , "root" , "" , "RAMOS_PAYROLL");

    if($con -> connect_error) {

    //for connection error if the details are not TRUE !!!
die("Connection failed to connect :".$con -> connect_error);
}

else{
// the tables where it is being selected !!!

$stmt = $con -> prepare("select * from users where email = ?");
$stmt -> bind_param("s", $email);
$stmt -> execute();
$stmt_result = $stmt -> get_result();

    // IF PASSWORD IS TRUE ---> SHOW THIS for the USER DETAILS
if($stmt_result -> num_rows > 0)
{
    $data = $stmt_result -> fetch_assoc();

    if($data['pass_word'] === $password)
        {
        header("location:User_home.php");
        }

            // IF PASSWORD IS NOT TRUE 
    else 
        {
        echo ("<h1><br> Your Email or Password is Incorrect! </h1>");             
        }
        
}

    // IF PASSWORD IS TRUE ---> SHOW THIS for the ADMIN DETAILS
else if ($stmt_result -> num_rows > 0)
{

    $data = $stmt_result -> fetch_assoc();

    if($data['pass_word'] === $password)
        {
        header("location:Admin_home.php");
        }

            // IF PASSWORD IS NOT TRUE 
    else 
        {
        echo ("<h1><br> Your Email or Password is Incorrect! </h1>");             
        }
}

    // show this if BOTH password / email are not TRUE!!
else {
        echo(" <h1><br>Invalid Email or Password Entered!! </h1>");
        }
    }

?>

















