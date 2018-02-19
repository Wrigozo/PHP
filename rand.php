<?php
$s=rand(1,30);
echo"Darabszám: ".$s;
$vszamok;
for($i=0; $i<$s; $i++)
{
    $vszamok[$i]=rand(2,567);
}
echo"<br>Vszámok: $vszamok[0]";
for($i=0; $i<$s; $i++)
{
    if($i!=0)
    echo "&".$vszamok[$i];
}
if($s>=4){
echo "<br>Eredmény: $vszamok[3]";}
else echo"<br>Nincs eredmény!";
for($i=0; $i<$s; $i++)
{
    if(($i+1)%4==0&&$i!=3)
    echo "&".$vszamok[$i];
}
?>