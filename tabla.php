<?php
echo "<table style='margin:0 auto'>";
for($i=1; $i<=10; $i++){
echo "<tr>";
    for($j=1; $j<=10; $j++){
    $r=rand(1,6);
    switch($r){
        case 1: echo"<td style=' width:20px; height:20px; background:blue;'></td>"; break;
        case 2: echo"<td style=' width:20px; height:20px; background:pink;'></td>";break;
        case 3: echo"<td style=' width:20px; height:20px; background:green;'></td>";break;
        case 4: echo"<td style=' width:20px; height:20px; background:yellow;'></td>";break;
        case 5: echo"<td style= 'width:20px; height:20px; background:red;'></td>";break;
        case 6: echo"<td style=' width:20px; height:20px; background:purple;'></td>";break;
    }
    }
echo"</tr>";
}
echo"</table>";
?>
    