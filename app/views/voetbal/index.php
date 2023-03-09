<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voetbal pagina</title>
    <link rel="stylesheet" href="http://mvc-oop-proeftoets.com/public/css/style.css">
</head>
<body>
    
    <h3><?= $data['title'] . "<br>"; ?></h3>

    <table border="1">
        <thead>
            <th>Id</th>
            <th>Naam</th>
            <th>Club</th>
            <th>Leeftijd</th>
            <th>Nationaliteit</th>
            <th>Salaris (miljoen)</th>
        <tbody>
            <?= $data['rows'] ?>
        </tbody>
        </thead>
    </table>

    <?= $data['records'] . "<br>"; ?>
    <a href="/home/index"> Ga naar de homepage</a> <!-- http://mvc-framework.org/home/index OF php URLROOT kan ook (zie view > home > index.php). /home... is beter, zorgt er voor dat je bij de hoogste map gaat van het project -->

</body>
</html>