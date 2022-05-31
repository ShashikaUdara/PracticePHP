<html>
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

        <!-- <form action="<?php // echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> -->
        <form method="post" action="welcome.php">
            PHP_SELF result: <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?><br><br>
            Name: <input type="text" name="name"><br>
            E-mail: <input type="text" name="email"><br>
            Website: <input type="text" name="website"><br>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
            Gender:<br>
            <input type="radio" name="gender" value="female">Female<br>
            <input type="radio" name="gender" value="male">Male<br>
            <input type="radio" name="gender" value="other">Other<br><br>

            <input type="submit">
        </form>

        <br>
        <br>
        PHP_SELF result: <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?><br>
        Your email address is: <?php echo $_POST["email"]; ?><br>

    </body>
</html>