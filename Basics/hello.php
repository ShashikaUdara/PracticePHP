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
                echo("<p>(Local) - $c $a and $b is $sumL</p>");
            }
            test_func3();
            $sumG = $a + $b;
            echo("<p>(Global) - $c $a and $b is $sumG</p>");
        ?>
    </body>
</html>
