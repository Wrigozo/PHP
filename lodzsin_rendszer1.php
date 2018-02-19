<?php
$azonositok=array(
                    array("user1","Robi","asd"),
                    array("user2","Tomi","123"),
                    array("user3","Szandi", "szek"),
                    array("user4","Gábor", "eger"),
                    array("user5","Ati", "dfg")
                   );
$send=false;
if(isset($_POST["ok"]))
{
    $felh=$_POST["felhasznalo"];
    $name=$_POST["nev"];
    $jelsz=$_POST["jelszo"];
    if(!empty($felh)&&!empty($name)&&!empty($jelsz))
    {
        $send=true;
    }
    else echo"Minden mező kitöltése kötelező!";
}
?>
<html>
<head></head>
<body>
    <table>
    <form method="post" action="">
        <tr><td>Felhasználónév:</td><td><input type="text" name="felhasznalo"
                                               value="<?php
                                                        if(isset($_POST["ok"])&&!empty($felh)) echo"$felh";
                                                        ?>"
                                               ></td></tr>
        <tr><td>Név:</td><td><input type="text" name="nev"
                                            value="<?php
                                                        if(isset($_POST["ok"])&&!empty($name)) echo"$name";
                                                        ?>"
                                        ></td></tr>
        <tr><td>Jelszó:</td><td><input type="password" name="jelszo"></td></tr>
        <tr><td><input type="submit" name="ok" value="ok"></td></tr>
    </form>
    </table>
    <?php 
    if($send==true)
    {
        $sikeres=false;
        for($i=0; $i<5; $i++){
                if($azonositok[$i][0]==$felh&&$azonositok[$i][1]==$name&&$azonositok[$i][2]==$jelsz)
                {
                    $sikeres=true;
                    echo"Sikeres bejelentkezés";break;
                }            
        }
        if($sikeres==false)
        {
             echo"Sikertelen bejelentkezés";
        }
    }
    
    ?>
    
</body>
</html>

