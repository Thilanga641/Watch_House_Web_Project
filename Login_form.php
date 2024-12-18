<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="Login_style.css">
</head>

<body>
    <video autoplay muted loop id="background-video">
        <source src="1.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    
    <div class="container" id="container">
        <div class="form-container sign-up">
        <form action="server.php" method="POST">
            <input type="hidden" name="action" value="register">
            <input type="text" name="first_name" placeholder="First Name" required>
             <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
             <button type="submit">Sign Up</button>
        </form>
        </div>
        <div class="form-container sign-in">
        <form action="server.php" method="POST">
            <input type="hidden" name="action" value="login">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign In</button>
        </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Valued Customer !</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="Login_script.js"></script>
</body>

</html>
