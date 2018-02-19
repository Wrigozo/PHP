<?php
$logged=false;
if(isset($_POST["kuldes"]))
{
    $logged=true;
}
?>
<!DOCTYPE html>
<head>
<style>
#tabla
    {  
    margin: 250px 500px 0 500px;
    width: 300px;
    height: 100px;
    background: linear-gradient(lightgray, black); 
    border-radius: 10px;
    padding: 20px;
    }
.bejelentkezes
    {
        text-align: center;
    }
</style>
</head>
    <body>
        <div id="tabla"><table>
        <form method="post" action="">
        <tr>
        <td>ID:</td>
        <td><input type="text" name="id"></td>
        </tr>
        <tr>
        <td>Jelszó:</td>
        <td><input type="text" name="jelszo"></td>
        </tr>
        <tr>
        <td class="bejelentkezes"><input type="submit" name="kuldes" value="Bejelentkezés"</td></tr>
        </form>
            </table></div>
        <?php
        if($logged==true)
            echo "Sikeres bejelentkezés!";
        else
            echo"";
        ?>
    </body>
</html>