<?php
/* Smarty version 4.1.0, created on 2022-03-30 11:47:30
  from 'C:\xampp\htdocs\ProjetWebBis\Web2\vendors\tpl\bandeau_haut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6244273233ca02_84521049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a0c566ceaf1a16fa6212d72328484ba09238c6a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetWebBis\\Web2\\vendors\\tpl\\bandeau_haut.tpl',
      1 => 1648492935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6244273233ca02_84521049 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="../assets/img/logo/logo.webp" style="height: 100px" alt="..."/></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <form method="post">
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="?url=acceuil">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="?url=compte">Compte</a></li>
                    <li class="nav-item"><a class="nav-link" href="?url=contact">Contact</a></li>
                    <li class="nav-item">
                        <button name="deconnexion" type="submit" style="background:transparent; border: 0px;"><a
                                    class="nav-link">DECONNEXION</a></button>
                    </li>
                </ul>
            </div>
        </form>


    </div>
</nav><?php }
}
