<!DOCTYPE html>
<html>
    <body>
        <h1>My first PHP page</h1>

        <?php
            $txt = "PHP scripting language";
            echo "I love $txt!<br>";
            ECHO("This is ECHO with brackets<br>");

            // single line comment
            # This is also a single line comment
            /* 
                multy single line comment 
            */

            // variables
            $x = 12;
            $y = 18;

            echo $x + $y, "<br>";
            echo "End of execution<br>";

            // variable scope
            // num is a globle variable
            $num = 8;

            // test_func is a php test function - Function names use underscores between words
            
            function test_func1() 
            {
                echo "<p>This is test_func()</p>";
                echo ("<p>Local num = $num</p>");
            } 

            test_func1();
            echo("<p>Global num = $num</p>");

            function test_func2()
            {
                // defining the variable inside the function
                $str = "This is a string";
                echo("<p>This is test_func2()</p>");
                echo("<p>Local str = $str</p>");
            }

            test_func2();
            echo("<p>Globle str = $str</p>");

            // using global keyword you can use globally defind variables inside the functions
            // a, b and c are globle variables
            $a = 12;
            $b = 6; 
            $c = "The sum of";

            function test_func3()
            {
                global $a, $b, $c;
                $sumL = $a + $b;
                echo("<p>(Local) - $c a and b is $sumL</p>");
            }
            test_func3();
            $sumG = $a + $b;
            echo("<p>(Global) - $c a and b is $sumG</p>");

            // accessing global variables using GLOBALS array
            function test_func4()
            {
                $sum2L = $GLOBALS['a'] + $GLOBALS['b'];
                echo("(Local-Using GLOBALS array) $c a and b is $sum2L</p>");
            }
            test_func4();

            // PHP The static Keyword - statically defined local variable NOT to be deleted.
            function test_func5()
            {
                static $count = 0; // statically defined varable been initialaized once to 0. 
                                   // When the next function call comes it will not be initialized again to 0
                                   // since its a static variable
                echo("Count: $count<br>");
                $count++;
            }

            $iter = 0;
            while($iter <= 10)
            {
                test_func5();
                $iter++;
            }

            // php print
            $txt1 = "I love coding";
            $txt2 = "I love php";
            print "<p>This is 'print' without paranthasis</p>";
            print("<p>This is 'print' with paracnthasis</p>");
            print("<h2>" . $txt1 . "</h2>");
            print($txt2 . " scripting language.<br>");
            print($txt1 . ", " . $txt2);
            print("<p>The sum of a and b is: ". $a + $b . "</p>");

            // data types
            // var_dump() function can return the data type
            $num = 5432;
            $str = "My name is Udara";
            $status = TRUE;
            $height = 178.35;
            $vehicals = array("Nissan", "Toyota", "BMW", "Audi");
            
            var_dump($num);
            echo "<br>";
            var_dump($str);
            echo "<br>";
            var_dump($status);
            echo "<br>";
            var_dump($height);
            echo "<br>";
            var_dump($vehicals);
            echo "<br><br><br>";

            // PHP Object
            class Vehicle
            {
                public $color;
                public $model;
                public function __construct($color, $model)
                {
                    $this->color = $color;
                    $this->model = $model;
                }

                public function message()
                {
                    return "My car is a " . $this->color . " " . $this->model;
                }
            }

            $myCar1 = new Vehicle("Silver", "Nissan");
            $myCar2 = new Vehicle("White", "Toyota");
            $myCar3 = new Vehicle("Black", "BMW");
            $myCar4 = new Vehicle("White", "Audi");
            var_dump($myCar1);
            echo "<br>";
            var_dump($myCar2);
            echo "<br>";
            var_dump($myCar3);
            echo "<br>";
            var_dump($myCar4);
            echo "<br><br>";
            echo("<p>" . $myCar1->message() . "</p>");
            echo("<p>" . $myCar2->message() . "</p>");
            echo("<p>" . $myCar3->message() . "</p>");
            echo("<p>" . $myCar4->message() . "</p>");

            // PHP NULL Value
            // variable create without any value holds the data type NULL
            $tempVar;
            var_dump($tempVar);
            echo "<br>";
            $tempVar = "Now this is a string";
            var_dump($tempVar);
            echo "<br>";
            $tempVar = null;
            // tempVar has been emptied using null key word
            var_dump($tempVar);
            echo "<br>";

            /*
                PHP Resource
                The special resource type is not an actual data type. 
                It is the storing of a reference to functions and resources external to PHP.
                A common example of using the resource data type is a database call.
            */

            // php numbers
            $minVal  = PHP_INT_MIN;
            $maxVal  = PHP_INT_MAX;
            $intSize = PHP_INT_SIZE;

            echo("<p>$minVal" . var_dump(is_int($minVal)) . "</p>");
            echo("<p>$maxVal" . var_dump(is_int($maxVal)) . "</p>");
            echo("<p>$intSize" . var_dump(is_int($intSize)) . "</p>");

            $minfVal = PHP_FLOAT_MIN;
            $maxfVal = PHP_FLOAT_MAX; // smallest representable positive nunber
            $maxNegativeFVal = -PHP_FLOAT_MAX; // smallest representable negative nunber
            $desimalDigitVal = PHP_FLOAT_DIG; // The number of decimal digits that can be rounded into a float and back without precision loss
            $smallestRepNum = PHP_FLOAT_EPSILON; // The smallest representable positive number x, so that x + 1.0 != 1.0

            echo("<p>$minfVal" . var_dump(is_float($minfVal)) . "</p>");
            echo("<p>$maxfVal" . var_dump(is_float($maxfVal)) . "</p>");
            echo("<p>$maxNegativeFVal" . var_dump(is_float($maxNegativeFVal)) . "</p>");
            echo("<p>$desimalDigitVal" . var_dump(is_float($desimalDigitVal)) . "</p>");
            echo("<p>$smallestRepNum" . var_dump(is_float($smallestRepNum)) . "</p>");

            // PHP Constants
            // Constants are like variables except that once they are defined they cannot be changed or undefined.
            define("GREETING", "<p>Good morning</p>");
            echo GREETING;
            // echo greeting; // this will not work since by default constants are case sensitive.
            // if we need case insesitive constant, define should include the 3rd paramiter as true
            define("WELCOME", "<p>Welcome you all!!!</p>", true);
            echo WELCOME;
            // echo welcome; // somehow this is not working :(

            // PHP Conditional Assignment Operators
            $brand = "Nissan";
            $status = ($brand == "Nissan")? "Yes, it's Nissan" : "No, it's no Nissan";
            echo("</p>$status</p>");

            $status = empty($user)? "User is Annonymous" : "User has a name";
            echo("</p>$status</p>");

            $user = "Udara Abeyrathne";
            $status = empty($user)? "User is Annonymous" : "User has a name";
            echo("</p>$status</p>");

            // PHP Array Operators
            $arr1 = array("1"=>"one", "2"=>"two", "3"=>"three", "4"=>"four");
            $arr2 = array("5"=>"five", "6"=>"six", "7"=>"seven", "8"=>"eight");

            // union
            echo("union: ");
            print_r($arr1 + $arr2);
            echo "<br>";
            
            // equality
            echo("equality: ");
            var_dump($arr1 == $arr2);
            echo "<br>";

            // identity
            echo("identity: ");
            var_dump($arr1 === $arr2);
            echo "<br>";
            
            // not equel to
            echo("not equel to: ");
            var_dump($arr1 <> $arr2);
            echo "<br>";

            // PHP String Operators
            $firstname = "Udara";
            $lastName = "Abeyrathne";

            // concatination
            echo("concatination: ");
            echo($firstname.$lastName);
            echo "<br>";

            // 	Concatenation assignment - append strings
            echo("Concatenation assignment: ");
            $firstname .= $lastName;
            echo($firstname);
            echo "<br>";

            // PHP Comparison Operators
            // spaceship
            $val1 = 5;
            $val2 = 10;
            echo($val1 <=> $val2); // returns -1 ($val1 < $val2)
            echo "<br>";

            $val1 = 10;
            $val2 = 10;
            echo($val1 <=> $val2); // returns 0 ($val1 = $val2)
            echo "<br>";

            $val1 = 15;
            $val2 = 10;
            echo($val1 <=> $val2); // returns +1 ($val1 > $val2)
            echo "<br>";

        ?>    
    </body>
</html>
