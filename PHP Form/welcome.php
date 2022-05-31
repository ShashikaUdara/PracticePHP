<html>
    <body>
        <?php
            // GET 
            // should NEVER be used for sending passwords or other sensitive information!

            // POST
            // Information sent from a form with the POST method is invisible to others (all names/values are embedded within the body of the HTTP request) and has no limits on the amount of information to send.
            // Moreover POST supports advanced functionality such as support for multi-part binary input while uploading files to server.
            /*
                in post no variable data is displaing in the url
                http://localhost/PracticePHP/PHP%20Form/welcome.php
            */
            $user_name = $_POST["name"];
            $user_email = $_POST["email"];
            echo $user_name . " - " . $user_email;

            /*
                in get variables are appeared in the url
                http://localhost/PracticePHP/PHP%20Form/welcome.php?name=Udara+Abeyrathne&email=udaraabeyrathne2000%40gmail.com&message=this+is+my+message
            */
            // $user_name = $_GET["name"];
            // $user_email = $_GET["email"];
            // $user_message = $_GET["message"];
            // echo $user_name . " - " . $user_email;
            // echo "<br>";
            // echo $user_message;

            //PHP Form Validation
        ?>

        <!-- <br>
        <br>
        PHP_SELF result: <?php // echo htmlspecialchars($_SERVER["PHP_SELF"]);?><br>
        Your email address is: <?php // echo $_POST["email"]; ?><br> -->
    </body>
</html>