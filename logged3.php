<?php
session_start();
$file="reg.txt";
$emptystyle=" style='border: solid red 1px;'";
$emptytext="<td>Mező kitöltése kötelező!</td>";
$error=0;
$send=false;
if(isset($_POST["modify"]))
{
    $error=2;
    @$id=trim($_POST["id"]);
    @$user=trim($_POST["user"]);
    @$regi=trim($_POST["regi"]);
    @$uj=trim($_POST["uj"]);
    if(empty($id)&&empty($user)&&empty($regi)&&empty($uj))
    {
      $error=1;  
    }
    if((!empty($id))&&!(empty($user))&&!(empty($regi))&&!(empty($uj)))
    {
      $send=true;  
    }
}
function modosit($filename,$az, $user, $mit,$mire){
    $fo=fopen($filename,"r");
    $fo2=fopen($filename."tmp","w");
    $important=$az.",".$user.",".$mit;
    while(!feof($fo)){
        $sor=fgets($fo);
        $elem=explode(",",$sor);
        if(trim($important)!=$sor)
            fwrite($fo2,$sor);
        else
            fwrite($fo2,$elem[0].",".$elem[1].",".$mire."\r\n");
       
    
    }
        fclose($fo);
        fclose($fo2);
        unlink($filename);
        rename($filename."tmp",$filename);
   
}
if(isset($_SESSION["belep"]))
       { if(isset($_POST["modify"]))
           {
               $fo=fopen($file, "r");
               while(!feof($fo))
               {
                   $sor=fgets($fo);
                   $elem=explode(",",$sor);
               }
               if(($_SESSION["felh"])==$user&&$_SESSION["jelsz"]==$regi)
               {
                   
                       modosit($file, $id, $user, $regi, $uj);
                   
               }

           }
       }
else{
       header("location:reg.php");
       if(isset($_POST["logout"]))
       {
        session_destroy();
        header("location:reg.php");
        }
}
?>
<html>
    <table>
    <form method="post" action="">
                    <tr>
                        <td>ID</td><td colspan="2" 
                            <?php if(isset($_POST["modify"])){
                                if(empty($id)) echo $emptystyle;
                            ;}
                            ?> >
                        <input type="text" name="id"></td>
                        <?php
                        if(isset($_POST["modify"])){
                        if(empty($id)&&$error!=1) echo $emptytext;} ?>
                    </tr>
                    <tr>
                        <td>Felhasználónév:</td><td colspan="2" <?php if(isset($_POST["modify"])){if(empty($user)||$error==1) echo $emptystyle;}?>><input type="text" name="user"></td>
                         <?php
                        if(isset($_POST["modify"])){
                        if(empty($user)&&$error!=1) echo $emptytext;} ?>
                        
                    </tr>
                    <tr>
                        <td>Régi jelszó:</td><td colspan="2" <?php if(isset($_POST["modify"])){if(empty($regi)||$error==1) echo $emptystyle;}?> ><input type="text" name="regi"></td>
                         <?php
                        if(isset($_POST["modify"])){
                        if(empty($regi)&&$error!=1) echo $emptytext;} ?>
                    </tr>
                    <tr>
                        <td>Új jelszó:</td><td colspan="2" <?php if(isset($_POST["modify"])){if(empty($uj)||$error==1) echo $emptystyle;}?> ><input type="text" name="uj"></td>
                         <?php
                        if(isset($_POST["modify"])){
                        if(empty($uj)&&$error!=1) echo $emptytext; }?>
                    </tr>
           
            
                    <tr>
                        <td><input type="submit" name="modify" value="Módosítás" /></td>
                        <td><input type="submit" name="list" value="Listáz"></td>
                        <td><input type="submit" name="logout" value="Kilépés"></td>
                    </tr>
        </form>
    </table>
</html>