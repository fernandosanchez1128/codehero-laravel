<?php
/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 08/07/2015
 * Time: 9:16
 */

class Titulo extends Eloquent
{
    /**
     * la tabla de la base de datos usada por el modelo
     *
     * @var string
     */
    protected $table = 'titulo';
    /**
     * Campos que voy registrar
     * @var string.
     */
    protected $fillable = ['cedula', 'nivel', 'nombre_titulo'];


}