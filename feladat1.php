<!DOCTYPE html>
<head>
</head>
<body>
    <table>
    <form method="post" action="">
    <tr><td><input type="text" name="elso" placeholder="1. szám"></td></tr>
     <tr><td><input type="text" name="masodik" placeholder="2. szám"></td></tr>
    <tr><td><input type="submit" name="osszead" value="összead"></td></tr>
    </form>
    </table>
<?php
if(isset($_POST["osszead"])){
$harmadik=$_POST["elso"]+$_POST["masodik"];
}
echo"A két szám összege:".$harmadik;
?>
</body>
</html>

