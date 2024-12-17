<?php
// Database configuration
$server_name = "localhost";
$username = "root";
$password = "123";
$dbname = "watch";

// Create a database connection
$conn = new mysqli($server_name, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    // Handle Sign Up
    if ($action == "signup") {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

        // Prepare and execute the query to check for existing email
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Email already registered. Please use a different email.";
        } else {
            // Prepare and execute the query to insert the new user
            $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $first_name, $last_name, $email, $password);

            if ($stmt->execute()) {
                echo "Registration successful. You can now sign in.";
            } else {
                echo "Error: " . $stmt->error;
            }
        }

        $stmt->close();
    }

    // Handle Sign In
    if ($action == "signin") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Prepare and execute the query to retrieve user information
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $row['password'])) {
                // Successful login, redirect to home page
                header("Location:index.html");
                exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "Invalid email or password.";
        }

        $stmt->close();
    }
}

$conn->close();