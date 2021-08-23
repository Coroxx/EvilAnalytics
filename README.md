
<div align="center">
  <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/285/vampire_light-skin-tone_1f9db-1f3fb_1f3fb.png" width="75"> <h1> EvilAnalytics </h1>

  
<strong> Track devices, countries, requests, routes and many other with EvilAnalytics ! Version 1.4 </strong>
</div>

- [Screenshots of the dashboard (Captures d'écrans du panel)](https://github.com/Coroxx/EvilAnalytics#screen) 📷


## Documentation language

- [French](https://github.com/Coroxx/EvilAnalytics#fr) 🇫🇷
- [English](https://github.com/Coroxx/EvilAnalytics#ang) 🇬🇧

<div>
<strong>

<br>

### 🔒 Privacy
You are the master of your data, all analytical data are stored in your database.

</strong>

### Changelog : V1.4 🤖

<i> Analytical data is now much more accurate ! </i>

<br>
<br>

### Changelog : V1.2  🇫🇷-🇬🇧

<i> The dashboard is now available in French 🇫🇷 and English 🇬🇧 languages </i>

</div>

<br>
<i> Installation problems? Contact me on discord : Corox#2729 </i> 👾

<br>
<br>

<div id="ang">

## Getting Started

<i> Install EvilAnalytics is pretty easy ! </i> 😎

````
composer require coroxx/evilanalytics

php artisan vendor:publish --provider="coroxx\evilanalytics\EvilanalyticsServiceProvider"

php artisan vendor:publish --provider="Stevebauman\Location\LocationServiceProvider"

````

<strong> To significantly increase the accuracy of the analytical data you should include in your App/Console/Kernel.php file this function in the : 

```protected function schedule(Schedule $schedule)``` </strong>


![code](https://i.ibb.co/87FwcnN/image.png)

<strong> (See the Kernel.php file at the root) </strong>

### Then run the task <strong>every hour</strong> on your server  

```` php artisan schedule:run ````

### This will eliminate a large part of the bots every hour

<br>

> ## You have almost finished your installation 😇
<br> <br>
Run your migrations to create the calls table : 

```
php artisan migrate
```

<br>
<strong> Now you have to configure the Middleware in your web.php file like this : </strong>
<div align="middle">
<br>

![code](https://i.ibb.co/Qd37WBN/image.png)

</div>

### Good work! 👍

Now acces to the dashboard with /analytics/en ✅

<br>

## Caution 🚨 

<strong> Don't forget to name all your routes, otherwise you won't have an accurate tracking of the number of visits of each page
<br><br>
Don't forget that as such, the panel is accessible by everyone, so don't hesitate to set up a login system to access it :

For this, modify /vendor/coroxx/evilanalytics/src/routes/web.php 

</strong> 
</div>

<br>
<br><br><br>

<div id="fr">

## Guide d'installation

<i> Installer EvilAnalytics est plutôt simple ! </i> 😎

 ````
composer require coroxx/evilanalytics

php artisan vendor:publish --provider="coroxx\evilanalytics\EvilanalyticsServiceProvider"

php artisan vendor:publish --provider="Stevebauman\Location\LocationServiceProvider"

````

<strong> Pour augmenter nettement la précision des données analytiques vous devez inclure dans votre fichier App/Console/Kernel.php cette fonction dans la fonction  : 

```protected function schedule(Schedule $schedule)``` </strong>


![code](https://i.ibb.co/87FwcnN/image.png)

<strong> (Voir le fichier Kernel.php à la racine) </strong>

### Puis exécuter la tâche <strong> toutes les heures </strong> sur votre serveur  
```` php artisan schedule:run ````

### Ce qui va éliminer une grande partie des bots toutes les heures

<br>


> ## Vous touchez à la fin de l'installation 😇
<br> <br>
Lancez vos migrations pour créer la table calls avec : 

```
php artisan migrate
```

<br>
<strong> Il ne vous reste plus qu'à à ajouter le Middleware dans votre fichier web.php comme l'exemple le montre : </strong>
<div align="middle">
<br>

![code](https://i.ibb.co/VpD8GvW/image.png)

</div>

### Bon travail chef ! 👍

Maintenant accédez au panel avec l'url /analytics/fr ✅

<br><br>
## Attention 🚨 

<strong> N'oubliez pas de nommer toutes vos routes, sinon vous n'aurez pas de suivi précis sur le nombre de visite de chaque pages
<br><br>
N'oubliez pas que comme tel, le panel est accessible par tout le monde, n'hésitez pas à mettre en place à un sytème de login pour y accéder

Pour cela, il faut modifier les routes /vendor/coroxx/evilanalytics/src/routes/web.php
</strong>

</div>
  
  
<br>
<br>
<br>

<div id="screen">

# Screenshots / Captures d'écran

![code](https://i.ibb.co/tJG81T9/image.png)
![code](https://i.ibb.co/D5nwRY2/image.png)
![code](https://i.ibb.co/pnbfSFx/image.png)

</div>
