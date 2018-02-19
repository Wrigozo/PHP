<?php
    $username="adam";
    $password="12345";
    $elso=true;
    if(isset($_POST["login"]))
    {
        $user=$_POST["user"];
        $pwd=$_POST["pwd"];
        if($user==$username && $pwd==$password)
        {
            $elso=false;
            echo "<h3 style='color: green; text-align: center;'>Sikeres belépés!</h3>";
        } else{
            echo "<h3 style='color: green; text-align: center;'>Sikertelen belépés!</h3>";
        }
    }
    if($elso){
?>
<html lang="hu">
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
<style>
     .center
    {
        text-align: center;
    }
    table
    {
        width: 180px;
        margin: 0 auto;
        border: 1px solid gray;
        padding: 10px;
        border-radius: 10px;
        background: linear-gradient(white, black);
    }
    input
    {
        border-radius: 5px;
        padding: 2px;
    }
    input:focus
    {
        background: lightgray;
    }
</style>
</head>
<body><table>
<form method="post" action="">
    <tr><td><input type="text" name="user" placeholder="Felhasználónév..." required /></td></tr>
    <tr><td><input type="password" name="pwd" placeholder="Jelszó..." required /></td></tr>
    <tr><td class="center"><input type="submit" name="login" value="Belépés" /></td></tr>
</form></table>
</body>
</html>
<?php
    }
?>