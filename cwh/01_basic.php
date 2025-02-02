<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
    <div class="container"> 
    This is my first php website
    <?php
    define ( 'PI' , 3.14 );
      echo "this printed using php";
    //  single line comment 
    /*
    This 
    is
     a multipul
      line comment
    */
    $variable1 = 5;
    $variable2 = 4;
    echo $variable1; 
    echo $variable2;
    // operator in php 
    // Arithmetic operators
    echo "<br>";
    echo"the value of variable1 + variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo"the value of variable1 - variable2 is ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo"the value of variable1 * variable2 is ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo"the value of variable1 / variable2 is ";
    echo $variable1 / $variable2;
    echo "<br>";
    // Assignment operators
   $newvar = $variable1;
  //  $newvar += 1;
  //  $newvar -= 1;
  //  $newvar *= 1;
  //  $newvar /= 2;
   echo"the value of new variable is ";
   echo $newvar;
   echo "<br>";
    // Comparison operators
    // echo "<h1> Comparison operators </h1>";
    echo "the value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";
    echo "the value of 1!=4 is "; 
    echo var_dump(1!=4);
    echo "<br>";
    echo "the value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";
    echo "the value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";

    // Increment/Decrement operators
    // echo $variable1++;
    // echo "<br>";
    // echo $variable1;
    // echo $variable1--;
    // echo ++$variable1;
    // echo --$variable1;
    // echo "<br>";
    // echo $variable1;
    // Logical operators
    // and (&&)
    // or (||)
    // xor 
    // !
    // $myVar = (true) or (true);
    // $myVar = (false) xor (true);
    // echo "<br>";
    // echo var_dump($myVar);
      
      ?>   
      
    <?php
      // Data type in php 
      // 1.string  
      // 2.integer
      // 3.object
      // 4.Array
      // 5.float 
      // 6.Boolean 
      echo "<br> Data type <br>";

      $var = "this is a string";
      echo var_dump($var);
      echo "<br>";

      $var = 67;
      echo var_dump($var);
      echo "<br>";

      $var = 67.1;
      echo var_dump($var);
      echo "<br>";    

      $var = true;
      echo var_dump($var);
      echo "<br>";  
        
      echo PI;
      ?>   
    </di>
</body>
</html>