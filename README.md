# MicroHub - Site E-commerce avec WordPress et WooCommerce


## Identifiants de connexion
Voici les identifiants pour accéder aux différentes interfaces du site :
### 1. Administrateur principal (Admin)
- **Nom d'utilisateur** : `admin`
- **Mot de passe** : `admin@admin`

### 2. Éditeur
- **Nom d'utilisateur** : `adminM`
- **Mot de passe** : `admin`

### 3. Contributeur
- **Nom d'utilisateur** : `adminN`
- **Mot de passe** : `admin`


## Description du Projet
Ce projet consiste à développer un site e-commerce complet utilisant WordPress et WooCommerce. L'objectif est de proposer une expérience d'achat fluide et professionnelle, en respectant les meilleures pratiques du commerce en ligne.

### Thème choisi
- **Type de boutique** : Produits électroniques, incluant microcontrôleurs, capteurs, LEDs, et composants pour systèmes embarqués.


### Structure du site

Le site est conçu pour offrir une navigation claire et intuitive. Voici les éléments principaux de sa structure :

1. **En-tête (Header)** :
   - Logo de la boutique : **MicroHub**.
   - Menu de navigation principal avec les catégories :
     - **Boutique**
     - **OPTO ELECTRONIQUE**
     - **Alimentation, Mesure**
     - **Développement**
   - Liens supplémentaires :
     - "About"
     - "Contact Us"
   - Icônes utilisateur :
     - Compte utilisateur
     - Panier d'achat (indiquant le montant total et le nombre d'articles).

2. **Pages principales** :
   - **Page d'accueil** : Introduction à la boutique et présentation des catégories de produits.
   - **Catalogue produits** : Liste des produits avec options de filtrage et tri.
   - **Fiche produit détaillée** : Description, images, spécifications techniques .
   - **Page "À propos"** : Présentation succincte de MicroHub, une boutique en ligne marocaine spécialisée dans les produits électroniques (microcontrôleurs, capteurs, LEDs, etc.). La page met en avant notre mission, les avantages offerts (site intuitif, service client, promotions), et notre équipe d'experts passionnés dédiée à satisfaire les besoins des clients.
   - **Page "Contact"** : Fournit les moyens de joindre MicroHub pour toute assistance, réclamation, retour ou demande d'information. Les utilisateurs peuvent nous contacter via téléphone, email ou formulaire en ligne, avec des services dédiés pour le marketing, les ventes et le support client.

3. **Pied de page (Footer)** :
   - Liens vers les mentions légales, politiques de confidentialité, et réseaux sociaux.
   - Informations de contact et support client.
---

## Prérequis Techniques

1. **Serveur Local - XAMPP**
   - Installation de **XAMPP** pour créer un environnement de développement local avec **Apache** et **MySQL** activés.

2. **Installation de WordPress**
   - Téléchargement et installation de la dernière version stable de **WordPress** dans le dossier `htdocs` de XAMPP.
   - Création de la base de données via **phpMyAdmin** (par exemple : `cmsprojet2`).
   - Configuration de WordPress en accédant à `http://localhost/WordPress-master2` (avec **WordPress-master2** est le nom de dossier) et en suivant les étapes de l'assistant.
                                                                      
3. **Installation et Personnalisation du Thème Astra**
   - Installation et activation du thème **Astra** depuis le tableau de bord WordPress.
   - Personnalisation du thème via **Apparence** > **Personnaliser** (couleurs, typographie, en-tête, etc.).
   - Installation du plugin **Astra Starter Templates** pour importer un modèle de site adapté à une boutique en ligne.

4. **Extensions Nécessaires**
   - Installation du plugin **WooCommerce** pour gérer les produits, les commandes, et les paiements.
---

## Étapes d'Installation

1. **Installation de WordPress**
   - Téléchargement et installation de la dernière version stable de **WordPress** dans le dossier `htdocs` de XAMPP.
   - Création d'une base de données MySQL via **phpMyAdmin** en accédant à `http://localhost/phpmyadmin` et en créant une base de données (par exemple : `cmsprojet2`).
   - Accès à `http://localhost/WordPress-master2` (avec **WordPress-master2** est le nom de dossier) pour débuter l'installation de WordPress et suivre les étapes de configuration pour connecter WordPress à la base de données.

2. **Configuration des rôles utilisateurs**
   - Création de deux rôles utilisateurs dans WordPress :
     - **Contributeur** : Permet de rédiger et gérer ses propres articles sans pouvoir publier.
     - **Éditeur** : Permet de publier et gérer tous les articles et pages du site.

3. **Installation et personnalisation du thème**
   - Téléchargement et installation du thème **Astra** via **Apparence** > **Thèmes** > **Ajouter**, puis activation du thème.
   - Personnalisation du thème **Astra** via **Apparence** > **Personnaliser**, en ajustant les éléments visuels comme les couleurs, la typographie, et la disposition de l’en-tête.

4. **Installation de WooCommerce**
   - Téléchargement et installation du plugin **WooCommerce** via **Extensions** > **Ajouter**, puis activation du plugin.
   - Suivi de l'assistant de configuration pour définir les paramètres de base de la boutique, tels que la devise, les options de livraison, les méthodes de paiement et les paramètres fiscaux.

5. **Gestion du catalogue produits**
   - Création des pages essentielles pour la boutique en ligne :
     - **Page d’accueil**
     - **Page Boutique**
     - **Page Mon compte**
     - **Page Panier**
     - **Page Contact**
     - Structuration du catalogue avec trois catégories principales :
     - **OPTO ELECTRONIQUE**
     - **Alimentation, Mesure**
     - **Développement**
   - Ajout d'un minimum de 15 produits, répartis parmi les différentes catégories ci-dessus.
---

## Fonctionnalités et Expérience Utilisateur
- Navigation intuitive avec un menu clair.
- Filtres de recherche avancée.
- Tri des produits par prix, popularité, etc.
- Pagination optimisée.

---

## Livrables
- **Code source complet** : Disponible dans ce dépôt.
- **Base de données exportée** : Incluse dans ce dépôt.
- **Rapport détaillé** : Entre 15 et 20 pages expliquant le processus de développement avec captures d'écran.
- **Lien vers le site hébergé** (optionnel).

---

## Instructions pour lancer le projet

1. **Clonage du dépôt Git**
   - Clonez le dépôt Git avec la commande suivante :
     ```bash
     git clone https://github.com/frawatab/WordPress-master2.git
     ```
2. **Déplacement du projet dans le dossier `htdocs` de XAMPP**
   - Déplacez le dossier cloné (`WordPress-master2`) dans le répertoire `htdocs` de votre installation XAMPP (généralement situé dans `C:\xampp\htdocs` sous Windows ou `/Applications/XAMPP/htdocs` sous macOS).
3. **Création de la base de données MySQL via phpMyAdmin**
   - Accédez à **phpMyAdmin** en ouvrant un navigateur et en allant à `http://localhost/phpmyadmin`.
   - Créez une nouvelle base de données, par exemple, `cmsprojet2`.
   - Assurez-vous que l'encodage est `utf8mb4_general_ci`.
