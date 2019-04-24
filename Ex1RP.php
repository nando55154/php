<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $vet=array();
        for ($i=0; $i < 50; $i++) {
          $vet[$i]=$i*10; 
       
        }
        echo '<pre>';
        print_r($vet);
        ?>
    </body>
</html>