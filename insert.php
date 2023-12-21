<?php

$conn = new mysqli('localhost', 'root', ' ', 'demo');


    if(isset($_POST['submit'])){
        $firstname  =  $_POST['firstname'];
        $lastname   =  $_POST['lastname'];
        $email      =  $_POST['email'];

        $sql = "INSERT INTO students(firstname, lastname, email)  VALUES ('$firstname', '$lastname', '$email')";
        if(mysqli_query($conn, $sql) == TRUE){
            echo 'Data inserted';
            header('location:insert.php');
        }

        else{
            echo 'not inserted';
        }

    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6 pt-4 mt-4 border border-success">
                    <h3>Registration Form</h3>
                    <form action="insert.php" method="POST">
                        Firstname: <br>
                        <input type="text" name="firstname" > <br><br>

                        Lastname: <br>
                        <input type="text" name="lastname" > <br><br>

                        Email: <br>
                        <input type="email" name="email" > <br><br>

                        <input type="submit" name="submit" value="Insert" class="btn btn-success"> <br><br>
                    </form>

            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>




