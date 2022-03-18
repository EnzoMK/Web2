<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="image/logo.png" type="image/x-icon">
    <title>SuperStage</title>
    <link rel="stylesheet" href="authentification.css">
    <script src="https://kit.fontawesome.com/3eb9bd2c09.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <?php
        if(isset($_SESSION['email'])){
            echo"Vous êtes connecté en tant que : ".$_SESSION['email'];


            
        }
        else
        {
            ?>
                <section class="page-container">

<div class="form-container sign-in-container">

    <form method="POST" action="identification.php">
        <h1 class="h1-title">Identification</h1>
        <br>
        <input class="input"  type="email" name="email" placeholder="Email" />
        <input class="input" type="password"  name="mdp" placeholder="Password" />
        <br>
        <br>
        <button class="button" name="submit">Connexion</button>
        <br>
        <br>
        <a class="forget-pass" href="#">Mentions légales | Aide</a>
    </form>
</div>



</section>
            <?php
        }
    ?>

  
</body>

</html>