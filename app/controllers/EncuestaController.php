<?php
class EncuestaController extends BaseController {

    /**
     * Muestra la lista con todos los usuarios
     */
    public function mostrarUsuarios()
    {

        $encuesta = new Encuesta;

        $encuesta->id_encuesta = Input::get('id_encuesta');
        $encuesta->fecha = Input::get ('fecha');
        //echo (Input::get ('num_aplicacion'));
        $encuesta->no_aplicacion = Input::get ('num_aplicacion');
        $encuesta->nombre_profesional= Input::get ('name_profesional');
		$encuesta->a1_nombre_ie = Input::get('nameIE');
        $encuesta->a2_nombre_sede = Input::get('nameSede');
        $encuesta->a3_nombre_docente = Input::get('nameDocente');
        $encuesta->a4_edad =Input::get('edad');
        $encuesta->a5_sexo =Input::get('sexo');

        $encuesta->a6_municipio = Input::get('municipio');
        $encuesta->a7_estado_civil = Input::get('estado');

        $encuesta->b8_a_nivel= Input::get('escolaridad');
        $titulos = Input::get('nombreTitulo');
        $encuesta->b8_b_nom_titulo= $titulos[0];
        $encuesta->b8_c_nivel_post= Input::get('nivelPostgrado');
        $encuesta->b9_exp_docencia= Input::get('experiencia');
        $encuesta->b10_exp_sede= Input::get('experienciaSede');
        $encuesta->b11_jornada = Input::get('jornada');

        /** ******************** inicio tabla de pregunta 12  *********************** **/

        echo ("guradando la pregunta 12");

        $asignaturas = Input::get('asignaturas');
        if (count ($asignaturas) > 0)
        {
            $index_asig= 0;
            foreach ($asignaturas as $asignatura)
            {
                $grado = "grado".$asignatura."-";
                $nivel = "nivel".$asignatura."-";
                $num_text =12;
                switch ($asignatura)
                {

                    case 1:
                        echo ("preg 1");
                        $encuesta->b12_a_sociales = 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_a_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_a_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                    break;
                    case 2:
                        $encuesta->b12_b_etica= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_b_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_b_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 3:
                        $encuesta->b12_c_ciencias = 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_c_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_c_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 4:
                        $encuesta->b12_d_matematicas = 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_d_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_d_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 5:
                        $encuesta->b12_e_tecnologia = 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_e_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_e_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 6:
                        $encuesta->b12_f_fisica = 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_f_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_f_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 7:
                        $encuesta->b12_g_quimica= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_g_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_g_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 8:
                        $encuesta->b12_h_lenguaje= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_h_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_h_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 9:
                        $encuesta->b12_i_seg_lengua= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_i_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_i_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 10:
                        $encuesta->b12_j_deportes= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_j_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_j_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 11 :
                        $encuesta->b12_k_artes= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_k_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_k_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;

                    case 12:
                        $encuesta->b12_l_religion= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_l_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_l_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;

                    case 13:
                        $encuesta->b12_o_otra_asig1 = Input::get ('otra_asig13');
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_o_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_o_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                    break;

                    case 14:
                        $encuesta->b12_p_otra_asig2 = Input::get ('otra_asig14');
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b12_p_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b12_p_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 15:
                        $encuesta->b12_m_prim_infancia = 1;
                        $encuesta->b12_m_observaciones = Input::get ('observacion');
                        break;
                    default:
                        $encuesta->b12_n_escuela_nueva= 1;
                        $encuesta->b12_n_primaria= Input::get ('nueva_primaria');
                        $encuesta->b12_n_primaria_grados= Input::get ('grados_prim');
                        $encuesta->b12_n_bachillerato= Input::get ('nueva_bachillerato');
                        $encuesta->b12_n_bachillerato_grados = Input::get ('grados_bachillerato');


                }
            }
        }
        /** ******************** fin tabla de pregunta 12  *********************** **/

        /** ******************** inicio tabla de pregunta 13  *********************** **/
        $areas= Input::get('areas');
        $duracion= Input::get('duracion');
        $tiempo_atras= Input::get('tiempo_atras');

        echo("guardando la pregunta 13");
        if (count ($areas) > 0)
        {
            $index = 0;
            foreach ($areas as $area)
            {
                $name = "";
                switch ($area){
                    case "a": $name = 'convivencia';break;
                    case "b": $name = 'derechos';break;
                    case "c": $name = 'sexualidad';break;
                    case "d": $name = 'ambiente';break;
                    case "e": $name = 'prevencion';break;
                    case "f": $name = 'mediacion'; break;
                    case "g": $name = 'acoso'; break;
                    default :
                        $name = 'otro';
                        $encuesta->c13_h_nombre = Input::get ('otro13');
                }
                $nombre_area = 'c13_'.$area.'_'.$name;
                $name_duracion ='c13_'.$area.'_'.'duracion';
                $tiemp_fini ='c13_'.$area.'_'.'finalizo';

                $encuesta->$nombre_area = 1;
                $encuesta->$name_duracion = $duracion[$index];
                $encuesta->$tiemp_fini = $tiempo_atras[$index];
                $index++;
            }
        }

        /** ******************** fin tabla de pregunta 13  *********************** **/

        echo("guardando la pregunta 15");
        /** **************** inicio tabla de pregunta 15 *********************** **/

        $estrategias = Input::get('estrategias');
        echo("1");
        if (count ($estrategias) > 0)
        {
            $index = 0;
            foreach ($estrategias as $estrategia)
            {
                echo("for");
                $name_es = "";
                $num = "";
                switch ($estrategia){
                    case "a": $name_es = 'normas'; $num = "1"; break ;
                    case "b": $name_es = 'fort_valores'; $num = "2"; break;
                    case "c": $name_es = 'cono_vida';$num = "3";break;
                    case "d": $name_es = 'cono_problemas';$num = "4";break;
                    case "e": $name_es = 'autoestima';$num = "5";break;
                    case "f": $name_es = 'trab_equipo'; $num = "6";break;
                    case "g": $name_es = 'pausa_activa'; $num = "7";break;
                    case "h": $name_es = 'juegos'; $num = "8";break;
                    case "i": $name_es = 'asamblea'; $num = "9"; break;
                    case "j": $name_es = 'otro1'; $encuesta->c15_j_otro1_nombre = Input::get ('otros1');$num = "10";break;
                    default : $name_es = 'otro2';$encuesta->c15_k_otro2_nombre = Input::get ('otros2');$num = "11";
                }
                //echo("fin_for");
                $nombre_area = 'c15_'.$estrategia.'_'.$name_es;
                $name_frecuencia ='c15_'.$estrategia.'_'.'frecuencia';
                $encuesta->$nombre_area = 1;
                $encuesta->$name_frecuencia = Input::get ('frecuencia'.$num);
                $index++;
                //echo("fin_sentence");
            }
        }
        /** **************** fin tabla de pregunta 15 ***********************  **/





        $encuesta->c16_exposicion = Input::get('exposicion');
        $encuesta->c16_debate = Input::get('debate');
        $encuesta->c16_mesa_redonda = Input::get('mesa');
        $encuesta->c16_foro = Input::get('foro');
        $encuesta->c16_juego= Input::get('juego');
        $encuesta->c16_asamblea= Input::get('asamblea');
        $encuesta->c16_estrategia_ondas = Input::get('estrate_onda');
        $encuesta->c16_proyecto_aula= Input::get('proyec_aula');
        $encuesta->c16_expo_problema = Input::get('expo_problema');
        $encuesta->c16_jornada_seguimiento = Input::get('jornada_seguimiento');
        $encuesta->c16_monitor= Input::get('monitor');
        /** --------------------------------------------------------------------  **/
        /** insercion de las acciones tomadas **/

        $encuesta->c17_separar_pelea = Input::get('separar_pelea');
        $encuesta->c17_dialogo = Input::get('dialogo');
        $encuesta->c17_trab_escrito = Input::get('trab_escrito');
        $encuesta->c17_ayuda = Input::get('ayuda');
        $encuesta->c17_acuerdo = Input::get('acuerdo');
        $encuesta->c17_sanciones = Input::get('sanciones');
        $encuesta->c17_mediadores = Input::get('mediadores');
        $encuesta->c17_anotar_observaciones= Input::get('anotar_observaciones');
        $encuesta->c17_redes_apoyo = Input::get('redes_apoyo');
        $encuesta->c17_reunion = Input::get('reunion');
        $encuesta->c17_citacion= Input::get('citacion');

        $encuesta->c14_a_aplica = Input::get ('group1');
        $encuesta->c14_b_aplicacion = Input::get ('aplicacion');

        $encuesta->save();
        //return Redirect::to('encuesta');
        echo "<script type='text/javascript'>alert('La encuesta ha sido almacenada con exito');</script>";
        return Redirect::to('encuesta');
//        /** --------------------------------------------------------------------- */

    }

