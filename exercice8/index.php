<?php $months = array('janvier', 'fevrier', 'mars', 'avril', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre'); ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>php - e8p5</title>
    </head>
    <body>
    <p><?php foreach($months as $elements){
        echo $elements . '<br />';
    } ?></p>
    </body>
</html>