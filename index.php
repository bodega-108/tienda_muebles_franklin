<?php 
require_once 'autoload.php';
require 'config/db.php';
require 'config/parameters.php';
require 'views/layout/header.php';
// Conexion base de datos

?>

<?php 
    if(isset($_GET['controller'])){
        $nombre_Controlador = $_GET['controller'].'Controller';
    }else{
        $error = new ErrorController();
        $error->index();
        exit();
    }
  

    if(isset($nombre_Controlador) && class_exists($nombre_Controlador)){
      

        $controlador = new $nombre_Controlador();


        if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
            $action = $_GET['action'];
          
           $controlador->$action();
        }else{
            $error = new ErrorController();
            $error->index();
        }
    }else{
        $error = new ErrorController();
        $error->index();
    }   

   

?>
<?php require 'views/layout/footer.php';?>