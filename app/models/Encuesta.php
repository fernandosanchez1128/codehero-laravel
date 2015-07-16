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
    /**
     * Campos que voy registrar
     * @var string.
     */
    protected $fillable = ['a1_nombre_ie', 'a2_nombre_sede', 'a3_nombre_docente',
        'a4_edad','a6_municipio', 'a7_estado_civil','b1_a_nivel','b1_b_nom_titulo',
    'b2_exp_docencia','b3_exp_sede','b4_a_manana','b4_b_tarde',
        'c2_a_normas','c2_a_frecuencia',
        'c2_b_fort_valores','c2_b_frecuencia',
        'c2_c_cono_vida','c2_c_frecuencia',
        'c2_d_cono_problemas','c2_d_frecuencia',
        'c2_e_autoestima','c2_e_frecuencia',
        'c2_f_trab_equipo','c2_f_frecuencia',
        'c2_g_pausa_activa','c2_g_frecuencia',
        'c2_h_juegos','c2_h_frecuencia',
        'c2_i_asamblea','c2_i_frecuencia',
        'c2_j_otro1','c2_j_otro1_nombre','c2_j_frecuencia',
        'c2_k_otro2','c2_k_otro2_nombre','c2_k_frecuencia',
    ];


}

?>