<?php

    $conn =  mysqli_connect('localhost', 'root', ' ', 'demo');
    if($_GET['id']){
        $getid =   $_GET['id'];

        $sql = "SELECT * FROM students WHERE id = $getid";
        $query = mysqli_query($conn, $sql);
        $data = mysqli_fetch_assoc($query);

        $id = $data['id'];
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $email = $data['email'];

    }
        if(isset($_POST['edit'])){

            $id = $_POST['id'];
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
        
            
            $sql1 = "UPDATE students SET firstname = '$firstname', lastname = '$lastname', 
            email = '$email' WHERE id = $id";
            if(mysqli_query($conn, $sql1 ) == TRUE){
                header('location:view.php');
                echo "Data updated";
            }
            else{
                echo $sql1."Data not updated";
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
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        Firstname: <br>
                        <input type="text" name="firstname" value="<?php echo $firstname ?>"> <br><br>

                        Lastname: <br>
                        <input type="text" name="lastname" value="<?php echo $lastname ?>" > <br><br>

                        Email: <br>
                        <input type="email" name="email" value="<?php echo $email ?>" > <br><br>
                        <input type="text" name="id" value="<?php echo $id ?>" hidden> 
                        <input type="submit" name="edit" value="Edit" class="btn btn-success"> <br><br>
                    </form>

            </div>
            <div class="col-sm-3"></div>
        </div>
    </div>
</body>
</html>




