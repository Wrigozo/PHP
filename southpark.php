<?php
$send=false;
if(isset($_POST["kuldes"]))
{
    $send=true;
    $azonosito=$_POST["azonosito"];
    $nev=$_POST["nev"];
    $kor=$_POST["kor"];
    $foglalkozas=$_POST["foglalkozas"];
}
?>
<!DOCTYPE html>
<head></head>
<body>
    <table>
        <form method="post" action="">
        <tr>
            <td>Azonosító</td>
            <td><input type="text" name="azonosito" placeholder="user3"></td>
        </tr>
        <tr>
            <td>Név</td>
            <td><input type="text" name="nev" placeholder="roni"></td>
        </tr>
        <tr>
            <td>Kor</td>
            <td><input type="text" name="kor" placeholder="7"></td>
        </tr>
        <tr>
            <td>Foglalkozás</td>
            <td><input type="text" name="foglalkozas" placeholder="tanuló"></td>
        </tr>
        <tr>
            <td><input type="submit" name="kuldes" value="Küldés"</td>
        </tr>
        </form>
    </table>
<?php

    
    if($send==true)
    {
        echo"<table border='1'><tr>
        <td>Azonosító</td>      <td>$azonosito</td>     <td rowspan='4'><img src=\"images/".$azonosito.".jpg\"></td>
        </tr>
        <tr>
        <td>Név</td>            <td>$nev</td>
        </tr>
        <tr>
        <td>Kor</td>            <td>$kor</td>
        </tr>
        <tr>
        <td>Foglalkozás</td>    <td>$foglalkozas</td> 
        </tr>
        </table>";
    }
?>
</table>
</body>
</html>