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
        <button class="btn btn-primary mt-5 mb-5"><a class="text-light" href="distributeur.php">add
                distributeur</a></button>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">bank id</th>
                    <th scope="col">longitude</th>
                    <th scope="col">latitude</th>
                    <th scope="col">agence id</th>
                    <th scope="col">Update Delete .</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `distributeur`";
                $result = mysqli_query($con, $sql);
                if($result){
                    while($row  = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $bank_id = $row['bank_id'];
                        $longitude = $row['longitude'];
                        $latitude = $row['latitude'];
                        $agence_id = $row['agence_id'];
                        echo '<tr>
                        <td>' . $id .'</td>
                        <th scope="row">' . $longitude .'</th>
                        <td>' . $latitude .'</td>
                        <td>' . $bank_id .'</td>
                        <td>' . $agence_id .'</td>
                        <td>
                        <button  class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                        <button  class="btn btn-danger"><a class="text-light" href="delete.php?deletid='.$id.'&deletname='."distributeur".'">Delete</a></button>
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