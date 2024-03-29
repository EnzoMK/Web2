
<!DOCTYPE html>
<html lang="en">

<head>
{* balises meta indispensable pour le référencement et pour le bon affichage *}
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="descriptionn"/>
    <meta name="author" content="kimbo"/> 
    {* nom de la page *}
    <title>SuperStage</title>
    <!-- icone pour le title -->
    <link rel="icon" type="image/x-icon" href="../assets/img/logo/logo.png"/>
    <!-- Font Awesome icons (free version)-->
    <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css">
    <!-- Google fonts
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    {* <link rel="stylesheet" href="../vendors/google/Font_Montserrat.css">
    <link rel="stylesheet" href="../vendors/google/Font_Roboto.css"> *}
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>-->
    <!-- Lien du style CSS (incluant Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet"/>
    <!-- PWA -->
    <link rel="manifest" href="../manifest.json">
    <link rel="apple-touch-icon" href="assets/icons/72.png">
    <meta name="apple-mobile-web-app-status-bar" content="white">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="white">

{* appel du service worker permettant d'avoir accès au site meme en mode hors ligne grace à la mise en cache des données *}
    <script>
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.register("../sw.js");
        }
    </script>
</head>
