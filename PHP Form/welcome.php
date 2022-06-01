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
            // $user_name = $_POST["name"];
            // $user_email = $_POST["email"];
            // echo $user_name . " - " . $user_email;

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

            $nameError = $emailError = $websiteError = $commentError = $genderError = "";
            $name = $email = $website = $comment = $gender = "";
            if($_SERVER["REQUEST_METHOD"] = "POST")
            {
                if(empty($_POST["name"]))
                {
                    $nameError = "Name is required";
                }
                else
                {
                    $name = test_input($_POST["name"]);
                }

                if(empty($_POST["email"]))
                {
                    $emailError = "E-mail is required";
                }
                else
                {
                    $email = test_input($_POST["email"]);
                }

                if(empty($_POST["website"]))
                {
                    $websiteError = "";
                }
                else
                {
                    $website = test_input($_POST["website"]);
                }

                if(empty($_POST["comment"]))
                {
                    $commentError = "";
                }
                else
                {
                    $comment = test_input($_POST["comment"]);
                }

                if(empty($_POST["gender"]))
                {
                    $genderError = "";
                }
                else
                {
                    $gender = test_input($_POST["gender"]);
                }
            }

            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>

        <!-- <br>
        <br>
        PHP_SELF result: <?php // echo htmlspecialchars($_SERVER["PHP_SELF"]);?><br>
        Your email address is: <?php // echo $_POST["email"]; ?><br> -->
    </body>
</html>