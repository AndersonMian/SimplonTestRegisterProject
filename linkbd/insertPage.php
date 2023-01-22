<?php
include('apiCon.php');

$nom = htmlspecialchars($_POST['name']);
$snom = htmlspecialchars($_POST['surname']);
$numero = htmlspecialchars($_POST['number']);
$email = htmlspecialchars($_POST['mail']);

if (!isset($_POST['enregister'])) {

    if (empty($nom) || empty($snom ) || empty( $numero)  || empty($email)) {

        

      echo "<script type='text/javascript'>
      document.getElementById('demo').innerHTML ='Veuillez renseigner tous les champs svp !';
        </script>";
        header('Location: ../index.php');
     
    } else {
        
        if ($nom == null && $snom == null && $numero == null && $email == null) {
            echo "<script type='text/javascript'>
            document.getElementById('demo').innerHTML ='veuillez entrez des valeurs dans les champs';
              </script>";
              header('Location: ../index.php');
        } else {
            //insertion des données dans la base de données
        $res = $bdd->prepare("INSERT INTO `participant_register`(`nameParticipant`, `surnameParticipant`, `numberParticipant`, `emailParticipant`) VALUES (:nom, :snom, :numero, :email)");

        $stmt = $res->execute([
            'nom' => $nom,
            'snom' => $snom,
            'numero' => $numero,
            'email' => $email
        ]);
            if ($stmt) {
                echo "<script type='text/javascript'>
                document.getElementById('demo').innerHTML ='L\'enregistrement a bien été éffectué ';
                  </script>";
                  header('Location: ../index.php');

            } else {
                echo "<script type='text/javascript'>
                document.getElementById('demo').innerHTML ='Echec d\'enregistrement du participant';
                  </script>";
                  header('Location: ../index.php');
            }
        }
    }
}
