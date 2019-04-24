<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $vet=array();
        for ($i=1; $i <= 100; $i++) {
          if($i%2==0){
            $vet[$i]=$i." par"; 
        } else {
            $vet[$i]=$i." impar";
        }
        
        }
        echo '<pre>';
        print_r($vet);
        ?>
    </body>
</html>
