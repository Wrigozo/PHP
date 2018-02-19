<?php
$send=false;
if(isset($_POST["kuldes"]))
{
    $send=true;
}
?>
<html>
<head>
    </head>
<body>
    <table>
        <form method="post" action="">
    <tr>
        <td>felhasználónév:</td>
        <td><input type="text" name="felhasználónév" value="" maxlength="15"></td>
    </tr>
    <tr>
        <td>jelszó:</td>
        <td><input type="text" name="jelszó" value="" maxlength="10"</td>
    </tr>
    <?php
    if($send==true)
    {
    echo"<tr><td>üzenet:</td>
    <td><textarea name=\"szöveg\" cols=\"30\" rows=\"6\"></textarea></td></tr>";
    }
    ?>  
    <tr>
        <td><input type="submit" name="kuldes" value="küldés"</td>
    </tr>
        </form>
            
    </table>
</body>
</html>