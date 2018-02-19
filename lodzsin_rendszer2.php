<?php
$azonositok=array(
                    "user1" =>"Robi",
                    "user2" =>"Tomi",
                    "user3" =>"Szandi",
                    "user4" =>"Gábor",
                    "user5" =>"Ati"
                   );
$azonositok2=array(
                    "user1" =>"asd",
                    "user2" =>"123",
                    "user3" =>"szek",
                    "user4" =>"eger",
                    "user5" =>"dfg"
                   );
$send=false;
if(isset($_POST["ok"]))
{
    $felh=trim($_POST["felhasznalo"]);
    $name=trim($_POST["nev"]);
    $jelsz=trim($_POST["jelszo"]);
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
        foreach($azonositok as $felhasznalo =>$nev)
        {
            foreach($azonositok2 as $felhasznalo =>$jelszo)
            {
                if($felhasznalo==$felh&&$nev==$name&&$jelszo==$jelsz)
                {
                    $sikeres=true;
                    echo"Sikeres bejelentkezés";break;
                }
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