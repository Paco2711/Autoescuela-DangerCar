<?php

namespace PHPMailer\tablas;

class Pregunta{

    private $codigoPregunta;
    private $tituloPregunta;

    public function __construct($registro)
    {
        $this->codigoPregunta = $registro['CodigoPregunta'];
        $this->tituloPregunta= $registro['TituloPregunta'];
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
    public function getTituloPregunta()
    {
        return $this->tituloPregunta;
    }

    /**
     * @param mixed $tituloPregunta
     */
    public function setTituloPregunta($tituloPregunta)
    {
        $this->tituloPregunta = $tituloPregunta;
    }


}