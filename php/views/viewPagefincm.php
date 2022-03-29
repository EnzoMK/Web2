<?php
include("../vendors/smarty/libs/Smarty.class.php");
$objSmarty = new Smarty();
?>
<?php $objSmarty->display("../vendors/tpl/head.tpl"); ?>


<body id="page-top">
<!-- Navigation-->
<?php $objSmarty->display("../vendors/tpl/bandeau_haut.tpl"); ?>

<br><br>
<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading fw-bold">Merci de votre participation.</h1>
          <p class="fw-bold">Votre création, modification ou suppression a bien été prise en compte.</p>
          <p class="fw-bold">Vous pouvez désormais retournez à la <a href="?url=acceuil" style="color: black;">page d'accueil. </a></p>

        </div>
      </section>



      <?php $objSmarty->display("../vendors/tpl/footer.tpl"); ?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>