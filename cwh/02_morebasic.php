<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: chocolate;
        margin: auto;
        padding: 24px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets lear about php</h1>
        <p>Your party status is here:</p>
        <?php
        $age = 8;
        if ($age>18){
            echo "You can go to the party"; 
        }
        else if ($age==8){
            echo "You are 8 year old"; 
        }
        else{
            echo "You can not go to the party"; 
        }
        echo "<br>";
        // Array
        $language = array ("Python", "C++", "php");
        // Echo $language[0]; 
        // Echo count($language); 

        // Loops in php 
        $a = 0;  
        while ($a <= 10){
            echo "<br>The value of a is: ";
            echo $a;
           $a++;

        }
        // Iterating Arrays in php using while Loop 
        $a = 0;  
        while ($a < count($language)){
            echo "<br>The value of languges is: ";
            echo $language[$a];
           $a++;

        }
            //Do while Loop in php 

        $a = 200;  
        do {
            echo "<br>The value of a is: ";
            echo $a;
           $a++;
        }while ($a < 10);


            //For loop
        
        for ($a=200; $a < 10; $a++) { 
            echo "<br>The value of a from the for loop is: ";
            echo $a;
        }

        foreach ($language as $value){
        echo "<br>the value of a from the foreach loop is";
        echo $value;
        }
        
        function print5(){
            echo "Five";
        }
        print5();
        print5();
        print5();
        print5();
        function print_number($number){
            echo "<br> Your number is ";
            echo $number;
        }
        print_number(45);
        print_number(435);
        print_number(5); 
     ?> 
        </div>

</body>
</html>
