<?php
include 'connect.php';
include 'header.php';

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $role_id = $_POST['role_id'];
    $address_id = $_POST['address_id'];

    $sql = "INSERT INTO `user` ( username,	password,	role_id, address_id)
VALUES ('$username' ,'$password' ,'$role_id' ,'$address_id')";
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
                <label for="exampleInputEmail1">username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter ville" name="username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">role_id</label>
                <input type="number" class="form-control" id="exampleInputPassword1"
                    placeholder="enter your code role_id" name="role_id">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">address_id</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter your quartier"
                    name="address_id">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">password</label>
                <input type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="enter your address_id" name="password">
            </div>
            <div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>
    </div>
    <?php include 'footer.php'; ?>

    <script src="cssjs/js/bootstrap.js"></script>
    <script src="cssjs/js/jquery-3.7.1.min.js"></script>
    <script src="cssjs/js/popper.min.js"></script>
</body>

</html>