<?php
$tomb=array("András" => "123", "Béla" => "asd", "Cecil" => "alma", "Dávid" =>"aaa", "Elemér" =>"asdasd");
$find=false;
if(isset($_POST["kuldes"]))
{
    $id=trim($_POST["felhasznalo"]);
    $psw=trim($_POST["jelszo"]);
    foreach($tomb as $felh =>$e)
    {
        if($felh==$id&&$e==$psw)
        {$find=true; break;}
    }
}

?>
<html>
<head>
</head>
<body>
    <table>
    <form method="post" action="">
       
            <?php 
            if(isset($_POST["kuldes"]))
                {
                    if($find==true)
                        {
                            header('location: atiranyitas.php');
                        }
                    if($find==false)
                        {
                            if($felh!=$id&&$e!=$psw&&!empty($id)&&!empty($psw))
                                {
                                    echo"<h4 style='color:red'>Hibás bejelentkezés SZANDIKAAA!!Mdjnvdnsjp";
                                }
                            if(empty($id)&&!empty($psw))
                                {
                                    echo"<h4 style='color:red'>Felhasználó mező kitöltése kötelező!";
                                }
                            if(!empty($id)&&empty($psw))
                                {
                                    echo"<h4  style='color:red'>Jelszó mező kitöltése kötelező!";
                                }
                            if(empty($id)&&empty($psw))
                                {
                                    echo"<h4  style='color:red'>Mindkét mező kitöltése kötelező!";
                                }
                        }
                }
            ?></h4>
        <tr><td>Felhasználónév:</td>
        <td  
            <?php if(isset($_POST["kuldes"])){if(empty($id)) echo" style='border: solid 1px red;'";} ?>
            >
            <input type="text" name="felhasznalo" value="<?php if(isset($_POST["kuldes"])){echo"$id";} ?>"></td></tr>
        <tr><td>Jelszó</td>
        <td
             <?php if(isset($_POST["kuldes"])){if(empty($psw)) echo" style='border: solid 1px red;'";} ?>
            >
            <input type="password" name="jelszo"</td></tr>
        <tr><td><input type="submit" name="kuldes" value="Bejelentkezés"</td></tr>   
    </form>
    </table>
</body>
</html>