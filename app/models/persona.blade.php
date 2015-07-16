<?php


    class persona extends Eloquent{
    
        protected $table = 'usuario';
        protected $fillable = ['nombre', 'apellido', 'correo'];
       
    }

?>