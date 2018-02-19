<?php
$azonositok=array(
                    array("user1","asd@asd.com","asd"),
                    array("user2","tomi@asd.com","123"),
                    array("user3","szandi@asd.com", "szek"),
                    array("user4","gabor@asd.com", "eger"),
                    array("user5","robi@asd.com", "dfg")
                   );
$send=false;
if(isset($_POST["ok"]))
{
    $felh=$_POST["felhasznalo"];
    $email=$_POST["email"];
    $jelsz=$_POST["jelszo"];
    if(!empty($felh)&&!empty($email)&&!empty($jelsz))
    {
        $send=true;
    }
    if(empty($felh)&&empty($email)&&empty($jelsz))
    {
        echo"Mindhárom mező kitöltése kötelező";
    }
   
}
?>
<html>
<head></head>
<body>
    <table>
    <form method="post" action="">
        <tr><td>ID:</td><td><input type="text" name="felhasznalo"
                                               value="<?php
                                                        if(isset($_POST["ok"])&&!empty($felh)) echo"$felh";
                                                        ?>"
                                               ></td>
            <td<?php if(empty($felh)) echo" style='color:red'";?>
                >
            <?php
                if(isset($_POST["ok"])){
                            if(empty($felh)) echo"Mező kitöltése kötelező!";

                     for($i=0; $i<5; $i++)
                     {
                            if($azonositok[$i][0]!=$felh&&!(empty($felh))) echo"Hibásan kitöltött mező";break;}
                     }
                ?>
                </td></tr>
        
        
        
        <tr><td>Email:</td><td><input type="text" name="email"
                                            value="<?php
                                                        if(isset($_POST["ok"])&&!empty($email)) echo"$email";
                                                        ?>"
                                        ></td>
       <td<?php if(empty($email)) echo" style='color:red'";
           ?>
             >
            <?php
                if(isset($_POST["ok"])){if(empty($email)) echo"Mező kitöltése kötelező!";
                for($i=0; $i<5; $i++)
                     {
                            if($azonositok[$i][1]!=$email&&!(empty($email))) echo"Hibásan kitöltött mező";break;}
                     }
                ?></td></tr>
        
        
        
        
        <tr><td>Jelszó:</td><td><input type="password" name="jelszo"></td>
        <td<?php if(empty($jelsz)) echo" style='color:red'";
            ?>
            >
            <?php
        if(isset($_POST["ok"]))
        {
            if(empty($jelsz)) echo"Mező kitöltése kötelező!";
        for($i=0; $i<5; $i++)
                     {
                            if($azonositok[$i][2]!=$jelsz&&!(empty($jelsz))) echo"Hibásan kitöltött mező";break;}
                     }
                ?>
                                       </td></tr>
        <tr><td><input type="submit" name="ok" value="ok"></td></tr>
    </form>
    </table>
    <?php 
    if($send==true)
    {
        $sikeres=false;
        for($i=0; $i<5; $i++){
                if($azonositok[$i][0]==$felh&&$azonositok[$i][1]==$email&&$azonositok[$i][2]==$jelsz)
                {
                    $sikeres=true;
                    header('location:logged.php');
                }            
        }
        if($sikeres==false)
        {
             echo"Sikertelen bejelentkezés";
        }
    }
    
    ?>
    
</body>
</html>