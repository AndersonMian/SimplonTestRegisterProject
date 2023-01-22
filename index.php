<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>Dashboard</title>
</head>

<body>
    <div id="firstBloc">
        <div id="secondBloc">
            <img src="images/people.png" width="250">
            <span id="demo"></span>
        </div>
        <div id="thirdBloc">
            <form id="form" action="linkbd/insertPage.php" method="POST">
                <h2>S'Enregistrer</h2>
                <h5>enregistez-vous, pour participer à nos futures activités</h5><br><br>
                <label class="input-label" for="name"> Nom du participant</label>
                <input type="text" name="name" class="field" id="name"><br>
                <label class="input-label" for="surname">Prenom du participant</label>
                <input type="text" name="surname" class="field" id="surname"><br>
                <label class="input-label" for="number">Numéro de téléphone</label>
                <input type="text" name="number" class="field" id="number"><br>
                <label class="input-label" for="mail">Adresse Email</label>
                <input type="email" name="mail" class="field" id="mail"><br>
                <input type="submit" name="enregistrer" value="enregistrer">
            </form>
                
            <a href="listParticipant.php" class="link"><img src="images/pnglist.png" height="40" width="40"></a>
            
        </div>
    </div>
</body>

</html>