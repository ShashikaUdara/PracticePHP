<!-- PracticePHP/PHP Crash/freeCodeCamp/site.php -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo("Hello World<br>");
      echo("<h1>My name is Udara Abeyrathne</h1>");
      echo("<hr>");
      echo("<p>This is my site</p>");

      // variables
      $characterName = "Udara Abeyrathne";
      $characterAge = 31;

      echo($characterName . " - " . $characterAge);

      // data types
      // strings
      $phrase = "this is a string";
      $number = 12;
      $volumn = 3.456;
      $isFull = true;

      //displaying the data
      echo("<br>");
      echo($phrase . " " . $number . " " . $volumn . " " . $isFull);
     ?>
  </body>
</html>
