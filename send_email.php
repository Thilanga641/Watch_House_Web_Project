<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Database connection
    $servername = "localhost";
    $username = "root"; // Replace with your DB username
    $password = ""; // Replace with your DB password
    $dbname = "contact_form";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check database connection
    if ($conn->connect_error) {
        echo "<script>alert('Failed to connect to the database. Please try again later.');</script>";
        exit();
    }

    // SQL query to insert form data into the database
    $sql = "INSERT INTO messages (name, email, subject, message)
            VALUES ('$name', '$email', '$subject', '$message')";

    // Check if the data was saved successfully
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Your message has been saved successfully. Thanks...');
                window.location.href = 'home.php'; 
              </script>";
    } else {
        echo "<script>alert('Failed to save your message. Please try again later.');</script>";
    }

    $conn->close();
}
?>