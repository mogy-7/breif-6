<?php
include 'connect.php';
include 'header.php';

if (isset($_POST['submit'])) {
    $bank_id = $_POST['bank_id'];
    $longitude = $_POST['longitude'];
    $latitude = $_POST['latitude'];
    $agence_id = $_POST['agence_id'];

    $sql = "INSERT INTO `distributeur` (bank_id,	longitude,	latitude,	agence_id)
VALUES ('$bank_id' ,'$longitude' ,'$latitude' ,'$agence_id')";
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
        <!-- <div class="btn w-5 btn-primary "><a class="text-danger" href="form.html">click here</a></div> -->
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">bank id</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter bank id" name="bank_id">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">longitude</label>
                <input type="number" class="form-control" id="exampleInputPassword1"
                    placeholder="enter your code longitude" name="longitude">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">latitude</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter your latitude"
                    name="latitude">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">agence_id</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter your agence_id"
                    name="agence_id">
            </div>
            <div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
    </div>
    <?php  include 'footer.php'; ?>
    <script src="cssjs/js/bootstrap.js"></script>
    <script src="cssjs/js/jquery-3.7.1.min.js"></script>
    <script src="cssjs/js/popper.min.js"></script>
</body>

</html>