<?php
    session_start();
    header("Content-type:text/html;charset=utf-8");
    $emptystyle="style='border: 1px solid red;'";
    $emptytext="<td>Mező kitöltése kötelező!</td>";
    $error=0;
    $send=false;
    $send2=false;
    $file="reg.txt";
    if(isset($_POST["reg"])||isset($_POST["belep"]))
    {
       $error=2;
        $id=$_POST["id"];
        $felh=$_POST["felh"];
        $jelsz=$_POST["jelsz"];
                                    if(empty($id)&&empty($felh)&&empty($jelsz))
                                    {
                                        $error=1;

                                    }
                                    if(!empty($id)&&!empty($felh)&&!empty($jelsz))
                                    {
                                        $send=true;
                                    }
                                    if(!empty($felh)&&!empty($jelsz)) $send2=true;
        
    }
   

function check($filename, $adat)
{
    $out=false;
    $fo=fopen($filename,"r");
    while(!feof($fo))
    {
        $sor=fgets($fo);
        $elem=explode(",",$sor);
        if(trim($elem[0])==$adat)
        {
             $out=true;
        }
    }
    return $out;
    fclose($fo);
}
function add($filename, $adat, $adat1, $adat2)
{
    $fo=fopen($filename,"a");
   
        fwrite($fo,"\r\n".$adat.",".$adat1.",".$adat2);
  fclose($fo);
}
function login($filename, $adat1, $adat2)
{
    $login=false;
    $user=false;
    $password=false;
    $fo=fopen($filename,"r");
        while(!feof($fo))
                {
                    $sor=fgets($fo);
                    $elem=explode(",",$sor);
                    if(trim($elem[1])==$adat1) {$user=true;}
                    if(trim($elem[2])==$adat2) {$password=true;}
                }
    if($user==true&&$password==true) $login=true;
    return $login;
    fclose($fo);
}
?>
<html>
<head>
    <style>
        #container
        {
            width:1300px;
        }
        table
        {
            background: grey;
            width:500px;
            margin:0 auto;
        }
        #gombok
        {
            margin:0 auto;
            width: 500px;
        }
        #szoveg
        {
            margin:0 auto;
            width:500px;
            
        }
    </style>
</head>
<body>
    <div id="container">
        <table>
            <form method="post" action="">
            <div id="szoveg">
                    <tr>
                        <td>ID</td><td  <?php if(isset($_POST["reg"])){if(empty($id)||$error==1) echo $emptystyle;}?> ><input type="text" name="id"></td>
                        <?php
                        if($error!=1){
                         if(isset($_POST["reg"])&&empty($id)) echo $emptytext;} ?>
                    </tr>
                    <tr>
                        <td>Felhasználónév:</td><td  <?php if(isset($_POST["reg"])||isset($_POST["belep"])){if(empty($felh)||$error==1) echo $emptystyle;}?>><input type="text" name="felh"></td>
                         <?php
                        if(isset($_POST["reg"])||isset($_POST["belep"])){
                        if($error!=1&&empty($felh)) echo $emptytext;} else echo"";?>
                        
                    </tr>
                    <tr>
                        <td>Jelszó:</td><td  <?php if(isset($_POST["reg"])||isset($_POST["belep"])){if(empty($jelsz)||$error==1) echo $emptystyle;}?> ><input type="text" name="jelsz"></td>
                         <?php
                        if(isset($_POST["reg"])||isset($_POST["belep"])){
                        if($error!=1&&empty($jelsz)) echo $emptytext;} else echo"";?>
                    </tr>
            </div>
            <div id="gombok">
                    <tr>
                        <td><input type="submit" name="reg" value="Regisztrál" /></td>
                        <td><input type="submit" name="belep" value="Belépés"></td>
                    </tr>
            </div>
                <?php
                 if(isset($_POST["reg"])){
                    if($error==1) echo "<tr><td>Mezők kitöltése kötelező!</td></tr>";}
                 if(isset($_POST["belep"])){
                    if(empty($felh)&&empty($jelsz))  echo "<tr><td>Mezők kitöltése kötelező!</td></tr>";}
                
                    if(isset($_POST["reg"])&&$send==true)
                        {
                            $id=trim($_POST["id"]);
                            $felh=trim($_POST["felh"]);
                            $jelsz=trim($_POST["jelsz"]);
                            if(check($file, $id)==true) echo"<tr><td>Létező ID azonosító!</td></tr>";
                            else
                            {
                                add($file, $id, $felh, $jelsz);
                                echo"<tr><td>Sikeres regisztráció!</td></tr>";
                            }

                        }
              if((isset($_POST["belep"]))&&($send2==true))
                {
                    
                    $felh=trim($_POST["felh"]);
                    $jelszo=trim($_POST["jelsz"]);
                    if(login($file, $felh, $jelsz)==true)
                    { 
                        $_SESSION["belep"]=true;
                        $_SESSION["felh"]=$felh;
                        $_SESSION["jelsz"]=$jelszo;
                        header("location: logged3.php");
                    }
                    else echo"<tr><td>Felhasználónév/jelszó hibás!</td></tr>";
                }
              
                ?>
            </form>
        </table>
    </div>
</body>
</html>