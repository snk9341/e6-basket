<?php
    session_start();
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    require_once("connexion/connect.php");  
    
    $sql = "SELECT ID_USER FROM utilisateur WHERE IDENTIFIANT = '".$_SESSION['identifiant']."'";
    $get = mysqli_query($id, $sql);
    $data = mysqli_fetch_assoc($get);

    $sqlBasket = "SELECT article_ID_ARTICLE FROM panier WHERE utilisateur_ID_USER = '".$data['ID_USER']."'";
    $getBasket = mysqli_query($id, $sqlBasket);  


    while (($dataPanier = mysqli_fetch_array($getBasket)) == true){
        $sqlPanier = "SELECT nom, PRIX, nomimage FROM article WHERE ID_ARTICLE = '".$getBasket['article_ID_ARTICLE']."'";
        $getPanier = mysqli_query($id, $sqlPanier);
        $dataPanier1 = mysqli_fetch_assoc($getPanier);
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>
    <title>votre panier</title>
</head>
<?php
    require_once('header2.php');
?>
<body>
    <h1><?=$_SESSION["identifiant"]?></h1>
</body>
</html>