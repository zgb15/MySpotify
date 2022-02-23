<?php


class persona
{
    private $id;
    private $nombre;
    private $email;
    private $password;

    /**
     * usuario constructor.
     * @param $nombre
     * @param $email
     * @param $password
     */

    // le ponemos el ="" dándole el valor de una cadena vacía, si inicializo el valor sin un parámetro pone por defecto una cadena vacía
    public function __construct($nombre="", $email="", $password="")
    {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
    }

    public function llenarOBjeto($id="",$nombre="",$email="",$password=""){
        $this->id = $id;
        $this-> nombre = $nombre;
        $this->email=$email;
        $this->password=$password;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getemail()
    {
        return $this->email;
    }

    /**
     * @param mixed $password
     */
    public function setpassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getpassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $email
     */
    public function setemail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

 /*   // validar si el email del usuario ya ha sido registrado o no
    public function validarAlta(){
        $resultado = false;
        $bd = new bd();
        $sql = "SELECT email FROM usuarios WHERE email='".$this->getemail()."')";
        $bd->query($sql);

        if($bd == true){
            $resultado = true;

        }
        return $resultado;
    } */

    public function insertarUsuario()
    {
        $bd = new bd();
        $sql = "INSERT INTO usuarios(nombre,email,password) VALUES ('" . $this->getNombre() . "', '" . $this->getemail() . "', '" . $this->getpassword() . "')";
        $bd->query($sql);
    }

    public function crearTabla(){
        $bd = new bd();
        $sql = " CREATE TABLE '".$this->getemail()."' (`id` INT NOT NULL AUTO_INCREMENT, `nombreCancion` VARCHAR(300) NULL,PRIMARY KEY (`id`)) ";
        $bd->query($sql);
    }

    public function imprimeFila(){

        $html = "<tr><td>".$this->id."</td>";
        $html .= "<td>".$this->nombre."</td>";
        $html .= "<td>".$this->email."</td></tr>";

        return $html;
    }

}