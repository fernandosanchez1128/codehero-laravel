<?php
class EncuestaController extends BaseController {

    /**
     * Muestra la lista con todos los usuarios
     */
    public function mostrarUsuarios()
    {
        $nameIE = Input::get('nameIE');
        $num = DB::table('encuesta')->where('a1_nombre_ie','=',$nameIE)->count();
        $sede = Input::get('nameSede');
        $encuesta = new Encuesta;
        $id_encuesta = $sede."-".($num +1);
        $encuesta->id_encuesta = $id_encuesta;
        $encuesta->fecha = Input::get ('fecha');
        //echo (Input::get ('num_aplicacion'));
        $encuesta->no_aplicacion = Input::get ('num_aplicacion');
        $encuesta->nombre_profesional= Input::get ('name_profesional');
		$encuesta->a1_nombre_ie = Input::get('nameIE');
        $encuesta->a2_nombre_sede = Input::get('nameSede');
        $encuesta->a3_nombre_docente = Input::get('nameDocente');
        $encuesta->a4_edad =Input::get('edad');
        $encuesta->a6_municipio = Input::get('municipio');
        $encuesta->a7_estado_civil = Input::get('estado');

        $encuesta->b1_a_nivel= Input::get('escolaridad');
        $titulos = Input::get('nombreTitulo');
        $encuesta->b1_b_nom_titulo= $titulos[0];
        $encuesta->b1_c_nivel_post= Input::get('nivelPostgrado');
        $encuesta->b2_exp_docencia= Input::get('experiencia');
        $encuesta->b3_exp_sede= Input::get('experienciaSede');
        $encuesta->b4_jornada = Input::get('jornada');

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
                        $encuesta->b5_a_sociales = 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_a_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_a_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                    break;
                    case 2:
                        $encuesta->b5_b_etica= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_b_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_b_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 3:
                        $encuesta->b5_c_ciencias = 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_c_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_c_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 4:
                        $encuesta->b5_d_matematicas = 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_d_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_d_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 5:
                        $encuesta->b5_e_tecnologia = 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_e_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_e_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 6:
                        $encuesta->b5_f_fisica = 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_f_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_f_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 7:
                        $encuesta->b5_g_quimica= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_g_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_g_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 8:
                        $encuesta->b5_h_lenguaje= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_h_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_h_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 9:
                        $encuesta->b5_i_seg_lengua= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_i_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_i_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 10:
                        $encuesta->b5_j_deportes= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_j_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_j_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 11 :
                        $encuesta->b5_k_artes= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_k_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_k_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;

                    case 12:
                        $encuesta->b5_l_religion= 1;
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_l_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_l_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;

                    case 13:
                        $encuesta->b5_o_otra_asig1 = Input::get ('otra_asig13');
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_o_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_o_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                    break;

                    case 14:
                        $encuesta->b5_p_otra_asig2 = Input::get ('otra_asig14');
                        for($i=1;$i<=$num_text;$i++)
                        {
                            $name_area = "b5_p_grado".($i-1);
                            $grado_def = $grado.($i-1);
                            $encuesta->$name_area = Input::get($grado_def);
                            $name_nivel = "b5_p_nivel".$i;
                            $nivel_input = $nivel.$i;
                            if ($i!=12)
                            {
                                $encuesta->$name_nivel = Input::get ($nivel_input);
                            }
                        }
                        break;
                    case 15:
                        $encuesta->b5_m_prim_infancia = 1;
                        $encuesta->b5_m_observaciones = Input::get ('observacion');
                        break;
                    default:
                        $encuesta->b5_n_escuela_nueva= 1;
                        $encuesta->b5_n_primaria= Input::get ('nueva_primaria');
                        $encuesta->b5_n_primaria_grados= Input::get ('grados_prim');
                        $encuesta->b5_n_bachillerato= Input::get ('nueva_bachillerato');
                        $encuesta->b5_n_bachillerato_grados = Input::get ('grados_bachillerato');


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
                    default : $name = 'acoso';
                }
                $nombre_area = 'c1_'.$area.'_'.$name;
                $name_duracion ='c1_'.$area.'_'.'duracion';
                $tiemp_fini ='c1_'.$area.'_'.'finalizo';

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
                    case "j": $name_es = 'otro1'; $encuesta->c2_j_otro1_nombre = Input::get ('otros1');$num = "10";break;
                    default : $name_es = 'otro2';$encuesta->c2_k_otro2_nombre = Input::get ('otros2');$num = "11";
                }
                //echo("fin_for");
                $nombre_area = 'c2_'.$estrategia.'_'.$name_es;
                $name_frecuencia ='c2_'.$estrategia.'_'.'frecuencia';
                $encuesta->$nombre_area = 1;
                $encuesta->$name_frecuencia = Input::get ('frecuencia'.$num);
                $index++;
                //echo("fin_sentence");
            }
        }
        /** **************** fin tabla de pregunta 15 ***********************  **/





        $encuesta->c3_exposicion = Input::get('exposicion');
        $encuesta->c3_debate = Input::get('debate');
        $encuesta->c3_mesa_redonda = Input::get('mesa');
        $encuesta->c3_foro = Input::get('foro');
        $encuesta->c3_juego= Input::get('juego');
        $encuesta->c3_asamblea= Input::get('asamblea');
        $encuesta->c3_estrategia_ondas = Input::get('estrate_onda');
        $encuesta->c3_proyecto_aula= Input::get('proyec_aula');
        $encuesta->c3_expo_problema = Input::get('expo_problema');
        $encuesta->c3_jornada_seguimiento = Input::get('jornada_seguimiento');
        $encuesta->c3_monitor= Input::get('monitor');
        /** --------------------------------------------------------------------  **/
        /** insercion de las acciones tomadas **/

        $encuesta->c4_separar_pelea = Input::get('separar_pelea');
        $encuesta->c4_dialogo = Input::get('dialogo');
        $encuesta->c4_trab_escrito = Input::get('trab_escrito');
        $encuesta->c4_ayuda = Input::get('ayuda');
        $encuesta->c4_acuerdo = Input::get('acuerdo');
        $encuesta->c4_sanciones = Input::get('sanciones');
        $encuesta->c4_mediadores = Input::get('mediadores');
        $encuesta->c4_anotar_observaciones= Input::get('anotar_observaciones');
        $encuesta->c4_redes_apoyo = Input::get('redes_apoyo');
        $encuesta->c4_reunion = Input::get('reunion');
        $encuesta->c4_citacion= Input::get('citacion');

        $encuesta->c5_aplica = Input::get ('group1');
        $encuesta->c5_aplicacion = Input::get ('aplicacion');

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
