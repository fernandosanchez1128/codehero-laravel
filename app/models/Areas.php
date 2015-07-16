<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 08/07/2015
 * Time: 9:22
 */

class Areas
{
    /**
     * la tabla de la base de datos usada por el modelo
     *
     * @var string
     */
    protected $table = 'areas';
    /**
     * Campos que voy registrar
     * @var string.
     */
    protected $fillable = ['cedula', 'nombre', 'grado'];

}