<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //adding items to an array , php is indexing
        $paper[]="aa";
        $paper[]="bb";
        $paper[]="cc";
        $paper[]="dd";
        $paper[]="eeeee";
        print_r($paper); //result Array ( [0] => aa [1] => bb [2] => cc [3] => dd [4] => eeeee )
        
        echo"<hr>";
       /* 
        //adding items to an array using explicit locations
        $paper[0]="aa";
        $paper[1]="bb";
        $paper[2]="cc";
        $paper[3]="dd";
        $paper[4]="eeeee";
        print_r($paper); // result Array ( [0] => aa [1] => bb [2] => cc [3] => dd [4] => eeeee )
        */
         echo"<hr>";
         
        //adding items to an array and retreiving them
        $paper[]="Copier";
        $paper[]="Inkjet";
        $paper[]="Laser";
        $paper[]="Photo";
        $paper[]="fax";
        
        for($x=0;$x<count($paper);$x++){
            echo "$x: $paper[$x]<br>";
        }
        /* result
         * 0: aa
            1: bb
            2: cc
            3: dd
            4: eeeee
            5: Copier
            6: Inkjet
            7: Laser
            8: Photo
            9: fax
         */
        
        ?>
    </body>
</html>
