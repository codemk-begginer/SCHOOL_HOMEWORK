<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="title">
        <h1>PHP HOMEWORK</h1>
    </div>
<section id="HOMEWORK">
    <div class="form">
    <form action="" method="post">
        <label for="nom">nom</label><br>
        <input type="text" name="nom" id="nom" required><br>
        <label for="nom">prenom</label><br>
        <input type="text" name="prenom" id="prenom" required><br>
        <label for="date">date de naissance</label><br>
        <input type="date" name="date" id="date" required><br>
        <div class="submit"><input type="submit" value="envoyer"></div>
    </form>
    </div>

    <div class="message">
    <?php
     require_once "user.php";
     $formulaireHandler = new FormulaireHandler();
     $formulaireHandler->recup();
    ?>
    </div>
</section>
    

</body>
</html>