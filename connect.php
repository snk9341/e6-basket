<?php
session_start();
require_once("connexion/connect.php");
if(isset($_POST["bouton"])){
    $identifiant = $_POST['identifiant'];
    $mdp = $_POST['mdp'];
    $req = "select * from utilisateur where identifiant='$identifiant' and password='$mdp'";
    $res = mysqli_query($id,$req);
    if(mysqli_num_rows($res)>0){
        $_SESSION["identifiant"] = $identifiant;
        header("location:index.php");
    }else{
        $erreur = "Erreur de login ou de mot de passe";
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/connect.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>
    <title>connexion</title>
</head>

<?php
require_once("header2.php");
?>

<body>
    <div class="container">
        <div class="connexion">
            <h1>connexion</h1>
        </div>
        <br>
        <div class="phrase">
            <h2>Entrez votre identifiant et votre mot de passe !</h2>
        </div>
        <br>
        <?php
        $mdp = isset($_SESSION["mdp"]) ? $_SESSION["mdp"] : "";
        ?>

        <form action="" method="post">
        <?php if(isset($erreur)) echo "<h2>$erreur</h2>";?>
        <input type="text" name="identifiant" placeholder="login :" required><br><br>
        <input type="password" name="mdp" placeholder="Mot de passe :" required><br><br>
        <input type="submit" value="Connexion" name="bouton">
        </form>
        <p>Je n'ai pas encore de compte :<a href="inscription.php">s'inscrire</a></p>
    </div>
</body>

</html>