<?php
$name="ilyas";
$its_student=true;
$its_orphan=true;
$country="egypt";
$country_discount=50;
$price=100;
$student_discount=10;
$orphan_discount=15;

$price-$student_discount;



if ($country=="egypt") {
    
    if($its_student==true)
{
        if($its_orphan==true) {}
}
echo"price is " . $price  - $country_discount - $student_discount - $orphan_discount;


}  else {
    echo "$name there is no discount";
}



?>