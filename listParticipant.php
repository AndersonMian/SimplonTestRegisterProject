<?php
include ('linkbd/apiCon.php');

//requete de récupération des données
$req = 'SELECT * FROM `participant_register` ';
$reqStmt = $bdd -> prepare($req);
$reqStmt -> execute();
$element = $reqStmt->fetchAll();
$count  = $reqStmt -> rowCount();
if ($count){
    echo "<script type='text/javascript'>
      document.getElementById('span').innerHTML ='la liste est vide !';
        </script>";
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/list.css">
    <title>Document</title>
</head>
<body>
    <div class="container-Table">
    <a href="index.php" class="link"><button type="submit">Retour à l'enregistrement</button></a>
        <form >
            <span id="span"></span>
        <table>
            <tr id="items">
                <th>N°</th>
                <th>Nom du Participant</th>
                <th>Prenom du Participant</th>
                <th>Numéro du Participant</th>
                <th>Email du Participant</th>
            </tr>
            <?php foreach ($element as $elements) {?>
            <tr>
                <span id="span"></span>
                <td><?php echo $elements['idParticipant'] ?></td>
                <td><?php echo $elements['nameParticipant'] ?></td>
                <td><?php echo $elements['surnameParticipant'] ?></td>
                <td><?php echo $elements['numberParticipant'] ?></td>
                <td><?php echo $elements['emailParticipant'] ?></td>
            </tr>
            <?php }?>
        </table>
        </form>
    </div>
    
</body>
</html>