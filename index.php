<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>patie 9 exercice 5</title>
</head>
<body>
    <?php 
        // on transforme les date en timestamp
        $date1 = mktime(0, 0, 0, 16, 5, 2016);
        $date2 = time();
        // on recupère la difference entre les deux
        $nbJoursTimestamp = $date2 - $date1;
        // on convertie les timestamps (qui sont en seconde) en minute
        $nbJours = $nbJoursTimestamp/86400; //86 400 = 60sec*60mn*24h
    ?>
    <?= 'il y a eu ' . round($nbJours) . ' jour depuis le 16 mais 2016' ?>
</body>
</html>


