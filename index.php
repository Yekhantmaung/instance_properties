<?php
// instance properties , instance method

class Sample{
    public $name = "Hello World";  // Instance Properties
    function sample () {           // Instance Method
        echo "Hello World";
    }
}
$change= new Sample();
echo $change->name;
echo $change->sample();

?>