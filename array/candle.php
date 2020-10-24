<?php

$a=array(1,5,3,2);
$len=count($a);
$temp=0;

for($x=0;$x<$len;$x++)
{
    if($a[$x] > $temp)
    {
        $temp=$a[$x];
    }
}
echo $temp;

?>