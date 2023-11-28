<?php
include 'connect.php';

// If the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user input from the login form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to retrieve user data based on the entered username
    $sql = "SELECT id, username, password FROM user WHERE username = ?";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if a user with the entered username exists
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the entered password against the hashed password in the database
        if (password_verify($password, $row['password'])) {
            // Password is correct, set session variables and redirect to a secure page
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            header("Location: index.php");
            exit();
        } else {
            // Password is incorrect
            $error_message = "Invalid password";
        }
    } else {
        // No user with the entered username
        $error_message = "Invalid username";
    }

    $stmt->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Login</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input type="text" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                        <?php
                    // Display error message if present
                    if (isset($error_message)) {
                        echo "<p class='text-danger'>$error_message</p>";
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and Popper.js scripts (order matters) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>