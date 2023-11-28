<?php
include 'connect.php';
include 'header.php';

$id = $_GET['updateid'];


$sql = "SELECT * FROM `banc` WHERE id=$id ";
$resurlt = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($resurlt);
$id = $row['id'];
$name = $row['username'];
$role_id = $row['role_id'];
$address_id = $row['address_id'];
$password = $row['password'];


if (isset($_POST['submit'])) {
$id = $_POST['id'];
$name = $_POST['username'];
$role_id = $_POST['role_id'];
$address_id = $_POST['address_id'];
$password = password_hash($_POST['password'],PASSWORD_BCRYPT);

    $id = $_GET['updateid'];
    $sql = "UPDATE `user` SET id = $id, username = '$username', role_id = '$role_id', address_id = '$address_id', password = '$password'
    WHERE id = $id";
$resurlt = mysqli_query($con,$sql);
if(!$resurlt){
    echo "data does not    created successfully!"; 
}else {
    header('location: displayusr.php');
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
                <label for="exampleInputPassword1">id</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter your role id"
                    name="id" value=<?php echo$id;?>>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Name" name="username" value=<?php echo$name;?>>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">role_id</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter your role id"
                    name="role_id" value=<?php echo$role_id;?>>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">address_id</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter your address_id"
                    name="address_id" value=<?php echo$address_id;?>>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="enter your password"
                    name="password" value=<?php echo$password;?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
    <script src="cssjs/js/bootstrap.js"></script>
    <script src="cssjs/js/jquery-3.7.1.min.js"></script>
    <script src="cssjs/js/popper.min.js"></script>
</body>

</html>