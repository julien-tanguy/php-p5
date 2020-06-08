<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>php - e4p5</title>
</head>
<body>
    <?php
    $months = array('janvier', 'fevrier', 'mars', 'avril', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'decembre');
    $months[6] = 'août';
    ?>
    <p><?php echo $months[6] ?></p>
</body>
</html>