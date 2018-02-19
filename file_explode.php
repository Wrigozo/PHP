<?php
header("Content-type:text/html;charset=utf-8");
$error="style='color: red; font-weight: bold;'";
$success="style='color: green; font-weight: bold;'";

function modify($filename,$data2,$data3)
{
    $fo=fopen($filename,"r");
    $fo2=fopen($filename."tmp","a");
    while(!feof($fo))
    {
        $sor=fgets($fo);
        $elem=explode(",",$sor);
        if(trim($elem[2])!=$data2) fwrite($fo2,$sor);
        else fwrite($fo2,$elem[0].",".$elem[1].",".$data3."\r\n");
    }
    fclose($fo);
    fclose($fo2);
    unlink($filename);
    rename($filename."tmp",$filename);
}

function lista($filename)
{
    $fo=fopen($filename,"r");
    while(!feof($fo))
    {
        $sor=fgets($fo);
        $db=explode(",",$sor);
        echo "<tr><td>$db[0]</td><td>$db[1]</td><td>$db[2]</td></tr>";
    }
}

function check($filename,$data)
{
    $fo=fopen($filename,"r");
    $foglalt=false;
    while(!feof($fo))
    {
        $sor=fgets($fo);
        $darab=explode(",",$sor);
        if(trim($darab[0])==$data) $foglalt=true;
    }
    return $foglalt;
}

function add($filename,$data,$data1,$data2)
{
    $fo=fopen($filename,"a");
    fwrite($fo,"\r\n".$data.",".$data1.",".$data2);
}

if(isset($_POST["reg"]))
{
    $id=trim($_POST["id"]);
    $name=trim($_POST["name"]);
    $pwd=trim($_POST["pwd"]);
    if(empty($id) || empty($name) || empty($pwd))
    {
        echo "<p $error>Minden mező kitöltése kötelező!</p>";
    }
    else
    {
        if(check("file.txt",$id))
        {
            echo "<p $error>Létező Id!</p>";
        }
        else
        {
            add("file.txt",$id,$name,$pwd); 
            echo "<p $success>Sikeres regisztráció!</p>";
        }       
    }
}

if(isset($_POST["modify"]))
{
    $id=trim($_POST["id"]);
    $name=trim($_POST["name"]);
    $pwd=trim($_POST["pwd"]);
    $pwd2=trim($_POST["pwd2"]);
      if(empty($id) || empty($name) || empty($pwd) || empty($pwd2))
    {
        echo "<p $error>Minden mező kitöltése kötelező!</p>";
    }
    else
    modify("file.txt",$pwd,$pwd2);
  
}
?>
<html>
<head>
<meta charset="utf-8" />
<style type="text/css">
table
{
    border-collapse: collapse;
}
td
{
    padding: 5px;
}
</style>
</head>
<body>
<table>
<form method="post" action="">
<tr><td>Id</td><td><input type="text" name="id" /></td></tr>
<tr><td>Név</td><td><input type="text" name="name" /></td></tr>
<tr><td>Jelszó</td><td><input type="text" name="pwd" /></td></tr>
<tr><td>Új jelszó</td><td><input type="text" name="pwd2" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="reg" value="Regisztrál" />
<input type="submit" name="list" value="Listáz" />
<input type="submit" name="modify" value="Módosít" />
</td></tr>
</form>
</table>
</body>
</html>
<?php
if(isset($_POST["list"]))
{
    ?>
    <table border="1">
    <?php @lista("file.txt");?>
    </table>
    <?php
}
?>
