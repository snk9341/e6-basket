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
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>
    <title>BballShop</title>
</head>
<?php
if (count($_GET) > 0)
{
    $recherche = $_GET["rech"];
    $sql = "select * from article where NOM like '%$recherche%'";
    $result = mysqli_query($id, $sql);
}else{
    header("location:index.php?rech=");
}
    require_once("header.php");
    require_once("slide.php");
?>
<body>
    <div class="wrapper">
        <?php
        while (($row = mysqli_fetch_array($result)) == true){
        ?>
            <div class='article'>
                <a href='particle.php?ID_ARTICLE=<?=$row["ID_ARTICLE"]?>'>"
                <img src="image/<?= $row["nomimage"] ?>" width='340px' alt="image maillot stephen curry"></a>
                <p style="font-size: 20px;"><?= $row["NOM"] ?></p><br>
                <p><?= $row["DESCRIPTION"];?></p><br>
                <p><?= $row["PRIX"];?> €</p>
            </div>
        <?php
        }
        ?>
    </div>
</body>
</html>