<?php
////    echo 'Hello World';
//    echo "<html>";
//        echo "<head>";
//            echo "<title>";
//                echo "HOME";
//            echo "</title>";
//        echo "</head>";
//        echo "<body>";
//                echo "<h1>This is a heading</h1>";
//                echo "<p>This is a paragraph.</p>";
//        echo "</body>";
//    echo "</html>";
//?>
<!---->
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--    <head>-->
<!--        <meta charset="UTF-8">-->
<!--        <meta name="viewport"-->
<!--              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--        <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--        <title>--><?php //echo "HOME";?><!--</title>-->
<!--    </head>-->
<!--    <body>-->
<!--        <h1>--><?php //echo "This is a heading";?><!--</h1>-->
<!--        <p>--><?php //echo "This is a paragraph.";?><!--</p>-->
<!--        <input type="text" value="--><?php //echo "Hello world!";?><!--">-->
<!--    </body>-->
<!--</html>-->


<?php
    //Major rules for creating a variable
    /*
     * start with $ sign
     * (A-Z),(a-z),(0-9),_
     * no number in first
     **/

    //Standard rules for creating a variable
    /*
     * small letter
     * meaningful
     * readable
     **/

//    $firstName = "Mosabbir";
//    $lastName = "Rehan";
//    echo $firstName. " ". $lastName;



    /*
     * Arithmetic Operator
        * Binary Operator(+,-,*,/,%)
        * Unary Operator(++,--,(-))
     * Assignment Operator
         =,+=,-=,*=,/=,%=,.=
     * Conditional Operator
         >,>=,<,<=,==,===,!=,!==
     * Logical Operator
         &&,||,!
     * */

//    $x = 10;
//    $y = 20;
//    echo $x + $y;
//    echo "<br>";
//    echo $x - $y;
//    echo "<br>";
//    echo $x * $y;
//    echo "<br>";
//    echo $x / $y;
//    echo "<br>";
//    echo $x % $y;
//    echo "<br>";

//    $a = -10;
//    $b = 20;
//    echo $a++;//10
//    echo "<br>";
//    echo $a;//11
//    echo ++$a;//11
//    echo "<br>";
//    echo $a;//11
//    echo $a--;//10
//    echo "<br>";
//    echo $a;//9
//    echo --$a;//9
//    echo "<br>";
//    echo $a;//9
//    echo -$a;

//    $x = 10;
//    $y = 20;
//    echo $x+=$y;//$x = $x + $y //30
//    echo '<br>';
//    echo $x-=$y;// 10
//    echo '<br>';
//    echo $x*=$y;// 200
//    echo '<br>';
//    echo $x/=$y;// 10
//    echo '<br>';
//    echo $x%=$y;// 10
//    echo '<br>';
//    echo $x.=$y;// 1020


//    $x = 10;
//    $y = 20;
//    echo $x>$y;
//    echo '<br>';
//    echo $x>=$y;
//    echo '<br>';
//    echo $x<$y;
//    echo '<br>';
//    echo $x<=$y;
//    echo '<br>';
//    echo $x==$y;
//    echo '<br>';
//    echo $x===$y;
//    echo '<br>';
//    echo $x!=$y;
//    echo '<br>';
//    echo $x!==$y;

//    $x = 10;
//    $y = 20;
//    $z = 30;
//
//    echo ($x<$y)&&($y<$z);
//    echo '<br>';
//    echo ($x>$y)&&($y>$z);
//    echo '<br>';
//    echo ($x<$y)&&($y>$z);
//    echo '<br>';
//    echo ($x>$y)&&($y<$z);
//    $x = 10;
//    $y = 20;
//    $z = 30;
//
//    echo ($x<$y)||($y<$z);
//    echo '<br>';
//    echo ($x>$y)||($y>$z);
//    echo '<br>';
//    echo ($x<$y)||($y>$z);
//    echo '<br>';
//    echo ($x>$y)||($y<$z);
//
//    $a = false;
//    echo !$a;

        //Statement
        /*
            * Single line statement
            * conditional statement
                * IF
                * IF ELSE
                * IF ELSE IF
                * SWITCH
            * Repeated statement
                * FOR
                * WHILE
                * DO...WHILE
                * FOREACH
         */

//        $x = 10;
//        $y = 20;


//        if ($x>$y){
//            echo 'Hello World';
//        }
//        if ($x>$y){
//            echo 'Hello World';
//        } else {
//            echo 'Hello Bangladesh';
//        }

//        $x = 10;
//        $y = 20;
//        $z = 30;
//        if($x>$y){
//            echo 'Hello World';
//        } else if ($y>$z){
//            echo 'Hello Bangladesh';
//        } else if($z>$x){
//            echo 'Hello Dhaka';
//        } else{
//            echo 'Hello BITM';
//        }
//        $x = 10;
//
//        switch ($x){
//            case 10:
//                echo 'Hello World';
//                break;
//            case 20:
//                echo 'Hello Bangladesh';
//                break;
//            case 30:
//                echo 'Hello Dhaka';
//                break;
//            default:
//                echo 'Hello World';
//        }

//        for($x = 1;$x <= 10; $x++){
//            echo $x.'<br>';
//        }
//        $x = 1;
//        while ($x <= 10){
//            echo $x.'<br>';
//            $x++;
//        }
        $x = 10;
        do{
            echo $x.'<br>';
            $x++;
        }while($x<=20)



?>
