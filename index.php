<?php
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once("connexion/connect.php");

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>

    <title>BballShop</title>
</head>
<?php
if (count($_GET) > 0)
{
    $recherche = $_GET["SearchBar"];
    $sql = "select * from article where NOM like '%$recherche%'";
    $result = mysqli_query($id, $sql);
}else{
    header("location:index.php?SearchBar=");
}
    require_once("header.php");
    require_once("slide.php");
?>
<body>
    <div class="wrapper">
        <?php
        while (($dataArticle = mysqli_fetch_array($result)) == true){
        ?>
            <div class='article'>
                <a href='particle.php?ID_ARTICLE=<?=$dataArticle["ID_ARTICLE"]?>' class="aText">
                <img src="image/<?= $dataArticle["nomimage"] ?>" width='340px' alt="image maillot stephen curry">
                <p style="font-size: 20px;"><?= $dataArticle["NOM"] ?></p><br>
                <p><?= $dataArticle["DESCRIPTION"];?></p><br>
                <p><?= $dataArticle["PRIX"];?> €</p></a>
            </div>
        <?php
        }
        ?>
    </div>
</body>
</html>