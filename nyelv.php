<?php
$nyelvek=array("magyar", "angol", "német", "orosz", "spanyol");
$forditas=array(
                array("magyar", "hétfő", "kedd", "szerda", "csütörtök", "péntek", "szombat", "vasárnap"),
                array("angol", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"),
                array("német", "der Montag", "der Dienstag", "der Mittwoch", "der Donnerstag", "der Freitag", "der Samstag", "der Sonntag"),
                array("orosz", "понедельник", "вторник", "среда", "четверг", "пятница","суббота", "воскресенье"),
                array("spanyol", "lunes", "martes", "miercoles", "jueves", "viernes", "sábado",	"domingo")
);
$send=false;
if(isset($_POST["ok"]))
{
    @$languagekey=$_POST["language"];
    if(empty($languagekey))
    {
        "<script>alert('Nem jelöltél be semmit!')</script>";
    }
    else{
    $send=true;}
}
if($send==false){
?>
<html>
<head></head>
<body>
    <form method="post" action="">
        <select multiple name="language[]">
        <?php 
            foreach($nyelvek as $elem)
            {
                echo"<option>$elem</option>";
            }
        ?>
        </select>
        <input type="submit" name="ok" value="ok">
    </form>
</body>
</html>
<?php } 
if($send==true)
{   
    foreach($languagekey as $elem){
        foreach($forditas as $nyelv){
           if($nyelv[0]==$elem){
               echo "<br>".$elem.": ";
               for($i=1; $i<8; $i++){
               echo $nyelv[$i].", ";}
               echo"</br>";
               
           }  
        }
    }  
}