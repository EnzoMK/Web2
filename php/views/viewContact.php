<?php
include("../vendors/smarty/libs/Smarty.class.php");
$objSmarty = new Smarty();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperStage</title>
    <link rel="icon" href="../assets/img/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>
</head>

<body>

<?php $objSmarty->display("../vendors/tpl/bandeau_haut.tpl"); ?>

<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <br> <br> <br><br><br>
            <h2 class="section-heading text-uppercase">Contactez-nous</h2>
            <h3 class="section-subheading text-muted">Vous pouvez nous contacter en remplissant le formulaire ci dessous
                :</h3>
        </div>

        <form id="contactForm" data-sb-form-api-token="API_TOKEN">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" id="name" type="text" placeholder="Nom *"
                               data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" id="email" type="email" placeholder="Email *"
                               data-sb-validations="required,email"/>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" id="phone" type="tel" placeholder="N° Téléphone *"
                               data-sb-validations="required"/>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" id="message" placeholder="Votre Message *"
                                  data-sb-validations="required"></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                </div>
            </div>

            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br/>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>

            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>
            <!-- Submit Button-->
            <div class="text-center">
                <button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Envoyer
                    le message
                </button>
            </div>
        </form>
    </div>
</section>

<?php $objSmarty->display("../vendors/tpl/footer.tpl"); ?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="../js/scripts.js"></script>
</body>

</html>