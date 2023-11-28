<?php
include 'connect.php';
include 'header.php';

if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $amount = $_POST['amount'];
    $account_id = $_POST['account_id'];

    $sql = "INSERT INTO `transaction` (type, amount, account_id)
VALUES ('$type' ,'$amount' ,'$account_id')";
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
            <!-- <div class="form-group"> -->
            <select name="type" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <option> select type</option>
                <option value="debit">debit</option>
                <option value="credit">credit</option>
            </select>
            <div class="form-group">
                <label for="exampleInputEmail1">amount</label>
                <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter your amount" name="amount">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">account_id</label>
                <input type="number" class="form-control" id="exampleInputPassword1" placeholder="enter your account_id"
                    name="account_id">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

    <?php 
include 'footer.php'; ?>
    <script src="cssjs/js/bootstrap.js"></script>
    <script src="cssjs/js/jquery-3.7.1.min.js"></script>
    <script src="cssjs/js/popper.min.js"></script>
</body>

</html>