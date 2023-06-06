<?php

namespace PHPMailer\tablas;

class Respuesta{

    private $codigoRespuesta;
    private $nombreRespuesta;
    private $codigoPregunta;
    private $esCorrecta;

    /**
     * @param $codigoRespuesta
     * @param $nombreRespuesta
     * @param $codigoPregunta
     * @param $esCorrecta
     */
    public function __construct($registro)
    {
        $this->codigoRespuesta = $registro['codigoRespuesta'];
        $this->nombreRespuesta = $registro['NombreRespuesta'];
        $this->codigoPregunta = $registro['CodigoPregunta'];
        $this->esCorrecta = $registro['esCorrecta'];
    }

    /**
     * @return mixed
     */
    public function getCodigoRespuesta()
    {
        return $this->codigoRespuesta;
    }

    /**
     * @param mixed $codigoRespuesta
     */
    public function setCodigoRespuesta($codigoRespuesta)
    {
        $this->codigoRespuesta = $codigoRespuesta;
    }

    /**
     * @return mixed
     */
    public function getNombreRespuesta()
    {
        return $this->nombreRespuesta;
    }

    /**
     * @param mixed $nombreRespuesta
     */
    public function setNombreRespuesta($nombreRespuesta)
    {
        $this->nombreRespuesta = $nombreRespuesta;
    }

    /**
     * @return mixed
     */
    public function getCodigoPregunta()
    {
        return $this->codigoPregunta;
    }

    /**
     * @param mixed $codigoPregunta
     */
    public function setCodigoPregunta($codigoPregunta)
    {
        $this->codigoPregunta = $codigoPregunta;
    }

    /**
     * @return mixed
     */
    public function getEsCorrecta()
    {
        return $this->esCorrecta;
    }

    /**
     * @param mixed $esCorrecta
     */
    public function setEsCorrecta($esCorrecta)
    {
        $this->esCorrecta = $esCorrecta;
    }




}