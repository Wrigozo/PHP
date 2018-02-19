<?php
$napok=array("hétfő","kedd","szerda","csütörtök","péntek","szombat","vasárnap");
$nevek=array("András", "Béla", "Cecil", "Dániel", "Elemér", "Ferenc", "Gábor");

if(isset($_POST["send"]))
{
    $indexek=$_POST["nap"];
    //$i=0;
    for($i=0; $i<7; $i++)
    {
        if($indexek==$i)
        {
            echo"$nevek[$i]";
        }
    }/*
    $nev=$nevek[$indexek];
    echo $nev;*/
}
?>
<html>
    <head></head>
    <body>
        <form method="post" action="">
            <select name="nap">
        <?php
                $i=0;
            foreach($napok as $elem)
            {
                echo"<option value='$i'>$elem</elem>";
                $i++;
            }
        ?>
            </select>
            <input type="submit" name="send" value="ok">
        </form>
    </body>
</html>
