<html>
    <style>
        .error {color: #FF0000;}
    </style>
    <body>
        <!-- <form action="welcome.php" method="post">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            Message: <input type="text" name="message">
            <input type="submit">
        </form> -->

        <!-- <form action="welcome.php" method="get">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            Message: <input type="text" name="message">
            <input type="submit">
        </form> -->

        <?php
            $nameError = $emailError = $websiteError = $commentError = $genderError = "";
            $name = $email = $website = $comment = $gender = "";
            
            if($_SERVER["REQUEST_METHOD"] == "POST")
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
                    $website = "";
                }
                else
                {
                    $website = test_input($_POST["website"]);
                }

                if(empty($_POST["comment"]))
                {
                    $comment = "";
                }
                else
                {
                    $comment = test_input($_POST["comment"]);
                }

                if(empty($_POST["gender"]))
                {
                    $genderError = "Gender is required";
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

        <h2>PHP Form Validation Example</h2>
        <p><span class="error">* required field</span></p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
          Name: <input type="text" name="name">
          <span class="error">* <?php echo $nameError;?></span>
          <br><br>
          E-mail: <input type="text" name="email">
          <span class="error">* <?php echo $emailError;?></span>
          <br><br>
          Website: <input type="text" name="website">
          <span class="error"><?php echo $websiteError;?></span>
          <br><br>
          Comment: <textarea name="comment" rows="5" cols="40"></textarea>
          <br><br>
          Gender:
          <input type="radio" name="gender" value="female">Female
          <input type="radio" name="gender" value="male">Male
          <input type="radio" name="gender" value="other">Other
          <span class="error">* <?php echo $genderError;?></span>
          <br><br>
          <input type="submit" name="submit" value="Submit">  
        </form>

        <?php
            echo "<h2>Your Input:</h2>";
            echo $name;
            echo "<br>";
            echo $email;
            echo "<br>";
            echo $website;
            echo "<br>";
            echo $comment;
            echo "<br>";
            echo $gender;
        ?>

    </body>
</html>