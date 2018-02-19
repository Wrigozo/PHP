<?php
$felhasznalo="fe";
$jelszo="hts";
     if(isset($_POST["bejelentkezes"]))
     {
         $felhasznalo=$_POST["felhasznalo"];
         $jelszo=$_POST["jelszo"];
     }
$id="asd";
$pass=123;
$error=true;
        if(isset($_POST["bejelentkezes"]))
        {
            if($felhasznalo==$id&&$pass==$jelszo)
            {
                $error=false;
            }
        }
if($error==true){
?>
                    <html>
                    <head></head>
                        <body>
                            <table>
                            <form method="post" action="">
                            <tr><td <?php if(isset($_POST["bejelentkezes"])){if(empty($felhasznalo)) echo"style='border: solid 1px red;'";} ?>>Felhasználónév:</td><td><input type="text" name="felhasznalo" ></td></tr>

                            <tr><td <?php if(isset($_POST["bejelentkezes"])){if(empty($jelszo)) echo"style='border: solid 1px red;'";} ?>>Jelszó:</td><td><input type="text" name="jelszo" ></td></tr>
                            <tr><td><input type="submit" name="bejelentkezes" value="Bejelentkezés"</td></tr>
                            <?php
                                if(isset($_POST["bejelentkezes"]))
                                {
                                      if((empty($felhasznalo))&&(empty($jelszo)))
                                    {
                                        echo"<tr><td>Mindkét mező kitöltése kötelező!</td></tr>";
                                    }

                                    if(!($id==$felhasznalo)&&!(empty($felhasznalo))&&$jelszo==$pass)
                                    {
                                        echo"<tr><td>Rossz felhasználónév!</td></tr>";
                                    }
                                     if(!($pass==$jelszo)&&!(empty($jelszo))&&($id==$felhasznalo))
                                    {
                                        echo"<tr><td>Rossz jelszó!</td></tr>";
                                    }
                                    if(!($id==$felhasznalo)&&!($pass==$jelszo)&&(!(empty($felhasznalo))&&!(empty($jelszo))))
                                    {
                                        echo"<tr><td>Nagyon hülye vagy! :D</td></tr>";
                                    }
                                } 
                    }   
if($error==false)
{

?>
                        <html>
                            <head></head>
                            <body>
                        <table>
                                <?php
                                    $db=1;
                                    for($i=1;$i<11;$i++){
                                        echo "<tr>";
                                        $db+=1;
                                        for($j=1;$j<=10;$j++){
                                            $szam=$i*$j;
                                            if($db%2==1){
                                                echo"<td style='background-color:black;color:white;'>$szam</td>";
                                                $db++;
                                            }
                                            else{
                                                echo"<td style='background-color:white;color:black;'>$szam</td>";
                                                $db++;
                                            }
                                        }
                                        echo "</tr>";
                                    }
                                ?>
                            </table>
                            </body>
                        </html>
<?php
}?>