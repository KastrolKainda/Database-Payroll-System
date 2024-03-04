<?php
include 'conect.php';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass_word = $_POST['pass_word'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $branch_no = $_POST['branch_no'];
    $created_at = $_POST['created_at'];

    $sql = "insert into users (name, email, pass_word, phone, address, position, salary, branch_no, created_at) 
    values ('$name', '$email', '$pass_word', '$phone', '$address', '$position', $salary, '$branch_no', '$created_at')";

    $result = mysqlI_query($con, $sql);
    if($result){
            // TAKE ME TO EMPLYEES LIST 
      header('location:User_Infor.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> WWW.USERS.COM </title>
    <link rel="stylesheet" href="style user.css">
</head>
<body>
<br>
<form class="all" method="POST" >
        <br>
        <h2> Add User Information </h2><br>

    <div class="form-group">
        <label for="text"> Name : </label>
        <input type="text" id="text" placeholder="Enter Name" name="name" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="email"> Email : </label>
        <input type="text" id="email" placeholder="Enter Email" name="email" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="password"> Password : </label>
        <input type="password" id="password" placeholder="Enter Password" name="pass_word" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="text"> Phone : </label>
        <input type="text" id="text" placeholder="Enter Phone" name="phone" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="text"> Address : </label>
        <input type="text" id="text" placeholder="Enter Address" name="address" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="text"> Position : </label>
        <input type="text" id="text" placeholder="Enter Position" name="position" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="number"> Salary : </label>
        <input type="text" id="number" placeholder="Enter Salary" name="salary" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="text"> Branch No : </label>
        <input type="text" id="text" placeholder="Enter Branch No" name="branch_no" autocomplete="off" required>
    </div><br>

    <div class="form-group">
        <label for="date"> Created At : </label>
        <input type="text" id="date" placeholder="Enter Date" name="created_at" autocomplete="off" required>
    </div><br>
    <br><br><br>
    <button type="submit" name="submit" class="btn btn-primary" autofocus href="User_Infor.php"> Submit </button>
</form>
</body>
</html>