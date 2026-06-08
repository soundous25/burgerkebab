# Burger Kebab — Module Gestion des Catégories

## Objectif

Ce projet a été réalisé dans le cadre de la Mission 001 du projet Burger Kebab.

L'objectif est de développer un module permettant à un administrateur de gérer les catégories de produits du restaurant.

## Fonctionnalités

- Afficher la liste des catégories
- Créer une nouvelle catégorie
- Modifier une catégorie existante
- Activer ou désactiver une catégorie
- Supprimer une catégorie
- Rechercher une catégorie
- Pagination des résultats

## Règles métier

- Le nom d'une catégorie est obligatoire.
- Deux catégories ne peuvent pas avoir le même nom.
- Une catégorie inactive n'est plus visible dans le menu destiné aux clients.
- L'ordre d'affichage permet d'organiser les catégories dans le menu.

## Prérequis

- PHP 8.2 ou supérieur
- Composer
- Laravel 12
- MySQL
- Git

## Installation

### 1. Cloner le projet

bash git clone https://github.com/soundous25/burger_kebab.git cd burger_kebab 

### 2. Installer les dépendances

bash composer install 

### 3. Configurer l'environnement

- bash cp .env.example .env 
- php artisan key:generate 

### 4. Configurer la base de données

Modifier les paramètres de connexion dans le fichier .env.

Puis exécuter :

- bash php artisan migrate 
- php artisan db:seed 

### 5. Lancer l'application

bash php artisan serve 

L'application sera accessible à l'adresse :

text http://127.0.0.1:8000 

## Structure du projet

### Modèle
- Category.php : représente la table des catégories et permet les interactions avec la base de données.

### Contrôleur
- CategoryController.php : gère les opérations CRUD (Créer, Lire, Modifier, Supprimer).

### Base de données
- Migration categories : création de la table categories.
- Seeder CategorySeeder : insertion des données de test.

### Vues
- index.blade.php : affichage de la liste des catégories.
- create.blade.php : formulaire d'ajout d'une catégorie.
- edit.blade.php : formulaire de modification d'une catégorie.
- app.blade.php : template principal de l'application.

### Routes
- web.php : définition des routes du module catégories.

## Choix techniques

- Utilisation de l'architecture MVC de Laravel.
- Utilisation d'Eloquent ORM pour la communication avec la base de données.
- Utilisation des migrations pour gérer la structure de la base de données.
- Utilisation des Seeders pour générer des données de test.
- Utilisation de Blade pour les interfaces utilisateur.
- Utilisation des validations Laravel pour sécuriser les formulaires.
- Utilisation de Git et GitHub pour le versionnement du projet.
- Ajout de la recherche et de la pagination pour améliorer l'expérience utilisateur.
