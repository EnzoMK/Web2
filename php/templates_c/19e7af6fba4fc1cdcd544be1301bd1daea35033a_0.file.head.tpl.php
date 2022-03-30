<?php
/* Smarty version 4.1.0, created on 2022-03-30 11:13:42
  from 'C:\xampp\htdocs\Web2\vendors\tpl\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62441f467143f7_22272545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19e7af6fba4fc1cdcd544be1301bd1daea35033a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\vendors\\tpl\\head.tpl',
      1 => 1648557082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62441f467143f7_22272545 (Smarty_Internal_Template $_smarty_tpl) {
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
