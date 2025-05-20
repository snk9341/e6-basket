<div class="containerHeader">
    <div class="logoSite">
        <a href="index.php"><img src="image/logobasket.jpg" class="imgLogoSite" height="100px" alt="logo boutique" /></a>
    </div>
    <div class="searchBar">
        <div class="nameSite">
            <a href="index.php" style="color: black; text-decoration: none;"><h1>BballShop</h1></a>
        </div>
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