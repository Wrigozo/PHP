<?php
$pizza=array("margarita", "hawaii", "mexikói", "magyaros","sajtos");
$feltet=array("sajt", "bacon","gomba", "pepperóni");
?>
<html>
<head></head>
<body>
    <table>
        <form method="post" action="">
        <tr><td>Pizza fajtája:</td>    
            <td><select>
                <?php
                for($i=0; $i<count($pizza); $i++)
                {
                    echo"<option>$pizza[$i]</option>";
                }
                ?>
                </select></td></tr>
        <tr><td>Feltét:</td></tr>
            <?php
            for($i=0; $i<count($feltet); $i++)
            {
        echo"<tr><td><input type='checkbox' name='$feltet[$i]' value='$feltet[$i]'>$feltet[$i]</input></td></tr>";
            }?>
            <tr><td><input type="submit" name="send" value="ok"></td></tr>
        </form>
    </table>
</body>
</html>