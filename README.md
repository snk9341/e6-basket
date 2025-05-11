# 🏀 e6-basket

**e6-basket** est une application web de type e-commerce développée en PHP avec une base de données MySQL. Elle permet aux utilisateurs de parcourir un catalogue d’articles de basket, de gérer leur profil et leur panier, d’échanger des messages et de noter les produits. Un espace administrateur permet la gestion complète du site.

---

## ✨ Fonctionnalités principales

- 🔐 Inscription et connexion des utilisateurs
- 👤 Gestion du profil
- 📦 Catalogue d’articles de basket
- 🛒 Panier d’achat
- 💬 Messagerie interne
- ⭐ Notation des articles
- 🛠️ Interface d’administration

---

## 🛠️ Installation

### Prérequis

- Serveur Apache/Nginx
- PHP ≥ 7.4
- MySQL ≥ 5.7
- Navigateur web moderne
- Logiciel type XAMPP, WAMP ou MAMP (recommandé pour un usage local)

### Étapes

1. **Cloner le dépôt**

   ```bash
   git clone https://github.com/snk9341/e6-basket.git
   ```

2. **Déployer les fichiers**

   Copiez le dossier `e6-basket` dans le dossier racine de votre serveur web local (ex. : `htdocs` pour XAMPP).

3. **Créer la base de données**

   - Connectez-vous à phpMyAdmin ou utilisez un terminal MySQL.
   - Créez une base de données nommée par exemple `e6basket`.
   - Importez le fichier `baskort.sql` situé à la racine du projet :

     ```bash
     mysql -u root -p e6basket < baskort.sql
     ```

4. **Configurer la connexion à la base de données**

   Ouvrez le fichier `connect.php` et modifiez les variables selon votre environnement :

   ```php
   $host = 'localhost';
   $user = 'votre_utilisateur';
   $pass = 'votre_mot_de_passe';
   $dbname = 'e6basket';
   ```

5. **Lancer l'application**

   Dans votre navigateur, accédez à :

   ```
   http://localhost/e6-basket/
   ```

---

## 📁 Arborescence du projet

```
e6-basket/
├── css/                 # Feuilles de style
├── image/               # Images du site
├── connexion/           # Pages de connexion et inscription
├── baskort.sql          # Script SQL pour la base de données
├── connect.php          # Connexion à MySQL
├── index.php            # Page d’accueil
├── panier.php           # Panier d'achat
├── profil.php           # Profil utilisateur
├── message.php          # Système de messagerie
├── regex.php            # Fonctions de validation
├── slide.php            # Diaporama
├── header.php           # En-tête commun
├── header2.php          # Variante d'en-tête
└── README.md            # Documentation
```

---

## 📄 Licence

Ce projet est publié sous la licence MIT. Vous êtes libre de le modifier, l'utiliser et le distribuer.

---

## 🙌 Auteur

Projet développé par [snk9341](https://github.com/snk9341) dans le cadre du BTS SIO SLAM.
