<?php
include 'login.php';


// If the user clicks the logout button
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['logout'])) {

    // Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // If not logged in, redirect to the login page
    header("Location: loginpage.php");
    exit();
}
    // Destroy the session and redirect to the login page
    session_destroy();
    header("Location: loginpage.php");
    exit();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Name</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="index.php">Lbanak Liya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="displaybanc.php">Bank</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="displayagnc.php">agences</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="displaydistr.php">distributeur</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="displayacc.php">Accounts</a>
                </li>
                <li class="nav-item">
                    <form method="post">
                        <button type="submit" class="btn btn-link nav-link" name="logout">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>

    <!-- The rest of your webpage content goes here -->

    <!-- Add Bootstrap JS and Popper.js scripts (order matters) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>

<?php
include 'login.php';
?>