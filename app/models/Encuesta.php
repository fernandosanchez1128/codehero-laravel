<?php

/**
 * Clase Docente
 * Representa la tabla Docente de la BD
 * donde se guardan los datos ingresados en la encuesta que no son
 * multivaluados
 */

class Encuesta extends Eloquent{

    /**
     * la tabla de la base de datos usada por el modelo
     *
     * @var string
     */
    protected $table = 'encuesta';

}

?>