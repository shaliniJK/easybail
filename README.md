# Easy Bail

**Sarah BEN ABDESSLEM**
**Jayjaywantee KOODUN**

Master 2 e-Services 2019/2020

---

## Configuration de l'environnement de développement

Ce projet nécéssite `PHP >=7.2.0` et utilise le framework [Laravel](<(https://laravel.com/docs)>). Laravel utilise [Composer](https://getcomposer.org/) pour la gestion des dépendances. Les données sont stockées dans une base `MySQL`.

Avant de lancer ce projet, il faut avoir installé sur votre machine :

-   PHP 7.3,
-   Composer,
-   MySQL

Après avoir cloné ce projet, assurez-vous d'avoir la dernière version de Composer et téléchargez les dépendances PHP du projet avec les commandes suivantes :

```bash
composer install
```

Ensuite, installez les dépendances NPM du projet avec :

```bash
npm install
```

Créer une copie du fichier `.env` à la racine du projet :

```bash
cp .env.example .env
```

Créer une base de données vide avec le nom `easybail` pour notre application sur `MySQl`.

Dans le fichier `.env`, indiquez les options `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME` et `DB_PASSWORD` pour correspondre aux informations d'identification de la base de données que vous venez de créer.

Une fois que les informations d'identification sont dans le fichier `.env`, vous pouvez maintenant migrer votre base de données.

```bash
php artisan key:generate
```

Vous pouvez maintenant migrer votre base de données :

```bash
php artisan migrate
```

Lancer l'étape de build pour les pré-processeurs CSS et JavaScript avec :

```bash
npm run dev
```

Vous pouvez maintenant lancer un serveur de développement sur l'adresse _http://localhost:8000_ avec la commande :

```bash
php artisan serve
```

Si, pour une raison quelconque, votre projet cesse de fonctionner, procédez comme suit pour réinstaller les dépendances et mettre à jour les tables dans la base des données :

```bash
composer install
php artisan migrate
```

Si une ou plusieurs classes sont introuvables :

```bash
composer dump-autoload
```

## pour toute modif css

```bash
npm run watch
```

## creer nouvelle table

```bash
php artisan make:model Locataire -mc
```

## pour clean refresh database

```bash
php artisan migrate:fresh
```

## pour remplir des données dans la base après un refresh

```bash
php artisan db:seed --class=PropertyTypesTableSeeder
php artisan db:seed --class=BailTypesTableSeeder
php artisan db:seed --class=AttributesTableSeeder

```

## pour retourner en arrière, à la dernière migration

```bash
php artisan migrate:rollback
```

```bash
php artisan migrate:fresh
php artisan tinker

>>> factory(App\User::class)->create();

>>> factory(App\Property::class,3)->create(['user_id'=> 1]);

>>> factory(App\Locataire::class)->create(['user_id' => 1, 'property_id' => 1] );

>>> factory(App\Locataire::class)->create(['user_id' => 1, 'property_id' => 2] );

>>> factory(App\Locataire::class)->create(['user_id' => 1, 'property_id' => 3] );

>>> factory(App\Location::class)->create(['user_id' => 1, 'property_id' => 1, 'locataire_id' => 1] );
```
