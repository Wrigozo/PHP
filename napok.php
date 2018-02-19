<?php
$send="false";
$napok=array(
                array("1", "hétfő"),
                array("2", "kedd"),
                array("3", "szerda"),
                array("4", "csütörtök"),
                array("5", "péntek"),
                array("6", "szombat"),
                array("7", "vasárnap")
);
if(isset($_POST["ok"]))
{
    $send=true;
    $napkod=$_POST["nap"];
}
?>
<html>
<head></head>
<body>
    <form method="post" action="">
        <select name="nap">
            <?php
            foreach($napok as $tage)
            {
                echo"<option value='$tage[0]'>$tage[1]</option>";
            }
            ?>
        </select>
        <input type="submit" name="ok" value="OK"> 
        <?php
        if(isset($_POST["ok"]))
        {
            if(empty($napkod))
            {
                $send=false;
                echo"Válassz ki egy napot!";
            }
        }
        ?>
    </form>
</body>
</html>