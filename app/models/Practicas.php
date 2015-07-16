<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 08/07/2015
 * Time: 9:24
 */

class Practicas extends Eloquent
{
    /**
     * la tabla de la base de datos usada por el modelo
     *
     * @var string
     */
    protected $table = 'practicas';
    /**
     * Campos que voy registrar
     * @var string.
     */
    protected $fillable = ['cedula', 'nombre', 'tiempoDuracion',
        'tiempoAtras'];

}