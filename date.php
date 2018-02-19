<?php
$azonosito=array("user1", "user2", "user3", "user4", "user5");
$ev=array("1990","1991","1992","1993","1994","1995",
          "1996","1997","1998","1999","2000",
          "2001","2002","2003","2004","2005",
          "2006","2007","2008","2009","2010",
          "2011","2012","2013","2014","2015","2016","2017");
$send=false;
if(isset($_POST["tovabb"]))
{
    $send=true;
    $index=$_POST["id"];
    $nam=trim($_POST["name"]);
    $korindex=$_POST["kor"];
    $date=$ev[$korindex];
    $eves=(date("Y")-$date);
}
if($send==false){
?>
<html>
<head></head>
<body>
<form method="post" action="">
<table>
    <tr><td>Azonosító:</td>
        <td><select name="id"><?php
            $i=0;
            foreach($azonosito as $elem)
            {
                echo"<option value='$i'>$elem</option>";
                $i++;
            }
            ?></select></td></tr>
    <tr><td>Név:</td><td><input type="text" name="name"></td></tr>
    <tr><td>Születési év:</td>
        <td><select name="kor">
            <?php
            $i=0;
                foreach($ev as $elem)
                {
                    echo"<option value='$i'>$elem</option>";
                    $i++;
                }
            ?>
            </select></td></tr>
    <tr><td><input type="submit" name="tovabb" value="Tovább"></td></tr>
</table>
</form>
</body></html>
<?php }
if($send==true){?>
<html>
<head></head>
<body>
    <table>
    <tr><td>Azonosító:</td>     
                                <td><?php echo"$azonosito[$index]"; ?></td></tr>
    <tr><td>Név:</td>           <td><?php echo"$nam";               ?></td></tr>
    <tr><td>Kor:</td>           <td><?php echo"$eves";               ?></td></tr>
    </table></body></html>
    
<?php } ?>