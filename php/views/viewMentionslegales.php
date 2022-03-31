<!-- Appel de smarty pour utiliser les templates -->
<?php
include("../vendors/smarty/libs/Smarty.class.php");
$objSmarty = new Smarty();
?>

<!-- Appel du template du head  -->
<?php $objSmarty->display("../vendors/tpl/head.tpl"); ?>


<img src="../assets/img/logo/logo.webp" style="height: 150px" alt="..."/>
<main style="text-align: center; font-weight:bold;">
<br><br>
<h1>Mentions légales</h1> 
<br>

<h2>Présentation du site</h2> 
<br>
<p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie numérique, il est précisé aux utilisateurs du site www.superstage.com l'identité des différents intervenants dans le cadre de sa réalisation et de son suivi :
Le présent site est édité par : reese, auto-entrepreneur ayant pour numéro de SIRET 57943845897455348 et qui est domiciliée au 4 rue reseau pouloulou
Responsable de la publication : REESE, joignable par téléphone au 039474374 et par email dfbrtg@gmail.com
Webmaster du site: agence, joignable par téléphone au 0833939393
Hébergeur du site: ouioui, qui est domicilié rezo et joignable par téléphone au 0938347638</p>
</p> 
<br>
<h2>Propriété intellectuelle et contrefaçons</h2>

<p>L’entreprise SuperStage est propriétaire des droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, notamment : les textes, les images, les graphismes, le logo, les icônes,…
Toute reproduction, représentation, modification, publication, adaptation de tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de l’entreprise SuperStage.
Toute exploitation non autorisée du site ou d’un quelconque élément qu’il contient sera considérée comme constitutive d’une contrefaçon et poursuivie conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.</p>

<br>
<h2>Cookies et traceurs</h2> 

<p>Le site internet www.superstage.com possède un système de mesure d’audience, ainsi qu’une fonction de partage sur les réseaux sociaux.
En application de la directive européenne dite « paquet télécom », les internautes doivent être informés et donner leur consentement préalablement à l’insertion de traceurs (plus couramment appelés « cookies »). Les internautes doivent disposer d’une possibilité de choisir de ne pas être tracés lorsqu’ils visitent un site ou utilisent une application. Les éditeurs de sites internet ont donc l’obligation de solliciter au préalable le consentement des utilisateurs.
Le refus d’installation d’un cookie peut entraîner l’impossibilité d’accéder à certains services. L’internaute peut toutefois configurer son navigateur internet pour refuser l’installation des cookies.</p>
<br>

<h3>Mesure d’audience </h3>

<p>Les cookies de mesure d’audience sont de petits fichiers qui permettent de connaître et d’analyser les statistiques de trafic sur le site internet : les pages visitées, le nombre de visites, le taux de rebond, la provenance des visites,… Les cookies de mesure d’audience sont totalement anonymes.
Sur ce site, c’est la solution Google Analytics qui est utilisée pour mesurer l’audience.</p>

<br>
<h3>Réseaux sociaux</h3> 

<p>Les cookies liés aux réseaux sociaux sont associés aux boutons qui facilitent le partage des pages et articles sur les réseaux sociaux.</p>
<br>
<h2>Formulaire de contact et commentaires</h2> 

<p>Vous pouvez être amené à nous indiquer votre adresse e-mail lorsque vous remplissez notre formulaire de contact ou déposez un commentaire sur l’un des articles du site site www.superstage.com.


En aucun cas, votre adresse e-mail ne sera cédée à des tiers.</p>

<br>
<h2>Modération des commentaires</h2> 

<p>Le choix de validation d’un commentaire sur le site www.superstage.com est laissé à l’entière appréciation du responsable de publication. Les commentaires peuvent être supprimés, modifiés et corrigés pour une meilleure compréhension des visiteurs (notamment pour l’orthographe).


L’internaute peut signer son commentaire de son nom ou pseudo ou nom de son entreprise. Il peut également renseigné une URL dans le champ « site web ». Ce lien peut ne pas apparaître si il a été jugé que le commentaire n’apportait pas réellement de plus value à l’article. Ceci, même si le commentaire est publié.


Voici des exemples de cas ou un commentaire peut-être modéré ou supprimé :



Il a été supprimé par l’anti-spam

Il n’apporte pas réellement de plus value et n’est pas utile pour les internautes

Il est truffé de fautes d’orthographe ou incompréhensible

Il semble être déposé uniquement dans un but auto-promotionnel

Le mail indiqué est visiblement faux

Il est jugé diffamatoire pour un tiers</p>

<br>
<h2>Newsletter</h2> 

<p>Vous pouvez vous abonner à la newsletter du site. Vous recevez alors automatiquement et gratuitement des newsletters traitants les sujets du site www.superstage.com.


Vous pouvez vous désinscrire à tout moment de la newsletter en cliquant sur le lien de désabonnement présent en bas de chaque newsletter.


En aucun cas, votre adresse e-mail ne sera cédée à des tiers.</p>

<br>
<h2>Liens hypertextes</h2> 

<p> site internet contient un certain nombre de liens hypertextes vers d’autres sites. Cependant, www.superstage.com n’a pas la possibilité de suivre et vérifier le contenu de ces sites, et n’assumera en conséquence aucune responsabilité de ce fait.</p>

<br>
<h2>Flux RSS</h2>

<p>Les flux RSS sont exclusivement destinés aux visiteurs du site pour une utilisation personnelle et ne sauraient en aucun cas servir à alimenter d’autres sites, sauf autorisation écrite préalable de www.superstage.com.</p>
<br>

<button  id="retourlegale" name="submit" onClick='window.location.href="?url=identification"' >Retour</button>

<br><br><br></main>

<!-- Implémentation Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Implémentation des script JS-->
<script src="../js/scripts.js"></script>
<script src="../js/champs.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>