<?php
    session_start();
if(isset($_SESSION["logged"]))
        echo "Üdvözöllek ".ucfirst($_SESSION["nev"])."!";
else
     header("location: session.php");

    if(isset($_POST["kijelentkezes"]))
    {
        session_destroy();
        header("location: session.php");
    }
?>
<form method="post" action="">
    <input type="submit" name="kijelentkezes" value="kijelentkezés" />
</form>