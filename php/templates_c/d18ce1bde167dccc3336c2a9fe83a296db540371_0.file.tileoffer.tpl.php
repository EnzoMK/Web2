<?php
/* Smarty version 4.1.0, created on 2022-03-30 10:39:06
  from 'C:\xampp\htdocs\ProjetWebBis\Web2\vendors\tpl\tileoffer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6244172a2e3831_22197980',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd18ce1bde167dccc3336c2a9fe83a296db540371' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ProjetWebBis\\Web2\\vendors\\tpl\\tileoffer.tpl',
      1 => 1648629523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6244172a2e3831_22197980 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="col-lg-4 col-sm-6 mb-4">
    <!--item1-->
    <div class="portfolio-item">
        <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal<?php echo $_smarty_tpl->tpl_vars['numerotile']->value;?>
">
            <div class="portfolio-hover">
                <div class="portfolio-hover-content"><i id="plusaccueil" class="fas fa-plus fa-3x"></i></div>
            </div>

        </a>
        <div class="portfolio-caption">
            <div class="portfolio-caption-heading"><?php echo $_smarty_tpl->tpl_vars['titreoffre']->value;?>
</div>
            <div class="portfolio-caption-subheading text-muted"><?php echo $_smarty_tpl->tpl_vars['nomentreprise']->value;?>
</div>
        </div>
    </div>
</div>


<div class="portfolio-modal modal fade" id="portfolioModal<?php echo $_smarty_tpl->tpl_vars['numerotile']->value;?>
" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal"/>
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project details-->
                            <h2 class="text-uppercase"><?php echo $_smarty_tpl->tpl_vars['titreoffre']->value;?>
</h2>
                            <p class="item-intro text-muted"><?php echo $_smarty_tpl->tpl_vars['nomentreprise']->value;?>
</p>

                            <p><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</p>
                            <ul class="list-inline">
                                <li>
                                    <strong>Lieu:</strong> <?php echo $_smarty_tpl->tpl_vars['lieu']->value;?>

                                </li>
                                <li>
                                    <strong>Base de remuneration:</strong> <?php echo $_smarty_tpl->tpl_vars['remuneration']->value;?>

                                </li>
                                <li>
                                    <strong>Date de debut:</strong> <?php echo $_smarty_tpl->tpl_vars['datedebut']->value;?>

                                </li>
                                <li>
                                    <strong>Date de fin:</strong> <?php echo $_smarty_tpl->tpl_vars['datefin']->value;?>

                                </li>

                                <li>
                                    <strong>Date de publication de l'offre:</strong> <?php echo $_smarty_tpl->tpl_vars['datepublication']->value;?>

                                </li>
                                <li>
                                    <strong>Durée du stage:</strong> <?php echo $_smarty_tpl->tpl_vars['duree']->value;?>

                                </li>
                                <li>
                                    <strong>Competence:</strong> <?php echo $_smarty_tpl->tpl_vars['skill']->value;?>

                                </li>

                            </ul>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    id="buttonEdit" value="close">
                                <i class="fas fa-times me-1"></i>
                                Fermer
                            </button>
                            <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button"
                                    value="wishlist">
                                <a style="color: white; text-decoration: none;">wishlist</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php }
}
