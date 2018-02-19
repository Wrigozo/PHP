<?php
$auto=array("", "Mercedes","Audi", "Suzuki","Ford", "Volvo");
$hiba=array("egyes", "kettes","hármas","négyes", "ötös");
$rendben=false;
if(isset($_POST["ok"]))
{
    $okes=$_POST["send"];
    
    
    if(!empty($okes))
    {
        $rendben=true;
    }     
}
if(isset($_POST["vissza"]))
{
    $rendben=false;
}
if($rendben==false){
?>
<table>
    <form method="post" action="">
        <select name="send">
            <?php
            for($i=0; $i<6; $i++)
            {
                echo"<option value='$i'>$auto[$i]</option>";
            }
            ?>
        </select>
        <input type="submit" name="ok" value="mehet">
    </form>
    <?php if(isset($_POST["ok"]))
            {
                if($okes==0)
    {
        echo"<h3 style=' color:red'>nem jelöltél ki semmit!</h3>";
    }
            }
    ?>
</table>
<?php }
if($rendben==true){
   
        echo"Az autó: ".$auto[$okes]." és a hibája ".$hiba[$okes-1];?>
<input type="button" name="vissza" value="vissza" onclick="history.back()">
   <?php if(isset($_POST["vissza"]))
    {
        $rendben=false;
    }
}
?>