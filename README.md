# Burger Kebab — Module Gestion des Categories

## Objectif
Module de gestion des categories de produits pour le restaurant Burger Kebab.
Permet a un administrateur de gerer les categories du menu.

## Fonctionnalites
- Afficher la liste des categories
- Creer une nouvelle categorie
- Modifier une categorie existante
- Activer ou desactiver une categorie
- Supprimer une categorie

## Regles metier
- Le nom est obligatoire
- Deux categories ne peuvent pas avoir le meme nom
- Une categorie inactive n'est plus visible dans le menu client
- L'ordre d'affichage organise les categories dans le menu

## Prerequis
- PHP 8+
- Composer
- Laravel 11
-  MySQL

## Installation

### 1. Cloner le projet
git clonehttps://github.com/soundous25/burger_kebab.git
cd burger-kebab-categories

### 2. Installer les dependances
composer install

### 3. Configurer l'environnement
cp .env.example .env
php artisan key:generate

### 4. Base de donnees
php artisan migrate
php artisan db:seed

### 5. Lancer le projet
php artisan serve

Ouvrir : http://localhost:8000

## Structure du projet
- app/Models/Category.php — Modele
- app/Http/Controllers/CategoryController.php — Controleur
- database/migrations/ — Migration table categories
- database/seeders/CategorySeeder.php — Donnees test
- resources/views/categories/ — Vues Blade
- routes/web.php — Routes

## Choix techniques
- Architecture MVC de Laravel
- Controller Resource pour CRUD complet
- Validation Laravel pour sécuriser les formulaires
- Blade pour les vues dynamiques
- Seeder pour données de test
- Git pour suivi des versions
