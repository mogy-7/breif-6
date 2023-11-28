<?php
include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $bank_logo = $_POST['bank_logo'];

    $sql = "INSERT INTO `bank` (name,	bank_logo)
VALUES ('$name' ,'$bank_logo')";
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
                <label for="exampleInputEmail1">name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter your banc name" name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">bank_logo</label>
                <input type="number" class="form-control" id="exampleInputPassword1"
                    placeholder="enter your lien of your bank logo" name="bank_logo">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
    <script src="cssjs/js/bootstrap.js"></script>
    <script src="cssjs/js/jquery-3.7.1.min.js"></script>
    <script src="cssjs/js/popper.min.js"></script>
</body>

</html>