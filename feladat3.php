<?php
 $azonosito="";
$nev="";
$kor="";
$foglalkozas="";
if(isset($_POST["kuldes"]))
{
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
        <?php 
        if (isset($_POST["kuldes"])){
            if(!(empty($azonosito)))
                {echo"<td><img src='img/1.png'></td>";} 
            else 
                echo"<td><img src='img/2.png'></td>"; }?>
    <td>Azonosító</td><td><input type="text" name="azonosito" placeholder="user1" value="<?php echo"$azonosito"; ?>"></td></tr>
        
    <tr>
        <?php 
        if (isset($_POST["kuldes"])){
            if(!(empty($nev)))
                {echo"<td><img src='img/1.png'></td>";} 
            else 
                echo"<td><img src='img/2.png'></td>";} ?>
    <td>Név</td><td><input type="text" name="nev" placeholder="Béla" value="<?php echo"$nev"; ?>"></input></td></tr>
    
    <tr>
        <?php 
        if (isset($_POST["kuldes"])){
            if(!(empty($kor)))
                {echo"<td><img src='img/1.png'></td>";} 
            else 
                echo"<td style=' height:10px; width:10px'><img src='img/2.png'></td>";} ?>
    <td>Kor</td><td><input type="text" name="kor" value="<?php echo"$kor"; ?>"></td></tr>
    
    <tr>
        <?php 
        if (isset($_POST["kuldes"])){
            if(!(empty($foglalkozas)))
                {echo"<td><img src='img/1.png'></td>";} 
            else 
                echo"<td style=' height:10px; width:10px'><img src='img/2.png'></td>";} ?>
    <td>Foglalkozás</td><td><input type="text" name="foglalkozas" value="<?php echo"$foglalkozas"; ?>"></td></tr>
    
    <tr><td><input type="submit"name="kuldes"value="küldés"></td></tr>
    </form>
</table>
</body>
</html>