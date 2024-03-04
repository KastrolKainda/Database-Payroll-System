<?php
include 'conect.php';

$ID = $_GET['editID'];
        //
$sql = "select * from users where ID = $ID";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

         //FOR THE EDIT INFORMATION OF THE USER
$ID = $row['ID'];
$name = $row['NAME'];
$email = $row['EMAIL'];
$pass_word = $row['PASS_WORD'];
$phone = $row['PHONE'];
$address = $row['ADDRESS'];
$position = $row['POSITION'];
$salary = $row['SALARY'];
$branch_no = $row['BRANCH_NO'];
$created_at = $row['CREATED_AT'];

        // SUBMITTING THE USERS INFOR--> IN THE DATABASE
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass_word = $_POST['pass_word'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $position = $_POST['position'];
    $salary = $_POST['salary'];
    $branch_no = $_POST['branch_no'];
    $created_at = $_POST['created_at'];

                    // THE TABLE WHERE USERS INFOR IS BEING UPDATED
    $sql = "update users set ID = $ID, name = '$name', email ='$email', pass_word ='$pass_word', phone ='$phone', 
    address='$address, position = '$position', salary = $salary,  branch_no = '$branch_no', created_at = '$created_at' where ID = $ID";

    $result = mysqli_query($con, $sql);
    if($result){
            // SHOW ME THE EDITTED INFORMATION IN TTHE BELOW
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
    <title> WWW.HTTPS://EDIT.COM </title>
    <link rel="stylesheet" href="style user.css">
</head>
<body><br>
                        <!-- USERS REQUIRED INFORMATION IN THE DB -->
<form class="all" method="POST">
    <input type="hidden" value="<?php echo $ID;?>" >
        <br>
        <h2> Add User Information </h2><br><br>
    <div class="form-group">
        <label for="text"> Name : </label>
        <input type="text" id="text" placeholder="Type Name Here" name="name" autocomplete="off" value="<?php echo $name;?>" required>
    </div><br>

    <div class="form-group">
        <label for="email"> Email : </label>
        <input type="text" id="email" placeholder="Type Email Here" name="email" autocomplete="off" value="<?php echo $email;?>" required>
    </div><br>

    <div class="form-group">
        <label for="password"> Password : </label>
        <input type="password" id="password" placeholder="Type Password Here" name="pass_word" autocomplete="off" value="<?php echo $pass_word;?>" required>
    </div><br>

    <div class="form-group">
        <label for="text"> Phone : </label>
        <input type="text" id="text" placeholder="Type Phone Here" name="phone" autocomplete="off" value="<?php echo $phone;?>" required>
    </div><br>

    <div class="form-group">
        <label for="text"> Address : </label>
        <input type="text" id="text" placeholder="Type Address Here" name="address" autocomplete="off" value="<?php echo $address;?>" required>
    </div><br>

    <div class="form-group">
        <label for="text"> Position : </label>
        <input type="text" id="text" placeholder="Type Position Here" name="position" autocomplete="off" value="<?php echo $position;?>" required>
    </div><br>

    <div class="form-group">
        <label for="number"> Salary : </label>
        <input type="text" id="number" placeholder="Type Salary Here" name="salary" autocomplete="off" value="<?php echo $salary;?>" required>
    </div><br>

    <div class="form-group">
        <label for="text"> Branch No : </label>
        <input type="text" id="text" placeholder="Type Branch Here" name="branch_no" autocomplete="off" value="<?php echo $branch_no;?>" required>
    </div><br>

    <div class="form-group">
        <label for="date"> Created At : </label>
        <input type="text" id="date" placeholder="Type Date Here" name="created_at" autocomplete="off" value="<?php echo $created_at;?>" required>
    </div><br>
    <br><br>
    <button type="submit" name="submit" class="btn btn-primary  autofocus"> Edit </button>

            <!-- <button type="submit" name="cancel" class="btn btn-primary" autofocus> Cancel </button> -->
</form>
</body>
</html>