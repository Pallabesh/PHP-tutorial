<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .main{
            margin: auto;
            padding: 10px;
            width: 60%;
            background-color: rgb(201, 244, 201);
            border: 2px solid crimson;
            color: crimson;
            box-sizing: border-box;
        }
    </style>
</head>
<body>
    <div class="main">
    <?php
        echo "<b>Array Methods</b><br>";
    /* Array methods */
        $lang = array(" c++ ", " c ", " python ", " kotlin ", " html ", " css ", " php ");
        echo $lang[3]; 
        echo $lang[6]; 
        echo $lang[0];
    /* Count method in ARRAY */
        echo "<br>Number of elements in string: ".count($lang);
        echo "<br><br>";

        echo "<b>String Methods</b><br>";
    /* String methods */
        $str = "String Methods in PHP!"; 

    /* String length  */
        echo "The string is:<br>". $str;
        
    /* 'strlen' is used to calculate the string length */
        echo "<br>The length of the string is :".strlen($str);
    
    /* 'str_word_count' is used to count words of the string */
        echo "<br>The number of words in the string ".$str. " is ".str_word_count($str);

    /* 'strrev' is used to reverse the string */
        echo "<br>The reversed string is ".strrev($str);
    
    /* 'strpos' is used to get position of a specific word in the string. */
        echo "<br>The position of the word 'in' is: ".strpos($str, 'in');

    /* 'str_replace' is used to replace a word in a string. */
        echo "<br>If we will replace 'PHP' with 'Hypertext', then the string will be <br>".str_replace('PHP', 'Hypertext', $str);  
        /*  this method will replace all the 'PHP' in the string with 'Hypertext'  */
    ?>
    </div>
</body>
</html>