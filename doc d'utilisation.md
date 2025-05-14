# 🚀 Utilisation de l'application e6-basket

## 🧑‍💼 Accès à l’application

Une fois le projet installé et lancé sur votre serveur local, accédez à l'application via :
http://localhost/e6-basket/

---

## 👥 Gestion des utilisateurs

### 🔐 Inscription

- Cliquez sur **"S'inscrire"** dans le menu principal.
- Renseignez les informations demandées (nom, prénom, email, mot de passe, etc.).
- Un compte sera créé dans la base de données.

### 🔑 Connexion

- Cliquez sur **"Se connecter"**.
- Entrez vos identifiants pour accéder à votre espace personnel.

---

## 📦 Navigation et achat

### 🏠 Accueil

- Vous y trouverez un diaporama d’articles ainsi que des suggestions.
- Le menu vous permet de naviguer vers les pages **catalogue**, **panier**, **profil**, etc.

### 🛒 Panier

- Cliquez sur **"Ajouter au panier"** pour stocker un produit.
- Accédez à la page **panier.php** pour visualiser les articles, modifier les quantités ou supprimer des articles.
- Un bouton de **validation de commande** peut être présent selon les versions.

---

## 🌟 Notation et commentaires

- Chaque article peut être noté (via étoiles ou champ de commentaire).
- Les notes sont stockées et visibles par tous les utilisateurs.
- Une moyenne est calculée pour chaque produit.

---

## 💬 Messagerie interne

- Accédez à la page **message.php**.
- Vous pouvez envoyer un message à un autre utilisateur du site.
- Le système affiche la liste des messages envoyés et reçus.

---

## ⚙️ Interface d'administration (si activée)

### Accès

- Connectez-vous avec un compte ayant le rôle "admin" (à définir dans la base de données).
- Accès à un tableau de bord vous permettant de :
  - Gérer les utilisateurs (activation/désactivation, suppression)
  - Ajouter, modifier ou supprimer des articles du catalogue
  - Modérer les notes/commentaires

---

## 🧪 Données de test (facultatif)

Vous pouvez insérer manuellement quelques utilisateurs dans la base :

```sql
INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe, role)
VALUES ('Doe', 'John', 'john@demo.com', SHA1('demo1234'), 'utilisateur'),
       ('Admin', 'Site', 'admin@demo.com', SHA1('admin1234'), 'admin');