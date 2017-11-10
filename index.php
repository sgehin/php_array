<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
              
        $p1 = array("Copier","Inkjet","Laser","Photo");
        $j=0;
        foreach($p1 as $item){
            echo "$j: $item<br>";
            
            ++$j;
        }
        
        /* result  0: Copier
1: Inkjet
2: Laser
3: Photo
        */
        ?>
    </body>
</html>
