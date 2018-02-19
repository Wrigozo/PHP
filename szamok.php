<?php
$szamok=array(1,4,321,415,432,12);
echo"eredmény: ";
for($i=0; $i<count($szamok); $i++)
{
    if($szamok[$i]%2==0||$szamok[$i]%3==0){
        echo $szamok[$i].", ";
    }
}
?>