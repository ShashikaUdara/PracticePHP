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
      $phrase = "This Is a String";
      $number = 12;
      $volumn = 3.456;
      $isFull = true;

      //displaying the data
      echo("<br>");
      echo($phrase . " " . $number . " " . $volumn . " " . $isFull);
      echo("<br>");

      // strings - using the $phrase as the example
      // setting all to lower and upper case
      echo(strtolower($phrase));
      echo("<br>");
      echo(strtoupper($phrase));
      // string length
      echo("<br>");
      echo(strlen($phrase));
      // getting the first and second chars of the string
      echo("<br>");
      echo($phrase[0] . $phrase[1]);

      // replacing character
      echo("<br>");
      $phrase[0] = "J";
      echo($phrase);

      // user str_replace function
      echo("<br>");
      echo(str_replace("Jhis", "Apple", $phrase));

      // substring
      echo("<br>");
      echo(substr($phrase, 5));
      echo("<br>");
      echo(substr($phrase, 5, 6));
     ?>
  </body>
</html>
