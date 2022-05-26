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
            print("<p>The sum of a and b is: ". $a + $b . "</p>")
        ?>
    </body>
</html>
