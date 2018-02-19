<?php
session_start();
 function modosit($filename,$adat1,$adat2)
    {
        $fo=fopen($filename, "r");
        $fo2=fopen($filename."tmp", "w");
            while(!feof($fo))
            {
                $sor=fgets($fo);
                $elem=explode(",",$sor);
                if(trim($elem[1])!=$adat1)
                    fwrite($fo2,$sor);
                else fwrite($fo2,$elem[0].",".$elem[1].",".$adat2."\r\n");
            }
        
    fclose($fo);
    fclose($fo2);
    unlink($filename);
    rename($filename."tmp",$filename);
    }
if(!isset($_SESSION["belep"])) header("location: ma.php");
else{
    $file="reg.txt";
if(isset($_POST["modify"]))
{
    
    $rnev=trim(isset($_POST["nev"]));
    $ujelszo=trim(isset($_POST["jelszo"]));
    if(empty($rnev)||empty($ujelszo))
         echo "<p $error>Minden mező kitöltése kötelező!</p>";
    else{
        if($_SESSION["felh"]==$rnev)
    modosit(reg.txt, $rnev, $ujelszo);}
}

if(isset($_POST["kilep"]))
{
    session_destroy();
    header("location: ma.php");
}
function listak($filename)
{
    $fo=fopen($filename, "r");
    while(!feof($fo))
    {
       $sor=fgets($fo);
        $elem=explode(",",$sor);
        echo"<tr><td>".$elem[0]."</td><td class='cella'>".$elem[1]."</td><td class='cella'>".$elem[2]."</td></tr>";
    }
}
   
    session_destroy();
}
?>
<html>
<head>
    <style>
        .cella
        {
            width:40px;
        }
    </style>
</head>
<body>
    <table>
    <form method="post" action="">
    <tr>
        <td>Név:</td>
        <td><input type="text" name="nev"></td>
    </tr>
    <tr>
        <td>Új jelszó:</td>
        <td><input type="text" name="jelszo"></td>
    </tr>
    <tr>
        <td><input type="submit" name="modify" value="Módosít"></td>
    </tr>
    <tr><td><input type="submit" name="list" value="Listáz"></td></tr>
    <tr><td><input type="submit" name="kilep" value="Kilépés"></td></tr>
    <?php
        if(isset($_POST["list"]))
        {
            echo"<tr><td><ul>";
            listak($file);
            echo"</ul></td></tr>";
        }
    ?>
    </form>
    </table>
</body>
</html>