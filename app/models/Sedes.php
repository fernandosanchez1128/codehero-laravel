<?php

/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 15/07/2015
 * Time: 10:08
 */
class Sedes extends Eloquent
{
    protected $table = 'sedes';
    public function institucion() {
        return $this->belongsTo('Instituciones');
    }

}