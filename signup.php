<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Get the best learning experience with Team Elite. We offer the best programming lessons. Kickstart your Tech career here.">
    <meta name="keyword" content="Team Elite, Html, Css, Javascript, Vanilla js, Java, PHP, Lavarel, Vue, Vue js, React, React js, Node, Node js, Django, Wordpress,">
    <title>Sign Up | Team Elite</title>

     <!--Fonts and icon-->
     <link rel="icon" href="https://res.cloudinary.com/ddu0ww15f/image/upload/v1568675580/icons8-joe-pineapples-16_xhpzbw.png" type="img/x-icon">
     <link rel="stylesheet" type="text/css" href="main.css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
</head>
<body>
        
    <main class="container2">
        <div class="signhead">
            <h1>Welcome To Team Elite</h1>
        </div>
            <div class="inner-wrap" id="signup">
                    <div class="form-head">
                            <h2>Sign Up</h2>
                        </div> 
                    <form action="" method="POST">
                        <p>Create Your Team Elite Account</p>
                        <div class="content">
                            <label for="name" class="label">Full Name:</label><br>
                            <input type="text" class="fill" name="name" placeholder="Type Your Full Name" required><br>
                            <label for="email" class="label">Email:</label><br>
                            <input type="email" class="fill" name="email" placeholder="Type Your Email" required><br>
                            <label for="password" class="label">Password:</label><br>
                            <input type="password" class="fill" name="password" placeholder="Enter Your Password" minlength="8"><br>
                            <label for="confirm-password" class="label">Confirm Password:</label>
                            <input type="password" class="fill" name="confirm-password" placeholder="Confirm Password" minlength="8"><br>
                            <input type="submit" class="btn" name="submit" value="Create Account">
                        </div>
                        <p><?php include 'update.php'?> </p>
                        <div class="login">
                            <p>Already have an account? <a href="Login.php">Login</a></p>
                        </div>
                    </form>
                </div>
        
    </main>
    <div class="footer">
            <p>&copy; 2019 | Team Elite</p>
        </div>
</body>
</html>