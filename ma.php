<?php
    session_start();
    header("Content-type:text/html;charset=utf-8");
    $emptystyle="style='border: 1px solid red; width='120px;'";
    $emptytext="<td>Mező kitöltése kötelező!</td>";
    $error=0;
    $send=false;
    $send2=false;
    $file="reg.txt";
    if(isset($_POST["belep"]))
    {
       $error=2;
        $felh=trim($_POST["felh"]);
        $jelsz=trim($_POST["jelsz"]);
                                    if(empty($felh)&&empty($jelsz))
                                    {
                                        $error=1;

                                    }
                                    if(!empty($felh)&&!empty($jelsz))
                                    {
                                        $send2=true;
                                    }
        
    }
   
function u($filename, $adat1)
{
    $user=false;
    $fo=fopen($filename,"r");
        while(!feof($fo))
                {
                    $sor=fgets($fo);
                    $elem=explode(",",$sor);
                    if(trim($elem[1])==$adat1) $user=true;
                }
    return $user;
    fclose($fo);
}
function p($filename, $adat2)
{
    $password=false;
    $fo=fopen($filename,"r");
        while(!feof($fo))
                {
                    $sor=fgets($fo);
                    $elem=explode(",",$sor);
                    if(trim($elem[2])==$adat2) $password=true;
                }
    return $password;
    fclose($fo);
}
function up($filename, $adat1, $adat2)
{
    $login=false;
    $fo=fopen($filename,"r");
    while(!feof($fo))
    {
        $sor=fgets($fo);
        $elem=explode(",", $sor);
         if(trim($elem[1])==$adat1&&trim($elem[2])==$adat2) $login=true;
    }
    return $login;
    fclose($fo);
}
?>
<html>
<head>
    <style>
        input
        {
            width: 120px;
        }
        input:focus
        {
            border: solid 1px blue;
        }
        #container
        {
            width:1300px;
        }
        table
        {
            background: grey;
            width:450px;
            margin:0 auto;
        }
        #kep
        {
            background-image: url("img/danger.jpg");
            width:450px;
            height: 300px;
        }
        .cella
        {
            width:120px;
            height:20px;
            float:left;
        }
        #hibak
        {
            height: 25px;
            width:450px;
        }

    </style>
</head>
<body>
    <div id="container">
        <table>
            <form method="post" action="">
            <div id="szoveg">
                    <tr><td id="kep" colspan="3"></td></tr>
                    <tr>
                        <td class="cella">Felhasználónév:</td><td class="cella" <?php if(isset($_POST["belep"])){if(empty($felh)||u($file, $felh)==false) echo $emptystyle;}
                                           ?>><input type="text" name="felh"></td>
                         <?php
                        if(isset($_POST["belep"])){
                        if($error!=1&&empty($felh)) echo $emptytext;} else echo"";?>
                        
                    </tr>
                    <tr>
                        <td class="cella">Jelszó:</td><td class="cella" <?php if(isset($_POST["belep"])){if(empty($jelsz)||p($file, $jelsz)==false) echo $emptystyle;}?> ><input type="text" name="jelsz"></td>
                         <?php
                        if(isset($_POST["belep"])){
                        if($error!=1&&empty($jelsz)) echo $emptytext;} else echo"";?>
                    </tr>
            </div>
            <div>
                    <tr>
                        <td class="cella"><input type="submit" name="belep" value="Belépés"></td>
                    </tr>
            <tr><td class="cella"></div>
            <div id="hibak">
                <?php
                 if(isset($_POST["belep"])){
                    if(empty($felh)&&empty($jelsz))  echo "Mezők kitöltése kötelező!";}
                
              if((isset($_POST["belep"]))&&($send2==true))
                {
                    $i=0;
                    $j=0;
                    
                    $felh=trim($_POST["felh"]);
                    $jelszo=trim($_POST["jelsz"]);
                    if(up($file, $felh, $jelsz)==true)
                    { 
                        $_SESSION["belep"]=true;
                        $_SESSION["felh"]=$felhhh;
                     
                        header("location: ma2.php");
                    }
                    if(u($file, $felh)==false&&p($file, $jelsz)==false) {$i=1; echo"Hibás felhasználónév és jelszó!";}
                    if(u($file, $felh)==false&&p($file, $jelsz)==true)  {$i=1; echo"Hibás felhasználónév!";}
                    if(p($file, $jelsz)==false&&u($file, $felh)==true) {$j=1; echo"Hibás jelszó!";}
                    if(up($file, $felh, $jelsz)==false&&$i==0&&$j==0) 
                            { 
                            echo"Hibás felhasználónév és jelszó!";
                            
                            }
                }
                ?>
                </div></td></tr>
            </form>
        </table>
    </div>
</body>
</html>