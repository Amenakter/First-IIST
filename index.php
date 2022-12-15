<!DOCTYPE html>
<html lang="en">

<body>
    <?php
// foreach

        $color = array("red" , "orange", "blue", "green", "yellow");

        foreach ($color as $value){
            echo "$value <br>";
        }


    $students = array ("Amena" => 100, "Tania" => 500, "Maksuda" => 200, "Sharmin" => 400, "Sohana" =>100, "Sultana" => 300);

    echo "<br> {$students['Amena']} <br>";
    foreach($students as $name => $tk){
     echo $name . " : " . $tk . "tk". "<br>";
    
    }

    // function

    function sum($x , $y){
        return $x + $y;
    }

    $v = sum(5 , 5);
    echo "Sum : $v <br>";
    $v2 = sum(10 , 5);
    echo "Sum : $v2 <br>";


    function simple ($x , $y) {
        $z = $x**2 + 3*$x + 9*$y + 6*($y**2) + 32*$x + 7*($y**3);
        return $z;
    }

    $v3 = simple(2, 3);
    echo "(a+b)<sup>3</sup> = $v3 <br>";
    $v4 = simple(3, 3);
    echo "(a+b)<sup>3</sup> = $v4";

    // indexed


    $cars = array("Volvo", "BMW", "Toyota");

    echo "<br> I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ". <br>";
    
    $arrlength = count( $cars);

    for($x = 0; $x < $arrlength; $x++) {
        echo $cars[$x];
        echo "<br>";
      }
      
    echo "array length : $arrlength ";

    ?>



</body>

</html>