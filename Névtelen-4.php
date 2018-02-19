<html>
<head></head>
<body>
<table>
    <?php
    for($i=0; $i<4; $i++)
    {
        echo"<tr>";
        for($j=0; $j<5; $j++)
        {
            echo"<td>";
                if($j%2==1){
                    echo"<img src='img/almafa.jpg'";
                }
                else{
                    echo"$i".".$j";}
            echo"</td>";
        }
        echo"</tr>";
    }
    ?>
</table>   
</body>
</html>