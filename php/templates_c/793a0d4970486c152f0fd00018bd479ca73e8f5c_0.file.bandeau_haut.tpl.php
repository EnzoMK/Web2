<?php
/* Smarty version 4.1.0, created on 2022-03-26 18:32:33
  from 'C:\xampp\htdocs\Web2\vendors\tpl\bandeau_haut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_623f4e311b49d9_55424705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '793a0d4970486c152f0fd00018bd479ca73e8f5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\vendors\\tpl\\bandeau_haut.tpl',
      1 => 1648310005,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_623f4e311b49d9_55424705 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="../assets/img/logo/logo.png" alt="..."/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="?url=acceuil">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="?url=compte">Compte</a></li>
                <li class="nav-item"><a class="nav-link" href="?url=contact">Contact</a></li>
                <li class="nav-item"><button name="deconnexion" style="background:transparent; border-radius: 7px;"><a class="nav-link" href="../index.php">DECONNEXION</a></button></li>
            </ul>
        </div>

    </div>
</nav><?php }
}