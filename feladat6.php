<?php
$azonosito="";
$nev="";
$kor="";
$foglalkozas="";
$error=true;
            if(isset($_POST["kuldes"]))
            {
                $azonosito=$_POST["azonosito"];
                $nev=$_POST["nev"];
                $kor=$_POST["kor"];
                $foglalkozas=$_POST["foglalkozas"];
               
            }
            if(isset($_POST["kuldes"])){
                if(!(empty($azonosito))&&!(empty($nev))&&!(empty($kor))&&!(empty($foglalkozas)))
                {
                    $error=false;
                }
            }
?>



 <?php
        if($error==true)
        {
        ?>
<html>
    <head></head>
                <body>
                <form method='post' action=''>
                <table>
                <tr>
                
                <tr>
                <td <?php if(isset($_POST["kuldes"])){ if(empty($azonosito)) {echo"style='color:red'";}}?>>Azonosító</td><td><input type='text' name='azonosito' value='<?php echo"$azonosito"; ?>'></td></tr>
                    
                <tr>
                <td <?php if(isset($_POST["kuldes"])){ if(empty($nev)) {echo"style='color:red'";}}?>>Név</td><td><input type='text' name='nev' value='<?php echo"$nev"; ?>' ></td></tr>
                    
                <tr>
                <td <?php if(isset($_POST["kuldes"])){ if(empty($kor)) {echo"style='color:red'";}}?>>Kor</td><td><input type='text' name='kor' value='<?php echo"$kor"; ?>' ></td></tr>

                <tr>
                <td <?php if(isset($_POST["kuldes"])){ if(empty($foglalkozas)) {echo"style='color:red'";}}?>>Foglalkozás</td><td><input type='text' name='foglalkozas' value='<?php echo"$foglalkozas"; ?>'></td></tr>

                <tr><td><input type='submit' name='kuldes' value='küldés'></td></tr>
                </form>
                </table>
                </body>
                </html>
    
 <?php
        }
        ?>  




        <?php
        if($error==false)
        {
        ?>
                <html>
                <head></head>
                <body>
                <table>
                <tr><td>Azonosító</td><td><?php echo "$azonosito"; ?></td></tr>    
                <tr><td>Név</td><td><?php echo"$nev"; ?></td></tr>   
                <tr><td>Kor</td><td><?php echo"$kor"; ?></td></tr>    
                <tr><td>Foglalkozás</td><td><?php echo"$foglalkozas"; ?></td></tr>
                </table>
                </body>
                </html>
        <?php
        }
        ?>   