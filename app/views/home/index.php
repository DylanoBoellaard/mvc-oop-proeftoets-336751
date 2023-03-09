<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voetballers</title>
</head>
<body>
    <h3><?= $data['title']; ?></h3>
    <a href="<?= URLROOT; ?>/voetbal/index"> Ga naar de landenpagina</a>

    <table border="1">
        <thead>
            <th>Id</th>
            <th>Naam</th>
            <th>Club</th>
            <th>Leeftijd</th>
            <th>Nationaliteit</th>
            <th>Salaris (miljoen)</th>
        <tbody>
            <tr>
                <td><?= $data['Id'] ?></td>
                <td><?= $data['Naam'] ?></td>
                <td><?= $data['Club'] ?></td>
                <td><?= $data['Leeftijd'] ?></td>
                <td><?= $data['Nationaliteit'] ?></td>
                <td><?= $data['Salaris'] ?></td>
            </tr>
        </tbody>
        </thead>
    </table>
</body>
</html>