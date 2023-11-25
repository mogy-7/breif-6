<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssjs/css/bootstrap.css">
    <title>Display</title>
</head>

<body>

    <div class="container">
        <button class="btn btn-primary mt-5 mb-5"><a class="text-light" href="index.php">add user</a></button>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">sl no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">password</th>
                    <th scope="col">operations=========</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `users`";
                $result = mysqli_query($conn, $sql);
                if($result){
                    while($row  = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '<tr>
                        <td>' . $id .'</td>
                        <th scope="row">' . $name .'</th>
                        <td>' . $email .'</td>
                        <td>' . $mobile .'</td>
                        <td>' . $password .'</td>
                        <td>
                        <button  class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                        <button  class="btn btn-danger"><a class="text-light" href="delete.php?deletid='.$id.'">Delete</a></button>
                        </td>
                    </tr>
                    
                        ';
                    };
                
                }
                
                ?>


                <!-- <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr> -->
            </tbody>
        </table>
    </div>




    </div>
    <script src="bootstrap-4.0.0-dist/js/bootstrap.js"></script>
    <script src="bootstrap-4.0.0-dist/js/jquery-3.7.1.min.js"></script>
    <script src="bootstrap-4.0.0-dist/js/popper.min.js"></script>
</body>

</html>