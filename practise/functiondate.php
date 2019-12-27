<?php
   
$temp = "The date is ";
echo $temp . longdate(time());

function longdate($timestamp)
{
    return date("l F jS Y", $timestamp);
}

echo "<br>";

 function test()
 {
    static $count = 0;
    echo $count;
    $count++;
 }

  echo "<br>";
  
   echo "a: [". TRUE  ."]<br>";
   echo "b: [" . FALSE . "]<br>";

?>