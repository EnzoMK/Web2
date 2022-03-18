

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="image/logo.png" type="image/x-icon">
    <title>SuperStage</title>
    <link rel="stylesheet" href="authentification.css"/>
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

    <form method="POST" >
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

  
<style> 



@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
    overflow-y: hidden;
}

body {
    background-image: url("images/authentification.png");
    background-repeat: no-repeat;
	background-size: cover;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}



.h1-title {
	font-weight: bold;
	margin: 0;
}


.text {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}



.forget-pass {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

.button {
	border-radius: 20px;
	border: 1px solid #4059e7;
	background-color: #4059e7;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

.button:active {
	transform: scale(0.95);
}

.button:focus {
	outline: none;
}


.input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.page-container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 384.5px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;

    background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	height: 100%;
	text-align: center;
}

.sign-in-container {
	left: 18%;
	width: 65%;
	z-index: 2;
}



</style>

</body>

</html>