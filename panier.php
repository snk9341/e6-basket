<?php
    session_start();
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once("connexion/connect.php");  

    $sql = "SELECT ID_USER FROM utilisateur WHERE IDENTIFIANT = '".$_SESSION['identifiant']."'";
    $get = mysqli_query($id, $sql);
    $data = mysqli_fetch_assoc($get);

    $sqlBasket = "SELECT * FROM panier WHERE utilisateur_ID_USER = '".$data['ID_USER']."'";
    $getBasket = mysqli_query($id, $sqlBasket);  
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/panier.css">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>
    <title>votre panier</title>
</head>
<?php
    require_once('header2.php');
?>
<body>
    <div class="panierContainer">
        <div class="panier">
            <h1 id="mybasket">Votre panier :</h1>
        </div>
        <div class="panierArticle">
            <ul class="listeArticlePanier">
                <?php
                    while ($dataPanier = mysqli_fetch_array($getBasket)) {
                        $sqlImage = "SELECT nomimage FROM article WHERE ID_ARTICLE = '".$dataPanier['article_ID_ARTICLE']."'";
                        $getImage = mysqli_query($id, $sqlImage);
                        $dataImage = mysqli_fetch_assoc($getImage);
                ?>
                <li class="liArticlePanier">
                    <span class="imgArticlePanier"><img src="/image/<?=$dataImage["nomimage"]?>" alt=""></span>
                    <span class="nameArticlePanier"><?=$dataPanier["nomArticle"]?></span>
                    <span class="prixArticlePanier"><?=$dataPanier["prix"]?>€</span>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
    </div>
</body>
</html>