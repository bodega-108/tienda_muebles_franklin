<?php 

class Database{
    
    public static function connect(){
        // Variables de conexion
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $basededatos = 'tienda_master';
        
        
        $db = new mysqli($host, $username, $password, $tienda_master);
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}