<?php
include("../vendors/smarty/libs/Smarty.class.php");
$objSmarty = new Smarty();
?>

<?php $objSmarty->display("../vendors/tpl/head.tpl"); ?>


<body id="page-top">
<!-- Navigation-->
<?php $objSmarty->display("../vendors/tpl/bandeau_haut.tpl"); ?>
<br><br><br><br><br>

<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img">
                    <img src="../assets/img/team/1.jpg" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"/>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="profile-head">
                    <h5>
                        <?php foreach ($users as $user): ?>
                            <?= $user->getFirst_name() ?>
                            <?= $user->getLast_name() ?>
                        <?php endforeach; ?>
                    </h5>
                   
                    
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="" role="tab"
                               aria-controls="home" aria-selected="true">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="profile-work">
                    <p style="text-decoration: underline;">SKILLS</p>
                    <a href="">CCNA 1</a><br/>
                    <a href="">C++</a><br/>
                    <a href="">PHP</a><br/>
                    <a href="">HTML/CSS</a><br/>
                    <a href="">SOFTSKILLS</a><br/>
                </div>
            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Username</label>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <?php foreach ($users as $user): ?>
                                        <?= $user->getUsername() ?>
                                    <?php endforeach; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Prénom et nom</label>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <?php foreach($users as $user): ?>
                                        <?= $user->getFirst_name() ?>
                                        <?= $user->getLast_name() ?>
                                    <?php endforeach; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <?php foreach($users as $user): ?>
                                        <?= $user->getMail() ?>
                                    <?php endforeach; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Etablissement / Société</label>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <?php foreach($usersLocation as $usersLocations): ?>
                                        <?= $usersLocations->getName_location() ?>
                                    <?php endforeach; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Localisation </label>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <?php foreach($usersLocation as $usersLocations): ?>
                                        <?= $usersLocations->getCity_location() ?>
                                    <?php endforeach; ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Code postal</label>
                            </div>
                            <div class="col-md-6">
                                <p>
                                    <?php foreach($usersLocation as $usersLocations): ?>
                                        <?= $usersLocations->getPostal_code_location() ?>
                                    <?php endforeach; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Experience</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Hourly Rate</label>
                            </div>
                            <div class="col-md-6">
                                <p>10$/hr</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Total Projects</label>
                            </div>
                            <div class="col-md-6">
                                <p>230</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>English Level</label>
                            </div>
                            <div class="col-md-6">
                                <p>Expert</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Availability</label>
                            </div>
                            <div class="col-md-6">
                                <p>6 months</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Your Bio</label><br/>
                                <p>Your detail description</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php $objSmarty->display("../vendors/tpl/footer.tpl"); ?>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="../js/scripts.js"></script>

<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>


</html>