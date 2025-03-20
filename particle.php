<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once("connexion/connect.php");
$ID_ARTICLE = $_GET["ID_ARTICLE"];
$req = "select a.NOM as 'artNom', a.DESCRIPTION as artDESC, a.PRIX as artPRIX,a.nomimage,a.ID_ARTICLE as idArticle, u.NOM as 'utiNom', u.PRENOM, m.MARQUE, a.ID_USER as idUser from article a JOIN utilisateur u on a.ID_USER = u.ID_USER join marque m on a.ID_MARQUE = m.ID_MARQUE where a.ID_ARTICLE='$ID_ARTICLE'";
$res = mysqli_query($id,$req);
$data = mysqli_fetch_assoc($res);
$idUser = $data["idUser"];
$idArticle = $data["idArticle"];
?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/particle.css">
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>
    <title><?=$data["artNom"]?></title>
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
                    <?=$data["artNom"];?>
                </div>
                <div class="desc">
                    <?=$data["artDESC"];?>
                </div>
                <div class="prix">
                    <p class="blue"><?=$data["artPRIX"];?>€</p>
                </div>
                <div class="achat">
                    <input type="number" name="nombre article" value="1">
                    <button onclick="<?=addToBasket($id, $idUser, $idArticle, 1)?>">Ajouter au panier</button>
                </div>
                <div class="user">
                    mis en vente par: <?=$data["utiNom"];?>
                </div>
            </div>
    </div>
</body>
</html>