<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once("connexion/connect.php");
$ID_ARTICLE = $_GET["ID_ARTICLE"];
$req = "SELECT nom, description, prix, nomimage, ID_ARTICLE, ID_USER from article WHERE ID_ARTICLE ='$ID_ARTICLE'";
$res = mysqli_query($id,$req);
$dataArticle = mysqli_fetch_assoc($res);
$idUser = $dataArticle["ID_USER"];
$idArticle = $dataArticle["ID_ARTICLE"];

$sqlUser = "SELECT nom FROM utilisateur WHERE ID_USER = '$idUser'";
$getUser = mysqli_query($id, $sqlUser);
$dataUser = mysqli_fetch_assoc($getUser);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/particle.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>
    <title><?=$dataArticle["nom"]?></title>
</head>

<?php
require_once("header2.php");

function addToBasket($id, $idUser, $idArticle, $nbrArticle) {
    $request = "INSERT INTO 'panier' ($idUser, $idArticle, $nbrArticle)";
    $result = mysqli_query($id, $request);
    $myData = mysqli_fetch_array($result);
}
?>

<body>
    <div class="flex">
            <div class="image">
                <img src="image/article<?=$ID_ARTICLE?>.png" width="80%" alt="">
            </div>
            <div class="info">
                <div class="titre">
                    <?=$dataArticle["nom"];?>
                </div>
                <div class="desc">
                    <?=$dataArticle["description"];?>
                </div>
                <div class="prix">
                    <p class="blue"><?=$dataArticle["prix"];?>€</p>
                </div>
                <div class="achat">
                    <form action="panier.php" method="get">
                        <input type="number" name="nombre_article" value="1">
                        <button >Ajouter au panier</button>
                    </form>
                </div>
                <div class="user">
                    mis en vente par: <?=$dataUser["nom"];?>
                </div>
            </div>
    </div>
</body>
</html>