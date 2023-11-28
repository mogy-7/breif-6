<?php

include 'connect.php';
// Start the session
session_start();



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
</head>

<body>

    <h2>Login</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <br>

        <input type="submit" value="Login">
    </form>

    <?php
// Display error message if present
if (isset($error_message)) {
    echo "<p style='color: red;'>$error_message</p>";
}
?>

</body>

</html>