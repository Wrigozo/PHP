<?php
$napok=array("hétfő", "kedd", "szerda", "csütörtök", "péntek", "szombat", "vasárnap");
$send=false;
if(isset($_POST["ok"]))
{
    $send=true;
    echo"$napok[$_POST['nap']]";
}
    if($send==false){
?>
<html>
<head></head>
<body>
    <form method="post" action="">
    <select name="nap">
    <?php
        for($i=0; $i<count($napok); $i++){
         
            echo"<option value='$i'>$napok[$i]</option>";
        }
    ?>
    </select>
    <input type="submit" name="ok" value="ok">
    </form>
</body>
</html>
<?php } ?>