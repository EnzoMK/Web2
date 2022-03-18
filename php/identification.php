<?php 

session_start();

if (isset($_POST['submit']))
{
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];


    
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=projet_web','root', '');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        echo 'Échec lors de la connexion : ' . $e->getMessage();
    }

    $sql = "SELECT * FROM user WHERE mail='".$email."' AND password='".$mdp."'" ;
    $result = $dbh->prepare($sql);
    $result->execute();

    if($result->rowCount() == 1){
            echo "Connection effectuée";
            $_SESSION['email'] = $email;
        }
    else 
    {
        echo"Connection échoué";
    }
}
?>