
<div align="center">  
  <img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/120/apple/285/vampire_light-skin-tone_1f9db-1f3fb_1f3fb.png" width="75"> <h1> EvilAnalytics </h1>

  
<strong> Track devices, countries, requests, routes and many other with EvilAnalytics ! Version 1.0 </strong>
</div>

- [Screenshots of the dashboard (Captures d'écrans du panel)](https://github.com/Coroxx/test-readme#screen) 📷


## Documentation language

- [French](https://github.com/Coroxx/test-readme#fr) 🇫🇷
- [English](https://github.com/Coroxx/test-readme#ang) 🇬🇧

<div>
<strong>

<br>

### 🔒 Privacy
No tracking data are redirected to external servers, you are the only master of your data!

</strong>

</div>

<br>
<i> Installation problems? Contact me on discord : Corox#2729 </i> 👾

<br>
<br>

<div id="ang">

## Getting Started

<i> Install EvilAnalytics is pretty easy ! </i> 😎

 - Add   "AnalyticMiddleware.php" in your <strong>App/Http/Middleware</strong> folder

 - Add   "AnalyticsController.php" in your <strong>App/Http/Controllers</strong> folder

 - Add   "Call.php" in your <strong>App/Models</strong>folder

 - Add   "2021_08_04_191933_create_calls_table.php" in your  <strong> database/migrations </strong>  folder

 - Add "analytics" folder to your <strong> resources/views </strong> folder

 - Then to finish add the "assets" folder in your <strong>public</strong> folder


Download dependencies ➕
```
composer require matomo/device-detector
composer require stevebauman/location
php artisan vendor:publish --provider="Stevebauman\Location\LocationServiceProvider"
```


⚠️ Views are based on TailWindCSS Framework, if you don't have it : 
```
https://tailwindcss.com/docs/guides/laravel
```

<strong> If you're using Bootstrap or other CSS Framework, you can replace the 
```
<link rel="stylesheet" href="{{mix('css/app.css')}}">
```
 </strong> By <strong>
```
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
```

in the <head\> of index.blade.php

 </strong>


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

![code](https://i.ibb.co/SPHp13S/image.png)

</div>

### Good work! 👍

<br>

## Caution 🚨 

<strong> Don't forget to name all your routes, otherwise you won't have an accurate tracking of the number of visits of each page </strong>

</div>

<br>
<br><br><br>

<div id="fr">

## Guide d'installation

<i> Installer EvilAnalytics est plutôt simple ! </i> 😎

 - Ajouter   "AnalyticMiddleware.php" dans votre dossier <strong>App/Http/Middleware</strong>

 - Ajouter   "AnalyticsController.php" dans votre dossier <strong>App/Http/Controllers</strong> 

 - Ajouter   "Call.php" dans votre dossier <strong>App/Models</strong>

 - Ajouter   "2021_08_04_191933_create_calls_table.php" dans votre dossier   <strong> database/migrations </strong>

 - Ajouter votre dossier "analytics" dans votre dossier <strong> resources/views </strong>

 - Et pour finir ajoutez votre dossier "assets" dans votre dossier <strong>public</strong>


Installer les dépendances ➕
```
composer require matomo/device-detector
composer require stevebauman/location
php artisan vendor:publish --provider="Stevebauman\Location\LocationServiceProvider"
```


⚠️ Les vues sont réalisées à l'aide du framework CSS Tailwind, si vous souhaitez l'installer : 
```
https://tailwindcss.com/docs/guides/laravel
```

<strong> Si vous utilisez déjà un autre framework CSS comme Bootstrap ou autre, remplacez la ligne  
```
<link rel="stylesheet" href="{{mix('css/app.css')}}">
```
 </strong> Par <strong>
```
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
```

dans le <head\> du fichier index.blade.php

 </strong>


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

![code](https://i.ibb.co/qJVNjYC/image.png)

</div>

### Bon travail chef ! 👍

<br><br>
## Attention 🚨 

<strong> N'oubliez pas de nommer toutes vos routes, sinon vous n'aurez pas de suivi précis sur le nombre de visite de chaque pages </strong>

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
