<?php $hautDeFrance = array('02' => 'Aisne', '59' => 'Nord', '60' => 'Oise', '62' => 'Pas-de-calais', '80' => 'Somme'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>php - e9p5</title>
    </head>
    <body>
    <p><?php foreach($hautDeFrance as $clés => $elements){
        echo $elements . '<br />';
    } ?></p>
    </body>
</html>