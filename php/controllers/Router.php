<?php 
class Router{
    private $_ctrl;
    private $_view;

    public function routeReq()
    {
        try
        {
            //CHARGEMENT AUTOMATIQUE DES CLASSES
            spl_autoload_register(function($class){
                require_once('models/'.$class.'.php');
            });

            $url = '';


            //LE CONTROLLEUR EST INCLUS SELON L'ACTION DE L'UTILISATEUR
            if(isset($_GET['url'])){
                $url = explode('/', filter_var($_GET['url'],
                FILTER_SANITIZE_URL));

                //ucfirst(Premire lettre en majuscule)et (strtolower) le reste en minuscule
                //variable controller récupére la premire lettre en majucule et le reste en minuscule
                $controller = ucfirst(strtolower($url[0]));

                //variable controllerClass recuper le nom entier qui commence par Controller
                $controllerClass = "Controller".$controller;

                //variable permettant daller dans le fichier controller
                $controllerFile = "controllers/".$controllerClass.".php";

                //Si le fichier existe :
                if(file_exists($controllerFile))
                {
                    //récupere le fichier
                    require_once($controllerFile);

                    //pour plus de sécuriter
                    $this->_ctrl = new $controllerClass($url);
                }
                else
                //si le fichier existe pas on a une page introuvable
                    throw new Exception('Page introuvable');
            }
            else {
                    //Si il n'y pas de get URL alors on ouvre le dossier par défault
                    require_once('controllers/ControllerIdentification.php');
                    //plus de sécuriter
                    $this->_ctrl = new ControllerIdentification($url);
            }
            
        }


        //GESTION DES ERREURS
        catch(Exception $e)
        {
            $errorMsg = $e->getMessage();
            //renvoie à une page d'érreur
            require_once('views/viewError.php');
        }
    }

}


?>