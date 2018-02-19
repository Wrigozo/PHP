<?php
$autok=array("Renault", "Opel", "Ford", "BMW", "Audi", "Mercedes");
$find=false;
if(isset($_POST["kereses"])){
$search=trim($_POST["add"]);}
if(isset($_POST["kereses"]))
{
    foreach($autok as $marka)
    {
        if($search==$marka)
        {
           $find=true; 
        }
    }
}
?>
<html>
    <head></head>
    <body>
    <table>
        <tr>
            <form method="post" action="">
            <td><input type="search" name="add"></td>
                <td><input type="submit" name="kereses" value="Keres"</td>
                <td><input type="submit" name="lista" value="Listáz"</td>
        </tr>
        <tr><td>
        <?php
            if(isset($_POST["lista"])){
            echo"<ul>";
            foreach($autok as $marka)
            {
                echo"<li>$marka</li>";
            }
            echo"</ul>";}
            if(isset($_POST["kereses"])&&empty($search))
            echo"Mező kitöltése kötelező!";
            if($find==true){
                echo"Sikeres keresés!";
            }
            if(isset($_POST["kereses"])&&$find==false&&!(empty($search)))
            {
                echo"Sikertelen keresés!";
            }
        ?>
       </td></tr>
        </form>
    </table>
    </body>
</html>