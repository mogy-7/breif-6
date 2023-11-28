<?php
include 'connect.php';
include 'header.php';

// $sql = "    SELECT * FROM account";
// $result = $con->query($sql);

// $row = $result->fetch_assoc();
// ?>


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
        <button class="btn btn-primary mt-5 mb-5"><a class="text-light" href="banc.php">add bank</a></button>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">bank_logo .</th>
                    <th scope="col">Update </th>
                    <th scope="col"> Delete </th>

                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `bank`";
                $result = mysqli_query($con, $sql);
                if($result){
                    while($row  = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name = $row['name'];
                        $bank_logo = $row['bank_logo'];
                        echo '<tr>
                        <td>' . $id .'</td>
                        <th scope="row">' . $name .'</th>
                        <td>' . $bank_logo .'</td>
                        <td>
                        <button  class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                        </td>
                        <td>
                        <button  class="btn btn-danger"><a class="text-light" href="delete.php?deletid='.$id.'">Delete</a></button>
                        </td>
                    </tr>
                    
                        ';
                    };
                
                }
                
                ?>
            </tbody>
        </table>
    </div>

    </div>
    <?php include 'footer.php'; ?>
    <script src="bootstrap-4.0.0-dist/js/bootstrap.js"></script>
    <script src="bootstrap-4.0.0-dist/js/jquery-3.7.1.min.js"></script>
    <script src="bootstrap-4.0.0-dist/js/popper.min.js"></script>
</body>

</html>