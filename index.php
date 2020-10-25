<?php 
require_once 'autoload.php';
require 'views/layout/header.php';
?>

<?php 
    if(isset($_GET['controller'])){
        $nombre_Controlador = $_GET['controller'].'Controller';
    }else{
        echo "<div class='bg-dark'> <h1>La pagina que buscas no existe.</h1> </div>";
        exit();
    }
  

    if(isset($nombre_Controlador) && class_exists($nombre_Controlador)){
      

        $controlador = new $nombre_Controlador();


        if(isset($_GET['action']) && method_exists($controlador, $_GET['action'])){
            $action = $_GET['action'];
          
           $controlador->$action();
        }else{
            echo "<div class='bg-dark'> <h1>La pagina que buscas no existe.</h1> </div>";
        }
    }else{
        echo "<div class='bg-dark'> <h1>La pagina que buscas no existe.</h1> </div>";

    }   

   

?>
<?php require 'views/layout/footer.php';?>