<?php
$rendeles=false;
if(isset($_POST["rendeles"]))
{
    $rendeles=true;
    $db1=$_POST["magyaros"];
    $db2=$_POST["mexikoi"];
    $db3=$_POST["hawaii"];
    $db4=$_POST["tirolese"];
}
?>
<!DOCTYPE html>
<head></head>
<body>
<table>
<form method="post" action="">
<tr>
    <td>Név:</td>
    <td>Darab:</td>
</tr>
    <tr>
    <td>Magyaros 1200Ft/db</td>
    <td><input type="number" name="magyaros"</td>
</tr>
    <tr>
    <td>Mexikói 1000Ft/db</td>
    <td><input type="number" name="mexikoi" </td>
</tr>
    <tr>
    <td>Hawaii 1300Ft/db</td>
    <td><input type="number" name="hawaii"</td>
</tr>
    <tr>
    <td>Tirolese 1100Ft/db</td>
    <td><input type="number" name="tirolese"</td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" name="rendeles" value="Rendel"</td>
</tr>  
    </form>
</table>
<?php
    if($rendeles==true){
    $magyaros=1200;
    $mexikoi=1000;
    $hawaii=1300;
    $tirolese=1100;
    if($db1==null)
    {
        $db1=0;
    }
     if($db2==null)
    {
        $db2=0;
    }
     if($db3==null)
    {
        $db3=0;
    }
     if($db4==null)
    {
        $db4=0;
    }
    echo "Fizetendő: ";
    echo ($db1*$magyaros)+($db2*$mexikoi)+($db3*$hawaii)+($db4*$tirolese)." Ft";}
?>
</body>
</html>