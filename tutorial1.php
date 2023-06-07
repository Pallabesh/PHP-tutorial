<!-- Some points on PHP -->
<!-- We can write php inside html  -->
<!-- Its a dynamic language -->
<!-- Its not case sensitive -->
<!-- Has .php as extension -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <center>
        <h1>_.-Welcome to the tutorial for PHP-._</h1><br>
    </center>
    
    <!-- php code is writen within a syntax as follows -->
        <?php
            // here we can write our secerate code(logic) that will not be shown to client. 
        ?>
    <!-- we can insert as many php segments as we want/required -->
    
    <?php
    /* How to declare variables in PHP */
    /* Its done by writing variable_name followed by a '$' sign. */
        $variable1 = 20;
        $variable2 = 30;

        $variable3 = $variable1 + $variable2;

    /* How to write something in document through PHP */
        echo "This is used to write a line in document through PHP";
    /* to apply line breaks / go to next line */
        echo "<br>";
        echo $variable1." + ".$variable2." = ".$variable3;      /* To concatinate two strings or string and value, we use '.'  */
        echo "<br>";

    /* OPERATORS IN PHP */
    /*
    1.ARITHMETIC OPERATOR
    2.ASSIGNMENT OPERATOR
    3.COMPARISON OPERSTOR
    4.INCREMENT/DECREMENT OPERATOR
    5.LOGICAL OPERATOR 
    */

    /* Redefining simple numbers for checking calculation!  */
        $variable1 = 4;
        $variable2 = 2;

    /* # ARITHMETIC OPERATOR */
    /*      +,-,*,/     */
        echo "<br>";
        echo "<b>Examples of arithemetic operator</b>";
        echo "<br>";
        echo "Addition is ". $variable1+$variable2;
        echo "<br>";
        echo "Subtraction is ". $variable1-$variable2;
        echo "<br>";
        echo "Multiplication is ". $variable1*$variable2;
        echo "<br>";
        echo "Division is ". $variable1/$variable2;
        echo "<br>";

    /* # ARITHMETIC OPERATOR */
    /*     =, +=, -=, *=, /=     */
        echo "<br>";
        echo "<b>Example of assignment operators</b>";
        echo "<br>"; 
        $newvar = $variable1;
        echo $newvar;
        $newvar += 1;
        echo "<br>";
        echo $newvar;
        $newvar -= 1;
        echo "<br>";
        echo $newvar;
        $newvar *= 2;
        echo "<br>";
        echo $newvar;
        $newvar /= 3;
        echo "<br>";
        echo $newvar;
        echo "<br>";

    /* # COMPARISON OPERATOR */
    /*    ==, !=, >=, <=    */
        echo "<br>";
        echo "<b>Example of comparison operators</b>";
        echo "<br>";
        echo "We will check condition(==, !=, >=, <=) for 1 and 4";
        echo "<br>";
        echo var_dump(1==4);        /* var_dump() function is used to check the value and datatype of a variable. */
        echo "<br>";
        echo var_dump(1!=4);
        echo "<br>";
        echo var_dump(1>=4);
        echo "<br>";
        echo var_dump(1<=4);
        echo "<br>";

    /* # INCREMENT/DECREMENT OPERATOR */
    /*     ++$var, --$var, $var++, $var--    */
        $a = 1;
        $b = 1;
        $c = 1;
        $d = 1;
        echo "<br>";
        echo "<b>Example of increment/decrement operators</b>";
        echo "<br>";
        echo "for ++$a, ". ++$a;
        echo "<br>";
        echo "for --$b, ". --$b;
        echo "<br>";
        echo "for $c++, ". $c++;
        echo "<br>";
        echo "for $d--, ". $d--;
        echo "<br>";

    /* # LOGICAL OPERATOR */
    /*     and(can also be written as &&), or(can also be writen as ||), xor, !     */    
        echo "<br>";
        echo "<b>Example of logical operators</b>";
        echo "<br>";
        echo "And";
        echo "<br>";
        $chena = (true and true);
        echo var_dump($chena);
        echo "<br>";
        $poda = (true and false);
        echo var_dump($poda);
        echo "<br>";
        $ghoda = (false and true);
        echo var_dump($ghoda);
        echo "<br>";
        $dimba = (false and false);
        echo var_dump($dimba);
        echo "<br>";
        echo "Or";
        echo "<br>";
        $chena = (true or true);
        echo var_dump($chena);
        echo "<br>";
        $poda = (true or false);
        echo var_dump($poda);
        echo "<br>";
        $ghoda = (false or true);
        echo var_dump($ghoda);
        echo "<br>";
        $dimba = (false or false);
        echo var_dump($dimba);
        echo "<br>";
        echo "Xor";     /*xor(exclusive or) is same as 'or' but "true or true" will be "false" */
        echo "<br>";
        $chena = (true xor true);
        echo var_dump($chena);
        echo "<br>";
        $poda = (true xor false);
        echo var_dump($poda);
        echo "<br>";
        $ghoda = (false xor true);
        echo var_dump($ghoda);
        echo "<br>";
        $dimba = (false xor false);
        echo var_dump($dimba);
        echo "<br>";
        echo "! [NOT]";
        echo "<br>";
        $munna = (!true);
        echo var_dump($munna);
        echo "<br>";
        $babu = (!false);
        echo var_dump($babu);
        echo "<br>";
        echo "<br>";


    /* DATATYPES IN PHP*/
    /* There are six datatypes in PHP 
    1. string
    2. integer
    3. float
    4. boolean
    5. array
    6. object
    */

    $str = "This is a string";
    $int = 26;
    $float = 3.14;
    $b = true;
    $arr = array("bolero", "scorpio", "creta", "seltos");
   /*  $obj = ; */

   echo "Datatypes in PHP";
   echo "<br>";
   echo var_dump($str);
   echo "<br>";
   echo var_dump($int);
   echo "<br>";
   echo var_dump($float);
   echo "<br>";
   echo var_dump($b);
   echo "<br>";
   echo var_dump($arr);
   echo "<br>";

   /* Defining constants in PHP */
   /* It can be declared any where in side PHP but it is a good practise to place it just under the PHP tag (i.e. on the top of the codes) */
   define('pi', 3.14);
   echo "<br>";
   echo "This is a example to display stored constant!";
   echo "<br>";
   echo pi;

   /* Conditional Statements on next php file! */

   ?>
</body>
</html>