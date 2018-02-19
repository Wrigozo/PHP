<?php
$user=$pwd="";
$error=false;
$error2=false;
$username="asd";
$password="12345";
$elso=true;
$login_error=false;
if(isset($_POST["login"]))
{
    $user=$_POST["user"];
    $pwd=$_POST["pwd"];
    if(empty($user) && empty($pwd))
    {
        $error=$error2=true;
    }
    else if(empty($user))
    {
        $error=true;
    }
    else if(empty($pwd))
    {
        $error2=true;
    }
    else
    {
    if($user==$username && $pwd==$password)
    {
        $elso=false;
        echo "<h3 style='color: green; text-align: center;'>Sikeres belépés!</h3>";
        echo "<form method='post' action='' style='margin: 0 auto; width: 50px;'><input type='submit' value='Vissza' /></form>";
    }
    else
    {
        $login_error=true;             
    }
    }
}
if($elso)
{
?>
<html lang="hu">
<head>
<meta charset="utf-8" />
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
<body>
<table>
<form method="post" action="">
<tr><td><input type="text" name="user" placeholder="Felhasználónév..." 
<?php if($error) echo "style='border: 2px solid red;'"; ?> value="<?php echo $user; ?>"  /></td></tr>
<tr><td><input type="password" name="pwd" placeholder="Jelszó..."
<?php if($error2) echo "style='border: 2px solid red;'"; ?> value="<?php echo $pwd; ?>"  /></td></tr>
<tr><td class="center"><input type="submit" name="login" value="Belépés" /></td></tr>
</form>
</table>
<?php
    if($login_error)
    {
        echo "<h3 style='color: red; text-align: center;'>Sikertelen belépés!</h3>";
    }
?>
</body>
</html>
<?php } ?>