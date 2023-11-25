<?php
include 'connect.php';

$id = $_GET['updateid'];

$sql = "SELECT * FROM `users` WHERE id=$id ";
$resurlt = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($resurlt);
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $id = $_GET['updateid'];
    $sql = "UPDATE `users` SET id = $id, name = '$name', email = '$email', mobile = '$mobile', password = '$password'
    WHERE id = $id";
$resurlt = mysqli_query($conn,$sql);
if(!$resurlt){
    echo "data does not    created successfully!"; 
}else {
    header('location: display.php');
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
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter Name" name="name" value=<?php echo$name;?>>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="enter your email"
                    name="email" value=<?php echo$email;?>>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">mobile</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter your Mobile"
                    name="mobile" value=<?php echo$mobile;?>>
                <div class="form-group">
                    <label for="exampleInputPassword1">password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                        placeholder="enter your password" name="password" value=<?php echo$password;?>>

                </div>
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>
    <script src="cssjs/js/bootstrap.js"></script>
    <script src="cssjs/js/jquery-3.7.1.min.js"></script>
    <script src="cssjs/js/popper.min.js"></script>
</body>

</html>