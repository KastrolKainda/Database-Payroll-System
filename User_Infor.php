    <!-- FOR CONNECTION TO THE DATABASE -->
<?php
  include 'conect.php';
?>

    <!-- HTML FILE -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> WWW://ADD_EMPLYOEE.COM </title>
    <link rel="stylesheet" type="text/css" href="Style User_infor.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css">
</head>
<body>
    <form> 
        <div class="all">
                  <!-- FOR THE ADD BUTTON -->
            <h1> List of Employees </h1><hr><br>
            <a class="btn btn-primary" my-5 href="User_Add.php" role="button" target="_blank" autofocus> Add Employee </a>
        </div>
                <!-- FOR THE BACK BUTTON -->
        <div id="bt">
            <a class="btn btn-primary" my-5 href="Admin_home.php" role="button" target="_blank"> Go Back </a> 
        </div>
            
        <table class="table">
            <thead>
                    <!-- THE TABLE HEADINGS OF THE USERS or EMPLOYEES -->
                <tr>
                    <th scope="col"> ID </th> 
                    <th scope="col"> NAME </th>
                    <th scope="col"> EMAIL </th>
                    <th scope="col"> PASS_WORD </th>
                    <th scope="col"> PHONE </th>
                    <th scope="col"> ADDRESS </th>
                    <th scope="col"> POSITION </th>
                    <th scope="col"> SALARY </th>
                    <th scope="col"> BRANCH_NO </th>
                    <th scope="col"> CREATED_AT </th>
                    <th scope="col"> ACTIONS </th>
                </tr>
            </thead>

            <tbody>

                <?php
                        // THIS IS TABLE NAME IN THE DATABASE //
                    $sql = "select * from users";
                    $result = mysqli_query($con,$sql);

                    if($result)
                    {
                      while ($row = mysqli_fetch_assoc($result))
                      {
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

                        echo ('
                         <tr>
                            <td scope="col"> '.$ID.' </td>
                            <td> '.$name.' </td>
                            <td> '.$email.' </td>
                            <td> '.$pass_word.' </td>
                            <td> '.$phone.' </td>
                            <td> '.$address.' </td>
                            <td> '.$position.' </td>
                            <td> '.$salary.' </td>
                            <td> '.$branch_no.' </td>
                            <td> '.$created_at.' </td>
                            <td>
                            <button class="btn btn-primary"><a href="edit.php?editID='.$ID.' " class="text-light"> Edit </a></button>
                            <button class="btn btn-danger" ><a href="delete.php?deleteID='.$ID.' " class="text-light"> Delete</a></button>
                            </td>
                         </tr>
                         ');
                      }

                    }

                ?>
            
            </tbody>
        </table>
    </form>
</body>
</html>