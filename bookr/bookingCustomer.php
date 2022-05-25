<?php

    session_start();

    if ( isset($_GET['err']) && strlen($_GET['err']) >= 1  ) {
        $value = $_GET['err'];
        echo "<script type = 'text/javascript'>alert('$value');</script>";
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <link rel="stylesheet" href="css/style.css?version=51">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
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
                <a href="customerHome.html">
                    Home
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="#" id="active">
                    Booking
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="index.php">
                    Log out
                </a>
            </div>
        </nav>



    </header>

    <main>


        <div class="box">

            <div class="head">
                <h3>Booking</h3>
            </div>
            <div class="main">
                <div class="date">
                    <form class="details" method="post" action="bookingCustomerCon.php">

                        <div class="element">
                       
                    
                            <label for="date">Date </label>
                            <input type="text" name="date" class="form-control datepicker" autocomplete="off" id="date" required>
                        </div>
                        <script type="text/javascript">
                        var disableDates = ["25-3-2022", "14-3-2022", "15-3-2022","27-3-2022"];
      
                        $('.datepicker').datepicker({
                          format: 'mm/dd/yyyy',
                         beforeShowDay: function(date){
                        dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
                         if(disableDates.indexOf(dmy) != -1){
                          return false;
                             }
                             else{
                          return true;
                         }
                          }
                         });
                        </script>
                        
                        <input type="submit" value="Verify" id="verify">

                    </form>
                </div>
            </div>

        </div>

    </main>


    <footer>

        <p>&copy; 2022 bookR</p>
    </footer>

    <script src="js/script.js"></script>
</body>

</html>