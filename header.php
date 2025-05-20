<?php
    $recherche = "";
    if (count($_GET) > 0) {
        $recherche = $_GET["SearchBar"];
        $sql = "select * from article where NOM like '%$recherche%'";
        $result = mysqli_query($id, $sql);
    }
?>

<div class="containerHeader">
    <div class="logoSite">
        <a href="index.php"><img src="image/logobasket.jpg" alt="logo boutique" class="imgLogoSite" /></a>
    </div>
    <div class="searchBar">
        <form action="" method="GET">
            <div class="searchDiv">
                <input type="search" placeholder="Rechercher un produit" id="search" name="SearchBar" />
                <button class="inputSearch" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </form>
    </div>
    <div class="menu">
        <div class="basket">
            <a href="panier.php" style="color: white; text-decoration: none;"><i class="fa-solid fa-basket-shopping"></i></a>
        </div>
        <?php
            if(isset($_SESSION["identifiant"])){
        ?>
            <div class="profil">
                <a href="profil.php" style="color: white; text-decoration: none;"><i class="fa-solid fa-user"></i></a>
            </div>
        <?php
            }else{
        ?>
            <div class="profil">
                <a href="connect.php" style="color: white; text-decoration: none;"><h2>Connexion</h2></a>
            </div>
        <?php
            }
        ?>
    </div>
</div>