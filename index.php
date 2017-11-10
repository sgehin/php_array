<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*adding items to an associative array and retrieving them
        $paper['copier']="Copier & Multipurpose";
        $paper['inktjet']="Inktjet Printer";
        $paper['Laser']="Laser Printer";
        $paper['fax']="Fax Paper";
        
        echo $paper['inktjet'];
        // result Inkjet Printer
        echo"<hr>";
        */
        
        $p1 = array("Copier","Inkjet","Laser","Photo");
                    echo "p1 element: ".$p1[2]."<br>";
        $p2 = array(
                    'copier'=>"Copier & Multipurpose",
                    'inkjet'=>"Inkjet Printer");
        
                    echo "p2 element: ".$p2['inkjet'];
                    /* result   p1 element: Laser
                                p2 element: Inkjet Printer
                    */
        
        
        ?>
    </body>
</html>
