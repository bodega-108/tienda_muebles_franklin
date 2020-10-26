<?php

require 'models/usuario.php';

class UsuarioController{

    public function index(){
        echo"controlador usuario, accion index";
    }
    public function registro(){
        require_once 'views/usuario/registro.php';
    }  
    public function saveUsuario(){
        if(isset($_POST)){
            $usuario = new Usuario();

            $usuario->setNombre($_POST['nombre']);
            $usuario->setApellido($_POST['apellido']);
            $usuario->setEmail($_POST['email']);
            $usuario->setPassword($_POST['password']);

          
            $save = $usuario->save();

            if($save){
                require 'views/usuario/registroExitoso.php';
           
            }else{
                echo 'Registro fallido';
            }
        }
    }
}