<?php
// Start the session
session_start();

// Database connection settings
$host = 'localhost';         // Database host
$username = 'root';          // Database username
$password = '';              // Database password
$dbname = 'login_system';    // Database name

// Establish database connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle user registration
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'register') {
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password

    $query = "INSERT INTO users (first_name, last_name, email, password) VALUES ('$first_name', '$last_name', '$email', '$password')";

    if ($conn->query($query) === TRUE) {
        // Redirect to the sign-in page with a success flag
        header("Location: Login_form.php?signup=success");
        exit();
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}

// Handle user login
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'login') {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            // Set session variables for logged-in user
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $user['email'];

            // Redirect to home page
            header("Location: home.php");
            exit();
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "No account found with this email.";
    }
}

// Close the database connection
$conn->close();
?>
