<?php

class Usuario {
    private $nombreUsuario;
	private $password;
    private $rol;

    function __Construct ($registro){
        $this->nombreUsuario = $registro['nombreUsuario'];
        $this->password = $registro['passwd'];
        $this->rol = $registro['rol'];
    }

    /**
     * @return mixed
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * @param mixed $nombreUsuario
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;
    }

    /**
     * @return mixed
     */
    public function getPasswd()
    {
        return $this->passwd;
    }

    /**
     * @param mixed $passwd
     */
    public function setPasswd($passwd)
    {
        $this->password = $passwd;
    }

    /**
     * @return mixed
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * @param mixed $passwd
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    }

}

?>