<?php
$a=array(1,2,3,4,5);
$b=array(2,1,3,5,4);
$len=count($a);
$count=0;

for($x=0;$x<$len;$x++)
{
    for($j=0;$j<$len;$j++)
    {
        if($a[$x] == $b[$j])
        {
            $count++;
            break;

        }
    }
}
if($count == $len)
{
    echo "same elements";
}
?>