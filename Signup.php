<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="Signup.css">
</head>
<body>
    <video autoplay muted loop id="background-video">
        <source src="1.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>

    <div class="signup-container">
        <h2>Sign Up</h2>
        <form>
            <div class="form-group">
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>
            <div class="form-group">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Sign Up</button>
            <p>Already have an account? <a href="login.html">Login</a></p>
        </form>
    </div>
</body>
</html>