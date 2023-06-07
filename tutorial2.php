<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More_Basics_On_PHP</title>
    <style>
        /* In css '*' is used to represent all elements on page. The settings done here will be applied to all the elements on this page!  */
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box; /* This property is used to set the size of a box by managing the padding, margin, border. So that it wouls not exceed its size! */
        }
        .container{
            margin: auto;
            padding: 20px;
            width: 80%;
            background-color: brown;
            color: antiquewhite;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lets learn PHP</h1><br>
        <p>Your party status is here:</p><br>
        <?php

        /* Conditional statements in PHP */

            $age=20;
            if($age>=25){
                echo "You can enjoy the party!";
            }
            else if($age<25 and $age>=18){
                echo "You can attend the party for 4 hrs only!";
            }
            else{
                echo "You can not go to the party!";
            }

            echo "<br><br>";

        /* Loops in PHP */
        
        /* while loop  */
            echo "<br>This is done using while loop";
            $a = 0;
            while ($a <= 10) {
                echo "<br>The value of a is: ". $a;
                $a++;
            }
        echo "<br>";

        /* do-while loop */
            echo "<br>This is done using do while loop";
            $d=100;
            do{
                echo "<br>The number is : ".$d;
                $d--;
            }
            while($d > 89);
        echo "<br>";

        /* for loop  */
            echo "<br>This is done using for loop";
            for($i=10;$i<=20;$i++)
            {
                echo "<br>The value of i is : ". $i;
            }
        echo "<br>";

        /* for-each loop make it easy to itterate the arrays  */
            /* so lets first declare an array */
            $lang = array(" c++ ", " c ", " python ", " kotlin ", " html ", " css ", " php ");
            
            echo "<br>This is done to the array using foreach loop";
            foreach ($lang as $value) {
                echo "<br>The value is ". $value;
            }
        echo "<br>";    

        /* User Defined Functions in PHP */
        /* Function keyword is used to define any function!*/
        /* And we can access a function as many time as we wish in PHP! */
        function xyz(){
            echo "<br>This is a function to print xyz in PHP!";
        }
        xyz();
        xyz();
        xyz();
        xyz();
        echo "<br>";
        /* more examples of functions */
        function num($n){
            echo "<br>Given number is ". $n;
        }
        num(5);
        num(10);
        num(9876);
        num(2001);
            
        ?>
    </div>
</body>
</html>