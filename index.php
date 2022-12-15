<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

// variable
$color = "red";

$text = "text";
$text2 = "this is text two ";


echo "this is text one, " .$text2.", this is text three. <br>";
echo "this is $text <br>";
echo $color ."<br>";
echo "My first PHP page <br>";


// sum

$x= 5;
$y = 10;

echo  "Sum :". $x + $y ."<br>";

function sum (){
    $a = 10;
    echo $a;
}

sum();


$data = array('text1', 'text2');

var_dump($data);




// class
class Car {
    public $model = "Mercedes Bense";
    public $color = "red";
    public function message() {
      return "<br> My car is a " . $this->color . " " . $this->model . "!";
    }
  }

  $myCar = new Car();
  echo $myCar->message() ;



?>

</body>
</html>    