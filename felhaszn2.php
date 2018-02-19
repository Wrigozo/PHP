<?php
$logged=false;
$nev=$_POST["nev"];
$email=$_POST["email"];
if($nev!=null&&$email!=null){
    $logged=true;
}
?>
<!DOCTYPE html>
    <head></head>
    <body>
        <table>
        <form method="post" action="">
        <tr>
        <td>Név:</td>
        <td><input type="text" name="nev"></td>
        </tr>
        <tr>
        <td>Email-cím:</td>
        <td><input type="text" name="email"></td>
        </tr>
        <tr>
        <td><input type="submit" name="kuldes" value="küldés"</td></tr>
        </form>
        </table>
        <?php
        if($logged==true)
            echo "OK! Név: ".$nev." Cím: ".$email;
        else
            echo"";
        ?>
    </body>
</html>