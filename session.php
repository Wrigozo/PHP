<?php
    session_start();
if(isset($_POST["logged"]))
{
    $nev=$_POST["nev"];
    $user="csabi";
    if($user==$nev)
    {
        $_SESSION["logged"]=true;
        $_SESSION["nev"]=$nev;
        header("location: logged2.php");
    }
    else echo "Hiba!";
}

?>
<html>
<head>
<meta charset="utf-8">    
</head>
<body>
    <form method="post" action="">
        <input type="text" name="nev" />
        <input type="submit" name="logged" value="Bejelentkezés"/>
    </form>
</body>
</html>