    /**
     * Muestra formulario para crear Usuario
     */
    public function nuevoUsuario()
    {
        $instituciones = DB::table('instituciones')->orderBy('name')->get();
        $profesionales = DB::table('profesionales')->orderBy('nombre')->get();
        return View::make('encuesta.encuesta',array ('instituciones' => $instituciones,'profesionales' => $profesionales));
    }

    public function listar ()
    {
        $encuestas = Encuesta::all();
        return View::make('encuesta.listar')->with('encuestas', $encuestas);

    }
    /**
     * Crear el usuario nuevo
     */
    public function crearUsuario()
    {
        Usuario::create(Input::all());
    // el método create nos permite crear un nuevo usuario en la base de datos, este método es proporcionado por Laravel
    // create recibe como parámetro un arreglo con datos de un modelo y los inserta automáticamente en la base de datos
    // en este caso el arreglo es la información que viene desde un formulario y la obtenemos con el metido Input::all()

        return Redirect::to('usuarios');
    // el método redirect nos devuelve a la ruta de mostrar la lista de los usuarios

    }

    /**
     * Ver usuario con id
     */
    public function verUsuario($id)
    {
    // en este método podemos observar como se recibe un parámetro llamado id
    // este es el id del usuario que se desea buscar y se debe declarar en la ruta como un parámetro

        $usuario = Usuario::find($id);
        // para buscar al usuario utilizamos el metido find que nos proporciona Laravel
        // este método devuelve un objete con toda la información que contiene un usuario

    return View::make('usuarios.ver', array('usuario' => $usuario));
    }

}
?>
