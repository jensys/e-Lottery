<?php

session_start();
$failure = false;
if ( isset($_GET['err']) && strlen($_GET['err']) >= 1  ) {
    $value = $_GET['err'];
    echo "<script type = 'text/javascript'>alert('$value');</script>";
}

if ( isset($_GET['id']) && strlen($_GET['id']) >= 1  ) {
    $failure = $_GET['id'];
}
else{
    $failure = false;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css?version=51">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
</head>
<body>
    
    <header>
        <div class="heading">
            <h1>bookR</h1>

            <a href="#" class="button">
                <div id="one"></div>
                <div id="two"></div>
                <div id="three"></div>
            </a>
        </div>

        <nav class="head">
            <div class="link">
                <div class="link1"></div>
                <a href="#" id="active">               
                    Home               
                </a>
            </div>
            <!--<div class="link">
                <div class="link1"></div>
                <a href="registration.html">
                    Registration
                </a>
            </div>-->
        </nav>

        
        
    </header>

    <main>

        <div class="box">
            <div class="head">
                <input type="button" value="Login" onclick="dissolveLogin();" id="loginbtn">
                <input type="button" value="Signup" onclick="dissolveSignup();" id="signupbtn">
            </div>

            <div class="main">
                <form method="post" class="basicInput" id="dissolve-one" action="loginConnection.php">

                    <div class="element">
                    <label for="id">Email ID </label>
                    <input type="email" name="idLogin" class="text-box" placeholder="email-id" required>
                    </div>

                    <div class="element">
                    <label for="pass">Password </label>
                    <input type="password" name="passLogin" class="text-box" placeholder="password" required>
                    </div>

                    <input type="submit" class = "submitbtn" name="submit" value="Submit">

                    <?php

                        if ( $failure !== false ) {
                            echo('<p style="color: red;">'.htmlentities($failure)."</p>\n");
                        }
                    ?>

                </form>

                <form method="post" class="basicInput" id="dissolve-two" action="signup_connection.php">

                    <div class="element">
                    <label for="fname">First Name </label>
                    <input type="text" name="fname" id="fname" class="text-box" placeholder="First Name" required>
                    </div>

                    <div class="element">
                    <label for="lname">Last Name </label>
                    <input type="text" name="lname" id="lname" class="text-box" placeholder="Last Name" required>
                    </div>

                    <div class="element">
                    <label for="email">E-Mail ID </label>
                    <input type="email" name="email" id="email" class="text-box" placeholder="E-Mail ID" required>
                    </div>

                    <div class="element">
                        <label for="mob">Mobile Number </label>
                        <input type="tel" minlength = "10" maxlength = "10" pattern = "\d*" name="mob" id="mob" class="text-box" placeholder="Mobile Number" required>
                    </div>

                    <div class="element">
                    <label for="address">Address </label>
                    <input type="textarea" name="address" id="address" class="text-box" placeholder="Address" required>
                    </div>

                    <div class="element">
                        <label for="dd1">User Type <br> </label>
                        <select name="type" id="dd1">
                            <option value="1">Customer</option>
                            <option value="2">Service Provider</option>
                        </select>
                    </div>
                    
                    <div class="element">
                    <label for="pass">Password </label>
                    <input type="password" id="pass" name="pass" class="text-box" placeholder="password" required>
                    </div>

                    <div class="element">
                    <label for="confPass">Confirm Password </label>
                    <input type="password" name="confPass" id="confPass" class="text-box" placeholder="Confirm Password" required>
                    </div>

                    <input type="submit" class = "submitbtn" name="submit" value="Submit">

                </form>
            </div>

        </div>

    </main>

   
    <footer>

     <p>&copy; 2022 bookR</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>