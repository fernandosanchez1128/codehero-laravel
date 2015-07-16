<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 08/07/2015
 * Time: 9:19
 */

class Estrategias extends Eloquent{
    /**
     * la tabla de la base de datos usada por el modelo
     *
     * @var string
     */
    protected $table = 'estrategias';
    /**
     * Campos que voy registrar
     * @var string.
     */
    protected $fillable = ['cedula', 'nombre', 'frecuencia'];

}