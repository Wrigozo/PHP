<?php
$zoldseg=array("répa","retek","mogyoró","karfiol","káposzta");  
$send=false;
if(isset($_POST["ok"]))
{ 
    $send=true;
}
if($send==true)
{
        $keres=$_POST["elem"];
    $talalt=false;
            for($i=0; $i<count($zoldseg); $i++)
            {
                if($zoldseg[$i]==$keres)
                {
                    $talalt=true; break;
                }
            }
               if($talalt==false) echo"Nincs ilyen elem";
               else echo"Van ilyen elem";
            
}
if($send==false){
?>
<html>
<head></head>
<body>
    <table>
    <form method="post" action="">
        <tr><td>A keresett elem:</td><td><input type="text" name="elem"></td></tr>
        <tr><td><input type="submit" name="ok" value="mehet"></td></tr>
    </form></table>
</body>
</html>
<?php } ?>