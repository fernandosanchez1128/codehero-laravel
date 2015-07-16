<?php

/**
 * Created by PhpStorm.
 * User: fernando
 * Date: 15/07/2015
 * Time: 10:07
 */
class Instituciones extends Eloquent
{
    protected $table = 'instituciones';
    public function sedes() {
        return $this->hasMany('Sedes');
    }
}