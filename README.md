
<div align="center">
  <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/285/vampire_light-skin-tone_1f9db-1f3fb_1f3fb.png" width="75"> <h1> EvilAnalytics </h1>

  
<strong> Track devices, countries, requests, routes and many other with EvilAnalytics ! Version 1.4 </strong>
</div>

- [Screenshots of the dashboard (Captures d'Γ©crans du panel)](https://github.com/Coroxx/EvilAnalytics#screen) π·


## Documentation language

- [French](https://github.com/Coroxx/EvilAnalytics#fr) π«π·
- [English](https://github.com/Coroxx/EvilAnalytics#ang) π¬π§

<div>
<strong>

<br>

### π Privacy
You are the master of your data, all analytical data are stored in your database.

</strong>

### Changelog : V1.4 π€

<i> Analytical data is now much more accurate ! </i>

<br>
<br>

### Changelog : V1.2  π«π·-π¬π§

<i> The dashboard is now available in French π«π· and English π¬π§ languages </i>

</div>

<br>
<i> Installation problems? Contact me on discord : Corox#2729 </i> πΎ

<br>
<br>

<div id="ang">

## Getting Started

<i> Install EvilAnalytics is pretty easy ! </i> π

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

> ## You have almost finished your installation π
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

### Good work! π

Now acces to the dashboard with /analytics/en β

<br>

## Caution π¨ 

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

<i> Installer EvilAnalytics est plutΓ΄t simple ! </i> π

 ````
composer require coroxx/evilanalytics

php artisan vendor:publish --provider="coroxx\evilanalytics\EvilanalyticsServiceProvider"

php artisan vendor:publish --provider="Stevebauman\Location\LocationServiceProvider"

````

<strong> Pour augmenter nettement la prΓ©cision des donnΓ©es analytiques vous devez inclure dans votre fichier App/Console/Kernel.php cette fonction dans la fonction  : 

```protected function schedule(Schedule $schedule)``` </strong>


![code](https://i.ibb.co/87FwcnN/image.png)

<strong> (Voir le fichier Kernel.php Γ  la racine) </strong>

### Puis exΓ©cuter la tΓ’che <strong> toutes les heures </strong> sur votre serveur  
```` php artisan schedule:run ````

### Ce qui va Γ©liminer une grande partie des bots toutes les heures

<br>


> ## Vous touchez Γ  la fin de l'installation π
<br> <br>
Lancez vos migrations pour crΓ©er la table calls avec : 

```
php artisan migrate
```

<br>
<strong> Il ne vous reste plus qu'Γ  Γ  ajouter le Middleware dans votre fichier web.php comme l'exemple le montre : </strong>
<div align="middle">
<br>

![code](https://i.ibb.co/VpD8GvW/image.png)

</div>

### Bon travail chef ! π

Maintenant accΓ©dez au panel avec l'url /analytics/fr β

<br><br>
## Attention π¨ 

<strong> N'oubliez pas de nommer toutes vos routes, sinon vous n'aurez pas de suivi prΓ©cis sur le nombre de visite de chaque pages
<br><br>
N'oubliez pas que comme tel, le panel est accessible par tout le monde, n'hΓ©sitez pas Γ  mettre en place Γ  un sytΓ¨me de login pour y accΓ©der

Pour cela, il faut modifier les routes /vendor/coroxx/evilanalytics/src/routes/web.php
</strong>

</div>
  
  
<br>
<br>
<br>

<div id="screen">

# Screenshots / Captures d'Γ©cran

![code](https://i.ibb.co/tJG81T9/image.png)
![code](https://i.ibb.co/D5nwRY2/image.png)
![code](https://i.ibb.co/pnbfSFx/image.png)

</div>
