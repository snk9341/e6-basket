<?php
session_start();
require_once("connexion/connect.php");
require("header.php");
?>
<?php
if (isset($_POST["bouton"])) {
    $identifiant = $_POST['identifiant'];
    $mdp = $_POST['mdp'];
    $pren = $_POST['prenom'];
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $adr = $_POST['adresse'];
    $ville = $_POST['ville'];
    $codepost = $_POST['codepost'];


    $req = "select * from utilisateur where identifiant='$identifiant'";
    $res = mysqli_query($id, $req);
    if (mysqli_num_rows($res) > 0) {
?>
        <script>
            alert('cet identifiant est déjà pris');
        </script>
    <?php
        header("location:inscription.php");
    } else {
        $ide = true;
    }
    $mdp = $_POST['mdp'];

    $mdpOK = false;

    if (preg_match(
        '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%£^&*-]).{10,}$/',
        $mdp
    )) {
        $mdpOK = true;
    }
    if ($mdpOK && $ide) {
        $requete = "insert into utilisateur (ID_USER,IDENTIFIANT,PASSWORD,PRENOM,NOM,MAIL,TELEPHONE,ADRESSE,VILLE,CODEPOST)
                        values (null,'$identifiant','$mdp','$pren','$nom','$mail','$tel','$adr','$ville','$codepost')";

        mysqli_query($id, $requete);

        $_SESSION['identifiant'] = $identifiant;

        header("location:index.php");
    } else {
    ?>
        <script>
            alert("votre nom d'utilisateur est déjà utilisé ou votre mot de passe n'est pas assez fort");
        </script>
<?php
        header("location:inscription.php");
    }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/insc.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="https://kit.fontawesome.com/1a76fbbd1a.js" crossorigin="anonymous"></script>
</head>

<body>







    <div class="container">
        <div class="connexion">
            <h1>inscription</h1>
        </div>
        <br>
        <div class="phrase">
            <h2>Remplissez le formulaire d'inscription</h2><br><br><br>
        </div>
        <div class="form">
            <form action="" method="POST">
                <label for="identifiant">
                    <input type="text" name="identifiant" placeholder="identifiant" id="identifiant" required>
                </label>
                <label for="mdp">
                    <input type="password" name="mdp" id="mdp" placeholder="mot de passe" required><br><br>
                </label>
                <label for="pren">
                    <input type="text" name="prenom" placeholder="prenom" id="pren" required>
                </label>
                <label for="nom">
                    <input type="text" name="nom" placeholder="nom" id="nom" required><br><br>
                </label>
                <label for="mail">
                    <input type="text" name="mail" placeholder="mail" id="mail" required>
                </label>
                <label for="tel">
                    <input type="tel" name="tel" placeholder="numéro de téléphone" id="tel" required><br><br>
                </label>
                <label for="adresse">
                    adresse<br> <input type="text" name="adresse" placeholder="ex: 1 rue de la musique" id="adresse" required><br>
                </label>
                <label for="ville">
                    ville <br><input type="text" name="ville" placeholder="ex: Paris" id="ville" required><br>
                </label>
                <label for="codepost">
                    code postal <br><input type="text" name="codepost" placeholder="ex: 75000" id="codepost" required><br>
                </label>
                <input type="submit" value="inscription" name="bouton">
            </form>
        </div>
    </div>
</body>

</html>