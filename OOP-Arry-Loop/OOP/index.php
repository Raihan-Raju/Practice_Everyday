<?php
class test{
 public $name;
 public $color;
 public $price;
  

 public function call($name, $color, $price ){
    echo $this->name = $name .' ' ;
    echo $this->size = $color .' ' ;
    echo $this->price = $price;

 }

}

$obj = new test();
$obj->call('BRB', 'White', 2800);
echo "</br>";
$obj->call('BRB', 'White', 2800);
echo "</br>";
$obj->call('BRB', 'White', 2800);
echo "</br>";
$obj->call('BRB', 'White', 2800);
echo "</br>";
$obj->call('BRB', 'White', 2800);
echo "</br>";


?>

<!-- error is 3 

1 Notice erroe
2 worning error
3 Fatal error

-->



 