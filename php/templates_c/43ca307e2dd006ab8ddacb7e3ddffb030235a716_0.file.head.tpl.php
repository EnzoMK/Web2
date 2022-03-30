<?php
/* Smarty version 4.1.0, created on 2022-03-30 15:13:31
  from 'C:\xampp\htdocs\ProjetWebBis\Web2\vendors\tpl\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6244577bbd53c9_69977299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43ca307e2dd006ab8ddacb7e3ddffb030235a716' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetWebBis\\Web2\\vendors\\tpl\\head.tpl',
      1 => 1648562768,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6244577bbd53c9_69977299 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="descriptionn"/>
    <meta name="author" content="kimbo"/>
    <title>SuperStage</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/img/logo/logo.png"/>
    <!-- Font Awesome icons (free version)-->
    <link rel="stylesheet" href="../vendors/fontawesome/css/all.min.css">
    <!-- Google fonts
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>-->
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet"/>
    <!-- PWA -->
    <link rel="manifest" href="../manifest.json">
    <link rel="apple-touch-icon" href="assets/icons/72.png">
    <meta name="apple-mobile-web-app-status-bar" content="white">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="white">

    <?php echo '<script'; ?>
>
        if ("serviceWorker" in navigator) {
            navigator.serviceWorker.register("../sw.js");
        }
    <?php echo '</script'; ?>
>
</head>
<?php }
}
