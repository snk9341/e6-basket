<header style="background-color: white;">
    <div class="back">
        <section class="col-12">
            <div class="ligne">
                <div class="col-8">
                    <a href="index.php"><img src="image/logobasket.jpg" height="100px" alt="logo boutique" /></a>
                </div>
                <ul class="nav">
                    <?php
                if(isset($_SESSION["identifiant"])){
                ?>
                    <li class="block-r">
                        <a href="profil.php" style="color: white; text-decoration: none;"><i
                                class="fa-solid fa-user"></i></a>
                    </li>
                    <li class="block-r">
                        <a href="" style="color: white; text-decoration: none;"><i
                                class="fa-regular fa-comment"></i></a>
                    </li>
                    <?php
                }else{
                    ?>
                    <li class="block-r">
                        <a href="connect.php" style="color: white; text-decoration: none;">Connexion</a>
                    </li>
                    <?php
                }
                ?>
                    <li class="block-b">
                        <a href="" style="color: white; text-decoration: none;"><i
                                class="fa-solid fa-basket-shopping"></i></a>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</header>