<?php
include 'connect.php';
include 'header.php';


if (isset($_POST['submit'])) {
    $ville = $_POST['vile'];
    $quartier = $_POST['quartier'];
    $rue = $_POST['rue'];
    $code_postal = $_POST['code_postal'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    $sql = "INSERT INTO `address` (ville	,quartier	,rue	,code_postal	,email	,telephone)
VALUES ('$ville' ,'$quartier' ,'$rue' ,'$code_postal' ,'$email'	,'$telephone')";
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
                <label for="exampleInputEmail1">vile</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter ville" name="vile">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">rue</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter  your street" name="rue">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">email</label>
                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="enter your email"
                    name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">telephone</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter your Mobile"
                    name="telephone">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">code_postal</label>
                <input type="number" class="form-control" id="exampleInputPassword1"
                    placeholder="enter your code postale" name="code_postal">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">quartier</label>
                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="enter your quartier"
                    name="quartier">

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