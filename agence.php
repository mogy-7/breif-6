<?php
include 'connect.php';
include 'header.php';

if (isset($_POST['submit'])) {
    $bank_name = $_POST['bank_name'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $bank_id = $_POST['bank_id'];

    $sql = "INSERT INTO `agence` (	bank_name,	longitude,	latitude,	bank_id)
VALUES ('$bank_name' ,'$longitude' ,'$latitude' ,'$bank_id')";
$resurlt = mysqli_query($con,$sql);
if(!$resurlt){
    echo "data does not  created successfully!";
}
    
}
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssjs/css/bootstrap.css">
    <title>Banck</title>
</head>

<body>


    <div class="container mt-4">
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">bank name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter your bank_name" name="bank_name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">longitude</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter  latitude"
                    name="longitude">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">latitude</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter your latitude"
                    name="latitude">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">bank id</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter your bank id"
                    name="bank_id">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <?php include 'footer.php'; ?>
    <script src="cssjs/js/bootstrap.js"></script>
    <script src="cssjs/js/jquery-3.7.1.min.js"></script>
    <script src="cssjs/js/popper.min.js"></script>
</body>

</html>