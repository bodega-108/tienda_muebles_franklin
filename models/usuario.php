<?php



class Usuario{
    private $id;
    private $nombre;
    private $apellido;
    private $email;
    private $password;
    private $role;
    private $image;
    private $db;

    public function __construct(){
        $this->db =  Database::connect();
    }

    public function setNombre($nombre){
        $this->nombre = $nombre; 
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setApellido($apellido){
        $this->apellido = $apellido; 
    }

    public function getApellido(){
        return $this->apellido;
    }
    public function setEmail($email){
        $this->email = $email; 
    }

    public function getEmail(){
        return $this->email;
    }
    public function setPassword($password){
        $this->password = password_hash($this->db->real_escape_string($password), PASSWORD_BCRYPT, ['cost' => 4]); 
    }

    public function getPassword(){
        return $this->password;
    }
    public function setRole($role){
        $this->role = $role; 
    }

    public function getRole(){
        return $this->role;
    }
    public function setImage($image){
        $this->image = $image; 
    }

    public function getImage(){
        return $this->image;
    }
    public function save(){
        // consulta sql
        $sql = "INSERT INTO usuarios VALUES (NULL,'{$this->getNombre()}','{$this->getApellido()}','{$this->getEmail()}','{$this->getPassword()}','user','null' );";
        
        $save = $this->db->query($sql);

        $resultado = false;
        if($save){
            $resultado = true;
        }
        return $resultado;
}
}