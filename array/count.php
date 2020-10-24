<?php
$a=array(1,1,1,1,1,1,0,0,0,0,0);
$len=count($a);
$count=0;
$x=0;
while($a[$x] !=0)
{
    $count++;
    $x++;
}
$countz=$len-$count;
echo $countz;
?>

