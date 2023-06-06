<?php

namespace PHPMailer\tablas;

class usuarios{

    private $dni;
    private $nombre;
    private $apellidos;
    private $fechaNacimiento;
    private $localidad;
    private $carnetPosesion;
    private $nombreUsuario;
    private $passwd;
    private $rol;

    /**
     * @param $dni
     * @param $nombre
     * @param $apellidos
     * @param $fechaNacimiento
     * @param $localidad
     * @param $carnetPosesion
     * @param $nombreUsuario
     * @param $passwd
     * @param $rol
     */
    public function __construct($registro)
    {
        $this->dni = $registro['DNI'];
        $this->nombre = $registro['Nombre'];
        $this->apellidos = $registro['Apellidos'];
        $this->fechaNacimiento = $registro['FechaNacimiento'];
        $this->localidad =$registro['Localidad'];
        $this->carnetPosesion = $registro['carnetPosesion'];
        $this->nombreUsuario = $registro['nombreUsuario'];
        $this->passwd = $registro['passwd'];
        $this->rol = $registro['rol'];
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @param mixed $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
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
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param mixed $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    /**
     * @return mixed
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * @param mixed $localidad
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;
    }

    /**
     * @return mixed
     */
    public function getCarnetPosesion()
    {
        return $this->carnetPosesion;
    }

    /**
     * @param mixed $carnetPosesion
     */
    public function setCarnetPosesion($carnetPosesion)
    {
        $this->carnetPosesion = $carnetPosesion;
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
        $this->passwd = $passwd;
    }

    /**
     * @return mixed
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * @param mixed $rol
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    }




}