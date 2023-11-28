<?php
include 'connect.php';
include 'header.php';

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
                    <th scope="col">id</th>
                    <th scope="col">rib</th>
                    <th scope="col">devise</th>
                    <th scope="col">balance</th>
                    <th scope="col">user id</th>
                    <th scope="col">operations .</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `account`";
                $result = mysqli_query($con, $sql);
                if($result){
                    while($row  = mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $rib = $row['rib'];
                        $devise = $row['devise'];
                        $balance = $row['balance'];
                        $user_id = $row['user_id'];
                        echo '<tr>
                        <td>' . $id .'</td>
                        <th scope="row">' . $rib .'</th>
                        <td>' . $devise .'</td>
                        <td>' . $balance .'</td>
                        <td>' . $user_id .'</td>
                        <td>
                        <button  class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                        <button  class="btn btn-danger"><a class="text-light" href="delete.php?deletid='.$id.'&deletname='."account".'">Delete</a></button>
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