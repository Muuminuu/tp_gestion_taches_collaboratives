# Déroulé : 

Création du premier commit et connexion avec repo en remote.

Creation des branches dev et teask_feature.

Mise en place de la connexion BDD:

Lancer le serveur avec ```php artisan serve```.

Création du Model Task et récupération du Model User.

Création de la migration
```php artisan make:migration create_tasks_table --create=tasks```

Mise en relation de user et task selon relation OneToMany : un utilisateur pourra avoir plusieurs tâches.

Renseigner les colonnes de Task dans le fichier de migration.


```php artisan migrate```

```php artisan make:controller TaskController```
```php artisan make:controller UserController```
```php artisan make:controller AuthController```

Renseigner les routes.

```git commit -m "add(Controller): create Auth, Task & User Controller"```

```git commit -m "modify(Views): modify layout and tasks pages"```

```git commit -m "modify(Views & README): last changes --- last commit"```

# Choix techniques :

Utilisation de Laravel pour profiter des l'architecture MVC déjà proposée.

Utilisation du gitignore, permettant de ne pas envoyer et alourdir le repos git avec des dependances facilement trouvable via composer : vendors, node_modules, etc.

Structuration de la BDD via création des modèles et fichier de migration qui renseigne les champs(colonnes) des modèles Task et User

Création des controller permettant de rendre une vue hydratée en fonction des requêtes client.
Les Vues utilisent l'extends, qui permet d'adapter l'affichage d'une page en ayant pour référence une page de layout, structure des vues.

Le fichier web.php renseigne les routes associées aux méthodes des controlleurs. Utilisation des routes nommées plutôt que des url en dur, afin de ne faire la modification qu'à un seul endroit, si modification il y a.

# Présentation de l'application :

L'utilisateur arrive sur la page d'accueil et a le choix de se connecter ou de s'enregistrer (on redirige vers la page choisie). Sur la page de connexion, on peut se rediriger vers la page d'enregistrement.

En se connectant, l'utilisateur arrive sur sa page de tableau de bord. S'il a choisi l'inscription, une fois fait, redirection vers sa page de tableau de bord.

Sur la page de tableau de bord, l'utilisateur peut voir ses tâches en cours, une pastille de couleur donnant une indication supplémentaire sur l'état d'avancement des tâches.

Il peut en créer de nouvelles, les modifier (status, nom et description) et les supprimer.

Il y a un bouton de deconnexion, affiché dans la navbar lorsque l'utilisateur est connecté.

