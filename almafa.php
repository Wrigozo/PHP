<?php
$nev="";
$jelszo="";
$email="";
if(isset($_POST["bejelentkezes"]))
{
    $nev=$_POST["nev"];
    $jelszo=$_POST["jelszo"];
    $email=$_POST["email"];
}
$error=true;

if(isset($_POST["bejelentkezes"]))
{
        if(!(empty($nev))&&!(empty($jelszo))&&!(empty($email)))
            {
                $error=false;
            }
}

if($error==true){
?>
<html>
    <head></head>
    <body>
        <form method="post" action="";>
             <table>
                <tr><td>Név</td><td><input type="text" name="nev" placeholder="user1"></td></tr>
                <tr><td>Jelszó</td><td><input type="text" name="jelszo"></td></tr>
                <tr><td>E-mail</td><td><input type="text" name="email" placeholder="asd@asd.com"></td></tr>
                <tr><td><input type="submit" name="bejelentkezes" value="Bejelentkezés"</td></tr>
            </table>    
        </form>    
    </body>
</html>
<?php 
}
if($error==false){ 
?>
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
            echo"<td ";
                if ($i%2==0) echo"bgcolor='lightpink'>"; 
                else echo"bgcolor='purple'>";;
                        if($j%2==1) {echo"<img src='img/almafa.jpg'>";}
                        else        {echo"$i".".$j";}
            echo"</td>";
        }
        echo"</tr>";
    }
}
 
    ?>
</table> 
</body>
</html>
    