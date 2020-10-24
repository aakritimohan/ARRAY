<?php
 
//array//
$a=array(1,2,3,4);
$len=count($a) ;
$sum=0;

for($x=0;$x<$len;$x++)
{
    $sum=$sum+$a[$x];
}
echo $sum;
?>