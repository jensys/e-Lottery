<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="css/style.css?version=51">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styleFurther.css?version=51">
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
                <a href="index.php" class="active">
                    Home
                </a>
            </div>
            <div class="link">
                <div class="link1"></div>
                <a href="#" id="active">
                    Registration
                </a>
            </div>
        </nav>



    </header>

    <main>


        <div class="box">

            <div class="head">
                <h3>Further Details</h3>
            </div>
            <div class="main">
                <form class="details" method="post" action="furtherDetailsCon.php">

                    <div class="element">
                        <label for="id">Company Name </label>
                        <input type="text" name="cname" class="text-box" placeholder="Company Name" required>
                    </div>

                    <div class="element">
                         <label for="service">Service : Cost Criteria<br> </label>
                         <select name="service" id="service" required>
                         
                        <?php
                        
                                         
                        $conn=mysqli_connect("localhost", "root", "", "raj");

                        if(!$conn){
                            die("Error: Failed to connect to database!");
                        }

                        $query = mysqli_query($conn, "SELECT `name`,`Cost Criteria` FROM `services`");
                        $row = mysqli_num_rows($query);
                        while($row=mysqli_fetch_array($query)){
                            $val = $row['name'];
                            $val1 = $row['Cost Criteria'];
                            echo"<option value='". $val ."'>" .$val.': '.$val1 ."</option>";
                        }
                        ?>
                        </select>
                    </div>

                    <div class="element">
                        <label for="rate">Rate per criteria </label>
                        <input type="text" name="rate" class="text-box" placeholder="Rate per criteria" required>
                    </div>

                    <div class="element">
                        <label for="lic">License Number </label>
                        <input type="text" name="lic" class="text-box" placeholder="If applicable">
                    </div>

                    <div class="element">
                        <label for="fssai">FSSAI ID </label>
                        <input type="text" name="fssai" class="text-box" placeholder="If applicable">
                    </div>

                    <input type="submit" name="submit" value="submit">

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