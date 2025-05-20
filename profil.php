<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once("connexion/connect.php");

$idUser = $_SESSION['identifiant'];
$sqlAllArticle = "Select * from article where ID_USER = (select ID_USER from utilisateur WHERE IDENTIFIANT = '$idUser')";
$getAllArticle = mysqli_query($id, $sqlAllArticle);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/profil.css">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>
    <title>Mon profil</title>
</head>
<?php
require_once('header2.php');
?>

<body>
    <div class="container">
        <div class="divTitreProfil">
            <h2 class="titreProfil">
                <u>Mes annonces :</u>
            </h2>
        </div>
        <div class="divListeAnnonce">
            <ul class="listeArticlePanier">
                <?php
                while ($dataPanier = mysqli_fetch_array($getAllArticle)) {
                    $sqlImage = "SELECT nomimage FROM article WHERE ID_ARTICLE = '" . $dataPanier['ID_ARTICLE'] . "'";
                    $getImage = mysqli_query($id, $sqlImage);
                    $dataImage = mysqli_fetch_assoc($getImage);
                ?>
                <a href='particle.php?ID_ARTICLE=<?=$dataPanier["ID_ARTICLE"]?>'>
                    <li class="liArticlePanier">
                        <span class="imgArticlePanier"><img src="/image/<?= $dataImage["nomimage"] ?>" alt=""></span>
                            <span class="nameArticlePanier"><?= $dataPanier["NOM"] ?></span><br>
                            <span class="prixArticlePanier"><?= $dataPanier["PRIX"] ?>€</span>
                    </li>
                    </a>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</body>

</html>