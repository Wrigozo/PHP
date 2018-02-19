<?php
$logged=false;
if(isset($_POST["login"]))
{
    $logged=true;
    $user=$_POST["user"];
    $email=$_POST["email"];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>gyak</title>
</head>
<body>
    <form method="post" action="">
    <input type="text" name="user" placeholder="felhasznalói név" required />
    <input type="email" name="email" placeholder="email" />
    <input type="submit" name="login" value="Belépés" />
    </form>
    <?php
    if($logged==true)
    echo $user." ".$email;
    ?>
</body>
</html>