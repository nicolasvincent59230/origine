<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="script.js"></script>
</head>
<body>

<input type="text" id="datePicker">
<br>
<a href="exercice2.php">exercice-2</a>


<?php if(isset($tab)){?>
<table style="width: 60%">
    <tr>
        <td>Mois de 30 jours</td>
    <?php foreach ($mois30 as $m){?>
            <td> <?php echo "mois".$m ?></td>
    <?php }?>
    </tr>
    <tr>
        <td>Mois de 31 jours</td>
    <?php foreach ($mois31 as $m){?>
            <td> <?php echo "mois".$m ?></td>
    <?php }?>
    </tr>
    <tr>
        <td>Mois de 28 jour</td>
        <?php foreach ($mois28 as $m){?>
            <td> <?php echo "mois".$m ?></td>
        <?php }}?>
    </tr>
</table>
</body>
</html>

