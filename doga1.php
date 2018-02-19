 <?php
    $rnd_array=array(10);
    $k=0;
    $send=true;

    if(isset($_POST["keres"]))
    {
        $k=1;
        $add=$_POST["add"];
        for($i=0;$i<10;$i++)
        {
            $rnd=rand(1,100);
            $rnd_tomb[$i]=$rnd;
        }
        echo $add;
        foreach($rnd_tomb as $elem)
        {
            if($elem==$add) $send=false;
        }
    }

    if(isset($_POST["list"]))
    {
        $k=2;
        for($i=0;$i<10;$i++)
        {
            $rnd=rand(1,100);
            $rnd_tomb[$i]=$rnd;
        }
    }
?>
 <!DOCTYPE html>
 <html>
 <head></head>
 <body>
    <div>
    <?php
       if($k==1&&$send==false)
        {
            echo "<h1 style='color: green'>Talált!</h1>";
        }
        else if($k==1&&$send==true)
        {
            echo "<h1 style='color: red'>Nem talált!</h1>";
        }
     ?>
    <form method="POST" action="">
        <input type="text" name="add"/>
        <input type="submit" name="keres" value="keresés"/>
        <input type="submit" name="list" value="List"/>
    </form>
    <?php
        if($k==2)
        {
            
            echo "<br/>Számok: "."<ul>";
            foreach($rnd_tomb as $elem)
            {
                echo "<li>$elem</li>";
            }
            echo "</ul>";
        }    
     ?>
    </div>
 </body>
 </html>