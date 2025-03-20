<header style="background-color: white;">
    <div class="back">
        <section class="col-12">
            <div class="ligne">
                <div class="col-3">
                    <a href="index.php"><img src="image/logobasket.jpg" height="100px" alt="logo boutique" /></a>
                </div>
                <div class="col-6">
          <?php
          $recherche = "";
          if (count($_GET) > 0)
          {
              $recherche = $_GET["rech"];
              $sql = "select * from article where NOM like '%$recherche%'";
              $result = mysqli_query($id, $sql);
          }
          ?>
          <form action="" method="GET">
            <input type="search" placeholder="Rechercher un produit" id="site-search" name="rech" />
            <button class="inputSearch" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>

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