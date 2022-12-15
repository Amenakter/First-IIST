<!DOCTYPE html>
<html lang="en">
<body>
    

<?php

// object
class person{

    public $fullName = "Amena Akter";
    public $roll = 147062;
    public $department ="Computer";

    public function getInformation(){
        return "My name is " .$this->fullName . ".  <br>" . " Roll : " . $this->roll . " , <br> " . "Department :" .$this->department ;
    }
}

    $myInformation = new person();
    echo $myInformation-> getInformation()




    

?>
</body>
</html>