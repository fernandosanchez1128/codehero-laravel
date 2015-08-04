<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">


<title>Encuesta para docentes</title>
<link rel="stylesheet" type="text/css" media="screen" href="{{url();}}/assets/css/estilos.css">
<script src="{{url();}}/assets/js/jquery-1.4.2.min.js" type="text/javascript"></script><style type="text/css"></style>
<script type="text/javascript" src="{{url();}}/assets/js/formToWizard.js"></script>
<script src="{{url();}}/assets/js/jquery.form.js" type="text/javascript"></script>
<script src="{{url();}}/assets/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript" src="{{url();}}/assets/js/formToWizard.js"></script>

<!-- activateText (obj,num,name,caso): script para activar los campos cuando su
    respectivo checkbutton ha sido presionado -->
    <script>
        function grados_activate (obj,num)
        {
            if (num==1) {
                if (obj.checked==true){
                    elemento = document.getElementById("grados_prim");
                    elemento.disabled = false;
                    elemento.placeholder = "grados que enseña"
                }
                else{
                    elemento = document.getElementById("grados_prim");
                    elemento.disabled = true;
                    elemento.placeholder = ""
                    elemento.value = ""

                }
            }
            else {
                if (obj.checked==true){
                    elemento = document.getElementById("grados_bachillerato");
                    elemento.disabled = false;
                    elemento.placeholder = "grados que enseña"
                }
                else{
                    elemento = document.getElementById("grados_bachillerato");
                    elemento.disabled = true;
                    elemento.placeholder = ""
                    elemento.value = ""

                }
            }

        }

    </script>
    <script>
        function activate (obj,num)
        {
            if (num== 15){
                if (obj.checked == true) {
                    elemento = document.getElementById("observacion");
                    elemento.disabled = false;
                    elemento.placeholder = "observaciones";
                }
                else{
                    elemento = document.getElementById("observacion");
                    elemento.disabled = true;
                    elemento.placeholder = "";
                    elemento.value = "";
                }
            }
            else{
                if (obj.checked == true) {
                    elemento1 = document.getElementById("nueva_primaria");
                    elemento2 = document.getElementById("nueva_bachillerato");
                    elemento1.disabled = false;
                    elemento2.disabled = false;

                }
                else{
                    elemento1 = document.getElementById("nueva_primaria");
                    elemento2 = document.getElementById("nueva_bachillerato");
                    elemento1.disabled = true;
                    elemento1.checked = false;
                    elemento2.disabled = true;
                    elemento2.checked = false;
                    elemento3 = document.getElementById("grados_prim");
                    elemento4 = document.getElementById("grados_bachillerato");
                    elemento3.disabled = true;
                    elemento4.disabled = true;
                    elemento3.value = "";
                    elemento4.value = "";
                    elemento3.placeholder = "";
                    elemento4.placeholder = "";
                }

            }
        }
    </script>
    <script>
        $(document).ready(function(){
            $('#cnameIE').change(function(){
                $.get("{{ url('dropdown')}}",
                        { option: $(this).val() },
                        function(data) {
                            $('#cnameSede').empty();
                            $.each(data, function(key, element) {
                                $('#cnameSede').append("<option value='" + key + "'>" + element + "</option>");
                            });
                        });
            });
        });
    </script>
    <script>
        function activateNivel (obj,fila,columna,name)
        {
            if (obj.checked == true)
            {
                if (columna >= 1)
                {
                    elemento = document.getElementById(name + fila + "-" + columna);
                    elemento.disabled = false;
                }
            }
            else
            {
                if (columna >= 1) {
                    elemento = document.getElementById(name + fila + "-" + columna);
                    elemento.disabled = true;
                    elemento.placeholder = "";
                    elemento.value = "";
                }
            }

        }
    </script>
    <script>
        function mostrar_preg (num)
        {
            if (num == 1)
            {
                elemento = document.getElementById("opcional");
                elemento.style.display = 'block';
            }
            else
            {
                elemento = document.getElementById("opcional");
                elemento.style.display = 'none';
            }
        }
    </script>
    <script>
        /** valida el estado de los checkbox de escolaridad
         para habilitar o deshabilitar su respectivo text**/
        function activateText(obj,num,name,caso){

            switch (caso) {
                //escolaridad
                case 1:

                    for  (i = 1;i<=5; i++)
                    {
                        var element = document.getElementById(name + i);
                        if (num == i)
                        {
                            element.disabled = false;
                            element.placeholder = "nombre del titulo"
                            if (i == 4)
                            {
                                var nivel = document.getElementById("nivel_postgrado");
                                nivel.disabled = false;
                                nivel.placeholder = "nivel de postgrado";
                            }
                        }
                        else
                        {
                            element.disabled = true;
                            element.value = ""
                            element.placeholder = ""
                            if (i == 4)
                            {
                                var nivel = document.getElementById("nivel_postgrado");
                                nivel.disabled = true;
                                nivel.placeholder = "";
                                nivel.value = "";
                            }
                        }
                    }

                    break;
                case 2:
                    //areas
                     if (obj.checked == true) {
                             if (num >=13)
                             {
                                 var element = document.getElementById("otra_asig"+ num);
                                 element.disabled = false;
                                 element.placeholder = "nombre de la asignatura";
                             }
                                 num_text = 12;
                                 for (i = 0; i < num_text; i++) {
                                     var element = document.getElementById("grado" + num + "-" + i);
                                     element.disabled = false;
                                 }
                             }
                    else
                    {
                        if (num >=13)
                        {
                            var element = document.getElementById("otra_asig"+ num);
                            element.disabled = true;
                            element.placeholder = "otro";
                        }
                        num_text = 12;
                        for (i = 0; i < num_text; i++) {
                            var element = document.getElementById("grado" + num + "-" + i);
                            element.disabled = true;
                            element.checked = false;
                            if (i!=11)
                            {
                                nivel =document.getElementById("nivel" + num + "-" + (i+1));
                                nivel.value = "";
                                nivel.disabled = true;
                            }
                        }
                    }

                    break;
                //procesos de formacion
                case 3:
                    var element1 = document.getElementById(name + num);
                    var element2 = document.getElementById("tiem_fini" + num);
                    if (obj.checked == true) {
                        element1.disabled = false;
                        element2.disabled = false;
                        if (num == 8){
                            var element = document.getElementById("otro13");
                            element.disabled = false;
                            element.placeholder = "digite el nombre del proceso de formación";
                        }
                    }
                    else
                    {
                        element1.disabled = true;
                        element1.value = "";
                        element1.placeholder = "";
                        element2.disabled = true;
                        element2.value = "";
                        element2.placeholder = "";
                        if (num == 8){
                            var element = document.getElementById("otro13");
                            element.disabled = true;
                            element.placeholder = "otro";
                            element.value = "";
                        }
                    }

                    break;
                //practicas pedagogicas
                case 4:
                    var element1 = document.getElementById(name + num + "A");
                    var element2 = document.getElementById(name + num + "B");
                    var element3 = document.getElementById(name + num + "C");
                    if (obj.checked == true) {
                        element1.disabled = false;
                        element1.checked = true;
                        element2.disabled = false;
                        element3.disabled = false;
                        if (num == 10 || num == 11)
                        {
                            var element4 = document.getElementById("estra_txt" + num);
                            element4.disabled = false;
                            element4.placeholder = "Digite el nombre de la estrategia";
                        }
                    }
                    else
                    {
                        element1.disabled = true;
                        element1.checked = false;
                        element2.disabled = true;
                        element2.checked = false;
                        element3.disabled = true;
                        element3.checked = false;
                        if (num == 10 || num == 11)
                        {
                            var element4 = document.getElementById("estra_txt" + num);
                            element4.disabled = true;
                            element4.placeholder = "";
                            element4.value = "";
                        }
                    }
                 break;

                default:
                    alert ("hola");

            }
        }
    </script>
    <!-- -------------------------------------------------------- -->

    <!-- formToWizard: script para que el formulario se vea por pasos -->
        <script type="text/javascript">
            $(document).ready(function(){
                $("#frmContact").formToWizard({ submitButton: 'SaveAccount' })
            });
        </script>
    <!-- ------------------------------------------------------------- -->

    <!-- validator: script que usa validator de jquery para validar el formulario -->
        <script type="text/javascript">

        $(document).ready(function(){
                $("#frmContact").validate({
                    event: "blur",rules:
                    {
                        'fecha' : {required:true, date:true},
                        'id_encuesta':"required",
                        'name_profesional': "required",
                        'nameIE': {required:true,min:1},
                        'nameSede': "required",
                        'nameDocente': "required",
                        'edad': {required : true , min:-2, max:80},
                        'municipio' : "required",
                        'experiencia' : {required:true, min:-2,max:60},
                        'experienciaSede' : {required:true, min:-2, max:60},
                        'nombreTitulo[]':"required",
                        'duracion[]' : "required",
                        'tiempo_atras[]' : "required",
                        'jornada[]': {required: true, minlength: 1}
                    },
                    messages:
                    {
                        'fecha': "por favor seleccione una fecha",
                        'id_encuesta': "por favor digite el identificador de la encuesta",
                        'name_profesional' :"por favor digite el nombre del profesional",
                        'nameIE': "Por favor seleccione una institucion",
                        'nameSede': "Por favor, indica el nombre de la sede",
                        'nameDocente': "Por favor digita tu nombre",
                        'edad' : {
                            required: "Por favor digite su edad (numero)",
                            min: "debe ser mayor de 14 años",
                            max: "la cantidad maxima de años permitidos es 80"
                        },
                        'municipio' : "Por favor digite el municipio donde vive ej: Cali",
                        'experiencia' :
                        {
                            required: "Por digite los años de experiencia como profesor en la sede (numero)",
                            min:"digite el numero con . ej: 1.2 (valor minimo -2)",
                            max:"los años deben ser menor o igual a 60"
                        },
                        'experienciaSede' : {
                            required: "Por digite los años de experiencia como profesor en la sede (numero)",
                            min:"los años deben ser mayor a igual a -2 (-2 no responde)",
                            max:"los años deben ser menor o igual a 60"
                        },
                        'nombreTitulo[]':"",
                        'duracion[]' : "",
                        'tiempo_atras[]' : "",
                        'jornada[]': "debe seleccionar al menos una de las dos jornadas"
                    }
                });
        });
    </script>
    <!-- ------------------------------------------------------------------------ -->

    <!-- validar (step): script que valida el formulario por pasos, el no pasar la
        validacion muestra el mensaje de eero y no permite que
        pase al siguiente formulario -->
    <script>
    function validar(step)
    {
        /** validacion paso 1 **/
        var validator = $( "#frmContact" ).validate();
        if (step == 1)
        {

            return validator.element("#cname_profesional") && validator.element("#cfecha") && validator.element ("#id_encuesta") && validator.element( "#cnameIE" ) && validator.element( "#cnameSede" ) && validator.element( "#cnameDocente" )
            && validator.element( "#cedad" ) && validator.element( "#cmunicipio" );
        }
        /** -------------------------------------------------------------------------------------------------------------------------------- **/
        /** validacion paso 2 **/
        if (step == 2)
        {

            /** **********************************  validacion de titulos o escolaridad ************************* **/
            var flag_titulos = true;
            var error_tit = "";
            for (i=1 ; i<=5;i++)
            {
                name_tit = "tit" + i;
                var nombre_tit = document.getElementById(name_tit);
                if (!nombre_tit.disabled) {
                    flag_titulos = flag_titulos && validator.element("#" + name_tit);
                    if (!flag_titulos) {
                        i = 5;
                        error_tit = document.getElementById(name_tit);
                    }
                    else
                    {
                    if (i == 4) {
                        nivel = document.getElementById("nivel_postgrado");
                        if (nivel.value == "") {
                            i = 5;
                            error_tit = nivel;
                            flag_titulos = false;
                        }
                    }

                    }
                }

            }
            /** ---------------------------------------------------------------------------------------------------- **/
            /** validacion de  las asignaturas enseñadas **/
            var flag = true;
            var element = document.getElementById("otra_asig14");
            if (!element.disabled)
            {
                if(element.value == "")
                {
                    flag = false;
                }
            }
            else{
                var element = document.getElementById("otra_asig13");
                if (!element.disabled)
                {
                    if(element.value == "")
                    {
                        flag = false;
                    }
                }

            }

            /** ---------------------------------------------------------------------------------- **/
            /** ************************************ validacion de jornada *********************** **/

            if (!flag_titulos)
            {
                error_tit.focus ();
                alert ("por favor llene el campo");
            }
            else {
                if (!flag) {
                    element.focus();
                    element.placeholder = "complete";
                    alert("debe digitar el nombre de la asignatura");
                    element.focus();

                }
                else
                {

                }
                validacion = flag && validator.element("#cexperiencia") && validator.element("#cexperienciaSede");
                if (validacion)
                {
                    submit = document.getElementById("submit");
                    submit.disabled = false;
                }
                return validacion;
            }
        }
        /** -------------------------------------------------------------------- **/
        /** validacion paso 3 (paso final)**/
        if (step == 3)
        {
            var flag1 = true;
            var flag2 = true;
            var element = ""
            for (i=1 ; i<=7;i++)
            {
                name = "tiempo" + i;
                name2 = "tiem_fini" + i;
                var duracion = document.getElementById(name);
                if  (!duracion.disabled)
                {
                    flag1 = flag1 && validator.element ("#" + name);
                    flag2 = flag2 && validator.element ("#" + name2);
                    if (!flag2) {
                        element = document.getElementById(name2);
                        i=8;
                    }
                    if (!flag1) {
                        element = document.getElementById(name);
                        i = 8;
                    }
                }
            }
            if (!flag1 || !flag2)
            {
                element.focus();
                alert ("recuerde que debe digitar el tiempo en meses (numero)");
                element.placeholder="complete";
            }

            return flag1 && flag2;
        }
        /** ------------------------------------------------------------------------------------ **/
    }
    </script>
    <!-- ------------------------------------------------------------------------ -->

    <!-- validarForm: script final que vuelve a hacer la validacion de  el formulario -->

    <script>
    function validarForm ()
    {
        return validar (1) && validar(2)&&validar(3);
    }
    </script>
    <!-- ------------------------------------------------------------------------ -->
    </head>
    <body>
    <h1>Encuesta De Caracterizacion De Los Docentes </h1>
    <h3>Las siguientes preguntas van dirigidas a profesores de los grados que participan
        del proceso de formación ofrecido por la línea de Convivencia y Ciudadanía del Macroproyecto</h3    >
        <form id="frmContact" autocomplete="off" action= "encuesta/store" method = "post" onsubmit = "return validarForm()">
        <fieldset>
        <legend>Datos Demográficos</legend>
            <p>
                <label for = "cfecha" > Fecha de realización de la encuesta <br> </label>
                <input id="cfecha" name="fecha" type="date"  >
            </p>

            <p>
                <label for="cnum_aplicacion">Aplicacion No</label>
                <input id="cnum_aplicacion1" name="num_aplicacion" type="radio" value= "1" checked > 1
                <input id="cnum_aplicacion1" name="num_aplicacion" type="radio" value = "2" >2
            </p>
            <p>
                <label for="cnum_aplicacion">Identificador de la encuesta</label>
                <input id="id_encuesta" name = "id_encuesta" type="text" >
            </p>
            <p>
                <label for="cname_profesional">Nombre del profesional</label>
                <select id="cname_profesional" name="name_profesional" >
                    @foreach($profesionales as $profesional)
                        <option value="{{$profesional->id}}">{{$profesional->nombre}}</option>
                    @endforeach
                </select>
            </p>
            <p>
                <label for="cnameIE">1. Nombre de la IE</label>
                <select id="cnameIE" name="nameIE">
                    <option value="0">Seleccione una IE</option>
                    @foreach($instituciones as $institucion)
                        <option value="{{$institucion->id}}">{{$institucion->name}}</option>
                    @endforeach
                </select>
            </p>
            <p>
                <label for="cnameSede">2. Nombre de la Sede</label>
                <select id="cnameSede" name="nameSede">
                    <option>Debes escoger una IE primero</option>
                </select>

            </p>
        <p>
          <label for="cnameDocente">3. Nombre del Docente (required)</label>
          <input id="cnameDocente" type="text" minlength="2" name="nameDocente" >
        </p>
        <p>
          <label for="cedad"> 4. Edad (required)</label>
          <input id="cedad" type="number"  name="edad">
        </p>
            <p>
          <label for="csexo"> 5. Sexo</label>
                <select id="csexo" name="sexo" >
                    <option value = "1"> Femenino</option>
                    <option value = "2"> Masculino </option>
                    </select>
        </p>


        <p>
          <label for="cmunicipio"> 6. Municipio Donde Vive</label>
          <input id="cmunicipio" type="text"  name="municipio" >
        </p>
        <p>
          <label for="estado_civil"> 7. Estado Civil</label>

          <select id="cestado" name="estado" >
          <option value = "1"> Soltero </option>
          <option value = "2"> Casado </option>
          <option value = "3"> Union Libre </option>
          <option value = "4"> Divorciado </option>
          <option value = "5"> Viudo </option>
          <option value = "-2"> Viudo </option>
          </select>
        </p>
        </fieldset>

        <fieldset>
        <legend> Datos Laborales</legend>
        <p>
          8. Escolaridad (marque sólo el grado más alto)<br>
          <table id= "escol" >
        <tr>
            <td> <input type="radio"  name="escolaridad" value="tecnico"  checked onclick = "activateText(this, 1, 'tit',1)">Tecnico </td>
            <td> <input id = "tit1" type="text" style = 'float:right;' name="nombreTitulo[]" placeholder = "nombre del titulo" required> </td>
        </tr>
        <tr>
        <td> <input type="radio" name="escolaridad" value="estudiante" onclick= "activateText(this, 2,'tit',1)">Universidad sin terminar</td>
        <td> <input type="text" id= "tit2" style = 'float:right;' name="nombreTitulo[]"  disabled required> </td>
        </tr>
        <tr>
        <td> <input type="radio" name="escolaridad" value="profesional"  onclick= "activateText(this, 3,'tit',1)">Universidad terminada</td>
        <td> <input type="text" id= "tit3" style = 'float:right;' name="nombreTitulo[]"   disabled required> </td>
        </tr>
        <tr>
            <td> <input type="radio" name="escolaridad" value="postgrado"  onclick= "activateText(this, 4,'tit',1)">Postgrado</td>
            <td> <input type="text" id= "tit4" style = 'float:right;' name="nombreTitulo[]" disabled required> </td>
            <td> <input type="text" id= "nivel_postgrado" style = 'float:right;' name="nivelPostgrado"  disabled required> </td>
        </tr>
                <tr>
                    <td> <input type="radio" name="escolaridad" value="otro"  onclick= "activateText(this, 5,'tit',1)">Otro</td>
                    <td> <input type="text" id= "tit5" style = 'float:right;' name="nombreTitulo[]"  disabled required> </td>
                </tr>
    </table>
        </p>
        <p>
          <label for="cexperiencia">9. ¿Cuantos años lleva laborando como docente?</label>
          <input id="cexperiencia" type="text" name="experiencia" >
        </p>
        <p>
          <label for="cexperienciaSede">10. ¿Cuantos años lleva laborando como docente en la sede?</label>
          <input id="cexperienciaSede" type="text" name="experienciaSede" required>
        </p>
        <p>
          <label for="cjornada">11. ¿Dentro de la sede educativa, en qué jornada o jornadas labora?</label>
          <p> <input id="jornada" type = "radio"  name="jornada" value = "1" checked> mañana </input> </p>
          <p> <input id="jornada" type = "radio"  name="jornada" value = "2"> tarde  </input> </p>
          <p> <input id="jornada" type = "radio"  name="jornada" value = "3"> ambas  </input> </p>
            <label for = "jornada[]" class="error" generated = "true"> </label>
        </p>
        <p>
        <br>
        12. Por Favor seleccione las asignaturas en las que enseña y los grados en los que lo enseña.
            en la casilla de abajo digite los niveles separados por un -.
        <br> <br>
       <table id = 'asignaturas'>
                <tr>
                    <td> Asignatura</td>
                    <td> </td>
                    <td align='center' style = 'width:45px'> transicion</td>
                    <td align='center'> 1°</td> <td align='center' >2°</td>
                    <td align='center'> 3°</td> <td align='center'>4°</td>
                    <td align='center'> 5°</td> <td align='center'>6°</td>
                    <td align='center'> 7°</td> <td align='center'>8°</td>
                    <td align='center'> 9°</td> <td align='center'> 10°</td>
                    <td align='center'>11°</td>
                </tr>
         <?php
                $array = array("ciencias sociales", "Etica, democracia y valores", "ciencias Naturales", "Matemáticas",
                        "Tecnología e informática","fisica","Química","Humanidades y lenguaje",
                        "Segunda lengua: Ingles u otros", "Educacion fisica - Deportes",
                        "Artes: pintura, teatro, música,  manualidades","Religion");
		$filas = 14;
		$columnas = 14;
		for($t=1;$t<=$filas;$t++)
        {

                echo "<tr>";
                for($y=1;$y<=$columnas;$y++)
                {
                  if ($y == 1)
                  {
                      if ($t > 12)
                      {
                          $name_asig = "otra_asig".$t;
                          echo "<td style = 'width:150px'>  <input type='text' id='$name_asig' name='$name_asig'  placeholder='otro' disabled> </td>";
                      }
                      else
                      {
                          $fila = $t-1;
                          echo "<td style = 'width:150px'>  $array[$fila]  </td>";
                      }

                  }
                  else
                  {
                          if ($y == 2)
                          {
                              $num = $y -3;
                              echo "<td align='center'> <input type='checkbox' name='asignaturas[]' value='$t' onclick = 'activateText(this, $t,\"grado\",2)'> </td>";
                          }
                          else
                          {
                              //** creacion de los checkbox **//
                              $num = $y -3;
                              $name = "grado".$t."-".$num;
                              echo "<td align='center'> <input type='checkbox' id= '$name' name='$name' value ='1' disabled onclick = 'activateNivel(this,$t,$num,\"nivel\")'> </td>";
                          }
                  }

                }
                echo "</tr>";
                echo "<tr>";
                for($y=1;$y<=$columnas;$y++)
                {
                    if ($y == 1)
                    {
                        echo "<td style = 'width:150px'>   </td>";
                    }
                    else
                    {
                        if ($y <= 3)
                        {
                            echo "<td> </td>";
                        }
                        else
                        {
                            //** creacion de los texts **//

                            $num = $y -3;
                            $name = "nivel".$t."-".$num;
                            echo "<td align='center'> <input type='text' id= '$name' name='$name' disabled > </td>";
                        }
                    }
                }
                echo "</tr>";

        }

        ?>
	
	</table>
            <table>
                <tr>
                    <td style = 'width:150px'>  Primera infancia </td>

                    <td align='center'> <input type='checkbox' name='asignaturas[]' value='15' onclick = "activate (this,15)"> </td>
                    <td align='center' style = 'width:45px'></td>

                    <td style = 'width:600px' > <input type='text' id= 'observacion' name='observacion' disabled > </td>
                </tr>
                </table>

                <table>
                <tr>
                    <td style = 'width:150px'>  escuela nueva  </td>

                    <td align='center'> <input type='checkbox' name='asignaturas[]' value='16' onclick = "activate (this,16)">  </td>
                    <td align='center' style = 'width:45px'></td>
                    <td align='center'> <input type='checkbox' id= 'nueva_primaria' name='nueva_primaria' value = '1' disabled onclick = "grados_activate (this,1)" > primaria </td>
                    <td align='center'> <input type='text' id= 'grados_prim' name='grados_prim' disabled > </td>
                    <td align='center'> <input type='checkbox' id= 'nueva_bachillerato' name='nueva_bachillerato' value = '1' disabled onclick = "grados_activate (this,2)" > bachillerato </td>
                    <td align='center'> <input type='text' id= 'grados_bachillerato' name='grados_bachillerato' disabled > </td>
                </tr>
                </table>


	</p>


	</fieldset>


	<fieldset>
	<legend> Practicas Pedagógicas</legend>
	<p>
	<table id = 'procesos'>
	<tr>
		<td style = "width:350px">
		<p align="justify" >
		13. Seleccione, sí Ud, previo al desarrollo de esta
		investigación ha participado en procesos de formación
		e indique tiempo de duración y finalización, en caso de
        estar en proceso digite 0 en tiempo de finalización.
		(Si ha realizado un diplomado que incluye todas las  temáticas marca solo una opción)
		</p>
		</td>
		<td style = "width:50px"> <p align= "center"> Si</p></td>
		<td>Tiempo de duracion (meses)</td>
		<td>Hace cuanto tiempo finalizo (meses)</td>
	</tr>

	<tr>
		<td> Convivencia</td>
		<td> <input  type="checkbox" name="areas[]" value="a" onclick = "activateText(this, 1, 'tiempo',3)" > </td>
		<td> <input type="number" id="tiempo1" name="duracion[]"  min =-2 max="80" required disabled> </td>
		<td> <input type="number" id="tiem_fini1" name="tiempo_atras[]" min =-2   required disabled> </td>
	</tr>
	<!-- ------------------------------------------------------------------------- -->
	<tr>
		<td> Ciudadania y derechos humanos </td>
		<td> <input type="checkbox" name="areas[]" value="b"  onclick = "activateText(this, 2, 'tiempo',3)" > </td>
		<td> <input type="number" id="tiempo2" name="duracion[]" min =-2 max="80" required disabled  > </td>
		<td> <input type="number" id="tiem_fini2"  name="tiempo_atras[]" min =-2  required disabled> </td>
	</tr>
	<!-- ------------------------------------------------------------------------- -->
	<!-- ------------------------------------------------------------------------- -->
	<tr>
		<td> Sexualidad </td>
		<td> <input type="checkbox" name="areas[]" value="c" onclick = "activateText(this, 3, 'tiempo',3)" > </td>
		<td> <input type="number" id="tiempo3" name="duracion[]" min =-2 max="80" required disabled > </td>
		<td> <input type="number" id="tiem_fini3" name="tiempo_atras[]" min =-2  required disabled> </td>
	</tr>
	<!-- ------------------------------------------------------------------------- -->
	<!-- ------------------------------------------------------------------------- -->
	<tr>
		<td> Medio ambiente </td>
		<td> <input type="checkbox" name="areas[]" value="d" onclick = "activateText(this, 4, 'tiempo',3)"> </td>
		<td> <input type="number" id="tiempo4" name="duracion[]" min =-2 max="80" required disabled > </td>
		<td> <input type="number" id="tiem_fini4"  name="tiempo_atras[]" min =-2  required disabled> </td>
	</tr>
	<!-- ------------------------------------------------------------------------- -->
	<!-- ------------------------------------------------------------------------- -->
	<tr>
		<td> Prevencion de consumo de sustancias psicoactivas </td>
		<td> <input type="checkbox" name="areas[]" value="e" onclick = "activateText(this, 5, 'tiempo',3)"> </td>
		<td> <input type="number" id="tiempo5"  name="duracion[]" min =-2 max="80" required disabled > </td>
		<td> <input type="number" id="tiem_fini5" name="tiempo_atras[]" min =-2  required disabled > </td>
	</tr>
	<!-- ------------------------------------------------------------------------- -->

	<!-- ------------------------------------------------------------------------- -->
	<tr>
		<td> Manejo de conflictos y/o mediación escolar </td>
		<td> <input type="checkbox" name="areas[]" value="f" onclick = "activateText(this, 6, 'tiempo',3)" > </td>
		<td> <input type="number" id="tiempo6" name="duracion[]" min =-2 max="80" required disabled > </td>
		<td> <input type="number" id="tiem_fini6" name="tiempo_atras[]" min =-2 required disabled  > </td>
	</tr>
	<!-- ------------------------------------------------------------------------- -->
	<!-- ------------------------------------------------------------------------- -->
	<tr>
		<td> Manejo y prevencion de acoso escolar</td>
		<td> <input type="checkbox" name="areas[]" value="g" onclick = "activateText(this, 7, 'tiempo',3)" > </td>
		<td> <input type="number" id="tiempo7" name="duracion[]"  min =-2 max="80"  required disabled> </td>
		<td> <input type="number" id="tiem_fini7" name="tiempo_atras[]" min =-2 required  disabled> </td>
	</tr>
            <tr>
            <td><input type="text" id = "otro13" name="otro13" placeholder ="otro" disabled > </td>
            <td> <input type="checkbox" name="areas[]" value="h" onclick = "activateText(this, 8, 'tiempo',3)" > </td>
            <td> <input type="number" id="tiempo8" name="duracion[]"  min =-2 max="80"  required disabled> </td>
            <td> <input type="number" id="tiem_fini8" name="tiempo_atras[]" min =-2 required  disabled> </td>
            </tr>

	<!-- ------------------------------------------------------------------------- -->
</table>
	</p>
        <!-- ------------------------------------------------------------------------- -->
	<p>
      <label for="caplica">14. ¿Ud. aplica algunos de los conocimientos aprendidos en los procesos de formación mencionados anteriormente?</label>
	  a.
	  <input type="radio" name="group1" value="1" onclick = "mostrar_preg(1)"> Si
	  <input type="radio" name="group1" value="0" onclick = "mostrar_preg(0)" checked> No
        <input type="radio" name="group1" value="-2" onclick = "mostrar_preg(0)"> No aplica
	  <p id="opcional" display = None>
	  b.	¿De qué manera y en qué momentos los aplica?
	  <textarea name="aplicacion"></textarea>
            <br>
	 </p>
        <!---------------------------------- tabla de pedagogia  ------------------------------ -->
        <table id = 'pedagogia'>
            <tr>
                <td style = "width:350px">
                    <p align="justify" >
                        15.	De las siguientes estrategias pedagógicas, ¿Cuáles son las 3 que más  implementa para promover la convivencia entre los estudiantes?
                        Lea el listado y seleccione las tres estrategias que más implementa.
                        Una vez, identifique las 3 estrategias que más usa, indique con qué frecuencia las ha usado esta semana
                    </p>
                </td>
                <td style = "width:50px"> <p align= "center"></p></td>
                <td>Casi todos los dias</td>
                <td>Algunos dias</td>
                <td style = "width:50px">Un dia </td>
                <td >No responde</td>

            </tr>

            <tr> <label for="estrategias[]" generated="true" class="error"></label> </tr>
            <tr>
                <td><p> a. Recordar Normas</p></td>
                <td>  <input type = "checkbox" name="estrategias[]" value = "a" onclick = "activateText(this, 1, 'radio',4)"> </td>
                <td> <input type = "radio" name="frecuencia1" value = "1" disabled id ="radio1A"> </td>
                <td> <input type = "radio" name="frecuencia1" value = "2" disabled id ="radio1B"></td>
                <td> <input type = "radio" name="frecuencia1" value = "3" disabled id ="radio1C"></td>
                <td> <input type = "radio" name="frecuencia1" value = "-2" disabled id ="radio1D"></td>
            </tr>

            <tr>
                <td><p>b.	Habla con los estudiantes para fortalecer valores sociales </p></td>
                <td>  <input type = "checkbox" name="estrategias[]" value = "b" onclick = "activateText(this, 2, 'radio',4)">  </td>
                <td> <input type = "radio" name="frecuencia2" value = "1" disabled id ="radio2A"> </td>
                <td> <input type = "radio" name="frecuencia2" value = "2" disabled id ="radio2B"></td>
                <td> <input type = "radio" name="frecuencia2" value = "3" disabled id ="radio2C"></td>
                <td> <input type = "radio" name="frecuencia2" value = "-2" disabled id ="radio2D"></td>
            </tr>
            <tr>
                <td><p> c.	Habla con los estudiantes-permanentemente-para conocer su historia de vida </p> </td>
                <td>  <input type = "checkbox" name="estrategias[]" value = "c" onclick = "activateText(this, 3, 'radio',4)" > </td>
                <td> <input type = "radio" name="frecuencia3" value = "1" disabled id ="radio3A"> </td>
                <td> <input type = "radio" name="frecuencia3" value = "2" disabled id ="radio3B"></td>
                <td> <input type = "radio" name="frecuencia3" value = "3" disabled id ="radio3C"></td>
                <td> <input type = "radio" name="frecuencia3" value = "-2" disabled id ="radio3D"></td>
            </tr>

            <tr>
                <td><p>d.	Habla con los estudiantes para conocer sus inquietudes, problemas, conflictos y dificultades </p></td>
                <td>  <input type = "checkbox" name="estrategias[]" value = "d" onclick = "activateText(this, 4, 'radio',4)" > </td>
                <td> <input type = "radio" name="frecuencia4" value = "1" disabled id ="radio4A"> </td>
                <td> <input type = "radio" name="frecuencia4" value = "2" disabled id ="radio4B"></td>
                <td> <input type = "radio" name="frecuencia4" value = "3" disabled id ="radio4C"></td>
                <td> <input type = "radio" name="frecuencia4" value = "-2" disabled id ="radio4D"></td>
            </tr>
            <tr>
                <td><p> e.	Realizar Lecturas para reforzar valores y autoestima</p></td>
                <td>  <input type = "checkbox" name="estrategias[]" value = "e" onclick = "activateText(this, 5, 'radio',4)"> </td>
                <td> <input type = "radio" name="frecuencia5" value = "1" disabled id ="radio5A"> </td>
                <td> <input type = "radio" name="frecuencia5" value = "2" disabled id ="radio5B"></td>
                <td> <input type = "radio" name="frecuencia5" value = "3" disabled id ="radio5C"></td>
                <td> <input type = "radio" name="frecuencia5" value = "-2" disabled id ="radio5D"></td>
            </tr>
            <tr>
                <td><p> f.	Ponerlos a trabajar en  equipo </p></td>
                <td>  <input type = "checkbox" name="estrategias[]" value = "f" onclick = "activateText(this, 6, 'radio',4)"> </td>
                <td> <input type = "radio" name="frecuencia6" value = "1" disabled id ="radio6A"> </td>
                <td> <input type = "radio" name="frecuencia6" value = "2" disabled id ="radio6B"></td>
                <td> <input type = "radio" name="frecuencia6" value = "3" disabled id ="radio6C"></td>
                <td> <input type = "radio" name="frecuencia6" value = "-2" disabled id ="radio6D"></td>
            </tr>
            <tr>
                <td><p> g.	Realizar Pausas activas para motivar la atención </p> </td>
                <td>  <input type = "checkbox" name="estrategias[]" value = "g" onclick = "activateText(this, 7, 'radio',4)"> </td>
                <td> <input type = "radio" name="frecuencia7" value = "1" disabled id ="radio7A"> </td>
                <td> <input type = "radio" name="frecuencia7" value = "2" disabled id ="radio7B"></td>
                <td> <input type = "radio" name="frecuencia7" value = "3" disabled id ="radio7C"></td>
                <td> <input type = "radio" name="frecuencia7" value = "-2" disabled id ="radio7D"></td>
            </tr>

            <tr>
                <td><p> h.	Implementar juegos para controlar estrés </p></td>
                <td>  <input type = "checkbox" name="estrategias[]" value = "h" onclick = "activateText(this, 8, 'radio',4)"> </td>
                <td> <input type = "radio" name="frecuencia8" value = "1" disabled id ="radio8A"> </td>
                <td> <input type = "radio" name="frecuencia8" value = "2" disabled id ="radio8B"></td>
                <td> <input type = "radio" name="frecuencia8" value = "3" disabled id ="radio8C"></td>
                <td> <input type = "radio" name="frecuencia8" value = "-2" disabled id ="radio8D"></td>
            </tr>
            <tr>
                <td><p> i.	Realizar Asambleas de aula </p></td>
                <td>  <input type = "checkbox" name="estrategias[]" value = "i" onclick = "activateText(this, 9, 'radio',4)"> </td>
                <td> <input type = "radio" name="frecuencia9" value = "1" disabled id ="radio9A"> </td>
                <td> <input type = "radio" name="frecuencia9" value = "2" disabled id ="radio9B"></td>
                <td> <input type = "radio" name="frecuencia9" value = "3" disabled id ="radio9C"></td>
                <td> <input type = "radio" name="frecuencia9" value = "-2" disabled id ="radio9D"></td>
            </tr>

            <tr>
            <td style = "width:500px"> <p> Si aplica otros distintos a los de la lista anterior por favor digitelos en los campos de abajo</p></td>
            </tr>
            <tr>
                <td><input id= "estra_txt10" type = "text" name="otros1"  disabled  required></td>
                <td>  <input type = "checkbox" name="estrategias[]" value = "j" onclick = "activateText(this, 10, 'radio',4)"> </td>
                <td> <input type = "radio" name="frecuencia10" value = "1" disabled id ="radio10A"> </td>
                <td> <input type = "radio" name="frecuencia10" value = "2" disabled id ="radio10B"></td>
                <td> <input type = "radio" name="frecuencia10" value = "3" disabled id ="radio10C"></td>
                <td> <input type = "radio" name="frecuencia10" value = "-2" disabled id ="radio10D"></td>
            </tr>
            <tr>
                <td><input id = "estra_txt11" type = "text" name="otros2"  disabled  required></td>
                <td>  <input  type = "checkbox" name="estrategias[]" value = "k" onclick = "activateText(this, 11, 'radio',4)"> </td>
                <td> <input type = "radio" name="frecuencia11" value = "1" disabled id ="radio11A"> </td>
                <td> <input type = "radio" name="frecuencia11" value = "2" disabled id ="radio11B"></td>
                <td> <input type = "radio" name="frecuencia11" value = "3" disabled id ="radio11C"></td>
                <td> <input type = "radio" name="frecuencia11" value = "-2" disabled id ="radio11D"></td>
            </tr>
            </table>
        <br>
        <!---------------------------------- tabla de estrategia  ----------------------------- -->
        <table id = 'estrategias'>
            <tr>

                <td style = "width:350px">
                    <p align="justify" >
                        16.	De las siguientes estrategias pedagógicas,
                        ¿Cuáles implementa para promover la ciudadanía entre los estudiantes?
                        Marque con una X según corresponda
                    </p>
                </td>
                <td><p align = "center">En el último mes, con qué frecuencia las ha implementado </p></td>
            </tr>
        </table>
        <br>
        <!---------------------------  contenido de tabla estrategia -------------------------- -->
        <table>
            <tr>
                <td style = "width:350px" ><p align="center"> Estrategia pedagógicas</p> </td>
                <td>Una vez por semana</td>
                <td>Cada 15 días</td>
                <td>Una vez al mes</td>
                <td>Este mes no la he realizado</td>
                <td>No responde</td>

            </tr>
            <tr>
                <td><p> a.	Exposiciones </p></td>
                <td align="center"> <input type = "radio" name="exposicion" value = "1" > </td>
                <td align="center"> <input type = "radio" name="exposicion" value = "2" ></td>
                <td align="center"> <input type = "radio" name="exposicion" value = "3" ></td>
                <td align="center"> <input type = "radio" name="exposicion" value = "4" ></td>
                <td align="center"> <input type = "radio" name="exposicion" value = "-2" checked></td>
            </tr>
            <tr>
                <td><p>b.	Debates</p></td>
                <td align="center"> <input type = "radio" name="debate" value = "1"> </td>
                <td align="center"> <input type = "radio" name="debate" value = "2" ></td>
                <td align="center"> <input type = "radio" name="debate" value = "3" ></td>
                <td align="center"> <input type = "radio" name="debate" value = "4" ></td>
                <td align="center"> <input type = "radio" name="debate" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> c.	Mesa Redonda</p></td>
                <td align="center"> <input type = "radio" name="mesa" value = "1" > </td>
                <td align="center"> <input type = "radio" name="mesa" value = "2" ></td>
                <td align="center"> <input type = "radio" name="mesa" value = "3" ></td>
                <td align="center"> <input type = "radio" name="mesa" value = "4" ></td>
                <td align="center"> <input type = "radio" name="mesa" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> d.	Foros </p></td>
                <td align="center"> <input type = "radio" name="foro" value = "1" > </td>
                <td align="center"> <input type = "radio" name="foro" value = "2" ></td>
                <td align="center"> <input type = "radio" name="foro" value = "3" ></td>
                <td align="center"> <input type = "radio" name="foro" value = "4" ></td>
                <td align="center"> <input type = "radio" name="foro" value = "-2" checked ></td>
            </tr>
            <tr>
                <td> <p> e.	Implementación de  Juegos cooperativos </p> </td>
                <td align="center"> <input type = "radio" name="juego" value = "1" > </td>
                <td align="center"> <input type = "radio" name="juego" value = "2" ></td>
                <td align="center"> <input type = "radio" name="juego" value = "3" ></td>
                <td align="center"> <input type = "radio" name="juego" value = "4" ></td>
                <td align="center"> <input type = "radio" name="juego" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> f.	Asambleas de aula </p> </td>
                <td align="center"> <input type = "radio" name="asamblea" value = "1" > </td>
                <td align="center"> <input type = "radio" name="asamblea" value = "2" ></td>
                <td align="center"> <input type = "radio" name="asamblea" value = "3" ></td>
                <td align="center"> <input type = "radio" name="asamblea" value = "4" ></td>
                <td align="center"> <input type = "radio" name="asamblea" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> g.	Implemento la estrategia Ondas  </p> </td>
                <td align="center"> <input type = "radio" name="estrate_onda" value = "1" > </td>
                <td align="center"> <input type = "radio" name="estrate_onda" value = "2" ></td>
                <td align="center"> <input type = "radio" name="estrate_onda" value = "3" ></td>
                <td align="center"> <input type = "radio" name="estrate_onda" value = "4" ></td>
                <td align="center"> <input type = "radio" name="estrate_onda" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> h.	Implementó proyectos de aula  </p></td>
                <td align="center"> <input type = "radio" name="proyec_aula" value = "1" > </td>
                <td align="center"> <input type = "radio" name="proyec_aula" value = "2" ></td>
                <td align="center"> <input type = "radio" name="proyec_aula" value = "3" ></td>
                <td align="center"> <input type = "radio" name="proyec_aula" value = "4" ></td>
                <td align="center"> <input type = "radio" name="proyec_aula" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> i.	Propongo a cada estudiante la solución de un problema de área que debe exponer </p></td>
                <td align="center"> <input type = "radio" name="expo_problema" value = "1" > </td>
                <td align="center"> <input type = "radio" name="expo_problema" value = "2" ></td>
                <td align="center"> <input type = "radio" name="expo_problema" value = "3" ></td>
                <td align="center"> <input type = "radio" name="expo_problema" value = "4" ></td>
                <td align="center"> <input type = "radio" name="expo_problema" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> j.	Implementación de jornadas de seguimiento a los acuerdos de convivencia del salón</p></td>
                <td align="center"> <input type = "radio" name="jornada_seguimiento" value = "1" > </td>
                <td align="center"> <input type = "radio" name="jornada_seguimiento" value = "2" ></td>
                <td align="center"> <input type = "radio" name="jornada_seguimiento" value = "3" ></td>
                <td align="center"> <input type = "radio" name="jornada_seguimiento" value = "4" ></td>
                <td align="center"> <input type = "radio" name="jornada_seguimiento" value = "-2" checked ></td>
            </tr>

            <tr>
                <td><p> k.	Nombro monitor de clase </p> </td>
                <td align="center"> <input  type = "radio" name="monitor" value = "1" > </td>
                <td align="center"> <input  type = "radio" name="monitor" value = "2" ></td>
                <td align="center"> <input  type = "radio" name="monitor" value = "3" ></td>
                <td align="center"> <input  type = "radio" name="monitor" value = "4" ></td>
                <td align="center"> <input  type = "radio" name="monitor" value = "-2" checked ></td>
            </tr>
        </table>
        <!----------------------------------  tabla de acciones   ----------------------------- -->
        <br> <br>
        <table id = 'acciones'>
            <tr>

                <td style = "width:350px">
                    <p align="justify" >
                        17.	Cuáles de las siguientes acciones, ha tenido que implementar en la última semana,
                        para detener la agresión entre estudiantes (Seleccione según corresponda según corresponda)

                    </p>
                </td>
                <td><p align="center">En la última semana, con qué frecuencia las implementó </p> </td>
            </tr>
        </table>
        <!-----------------------------  contenido de tabla acciones --------------------------- -->

        <table>
            <tr>
                <td style = "width:350px" ><p align="center"> Acciones </p> </td>
                <td>Muchas veces</td>
                <td>Algunas veces</td>
                <td>Pocas veces</td>
                <td>No he tenido que hacerlo</td>
                <td>No responde </td>

            </tr>
            <tr>
                <td><p> a.	Separar  a los estudiantes que se están peleando </p></td>
                <td align="center"> <input type = "radio" name="separar_pelea" value = "1" > </td>
                <td align="center"> <input type = "radio" name="separar_pelea" value = "2" ></td>
                <td align="center"> <input type = "radio" name="separar_pelea" value = "3" ></td>
                <td align="center"> <input type = "radio" name="separar_pelea" value = "4" ></td>
                <td align="center"> <input type = "radio" name="separar_pelea" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> b.	Hablar con los estudiantes que se pelearon para que reconozcan la falta</p></td>
                <td align="center"> <input type = "radio" name="dialogo" value = "1" > </td>
                <td align="center"> <input type = "radio" name="dialogo" value = "2" ></td>
                <td align="center"> <input type = "radio" name="dialogo" value = "3" ></td>
                <td align="center"> <input type = "radio" name="dialogo" value = "4" ></td>
                <td align="center"> <input type = "radio" name="dialogo" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> c.	Elaborar trabajos escritos o carteleras entre los estudiantes que se pelearon </p></td>
                <td align="center"> <input type = "radio" name="trab_escrito" value = "1" > </td>
                <td align="center"> <input type = "radio" name="trab_escrito" value = "2" ></td>
                <td align="center"> <input type = "radio" name="trab_escrito" value = "3" ></td>
                <td align="center"> <input type = "radio" name="trab_escrito" value = "4" ></td>
                <td align="center"> <input type = "radio" name="trab_escrito" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> d.	Ayudar a los estudiantes que se pelearon a controlar sus emociones antes de ir al diálogo </p> </td>
                <td align="center"> <input type = "radio" name="ayuda" value = "1" > </td>
                <td align="center"> <input type = "radio" name="ayuda" value = "2" ></td>
                <td align="center"> <input type = "radio" name="ayuda" value = "3" ></td>
                <td align="center"> <input type = "radio" name="ayuda" value = "4" ></td>
                <td align="center"> <input type = "radio" name="ayuda" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> e.	Facilitar la definición de acuerdos entre los estudiantes que se pelearon </p></td>
                <td align="center"> <input type = "radio" name="acuerdo" value = "1" > </td>
                <td align="center"> <input type = "radio" name="acuerdo" value = "2" ></td>
                <td align="center"> <input type = "radio" name="acuerdo" value = "3" ></td>
                <td align="center"> <input type = "radio" name="acuerdo" value = "4" ></td>
                <td align="center"> <input type = "radio" name="acuerdo" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> f.	Proponer sanciones reparadoras entre los estudiantes que se pelearon </p> </td>
                <td align="center"> <input type = "radio" name="sanciones" value = "1" > </td>
                <td align="center"> <input type = "radio" name="sanciones" value = "2" ></td>
                <td align="center"> <input type = "radio" name="sanciones" value = "3" ></td>
                <td align="center"> <input type = "radio" name="sanciones" value = "4" ></td>
                <td align="center"> <input type = "radio" name="sanciones" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> g.	Remitir a los estudiantes que se pelearon con los mediadores  </p> </td>
                <td align="center"> <input type = "radio" name="mediadores" value = "1" > </td>
                <td align="center"> <input type = "radio" name="mediadores" value = "2" ></td>
                <td align="center"> <input type = "radio" name="mediadores" value = "3" ></td>
                <td align="center"> <input type = "radio" name="mediadores" value = "4" ></td>
                <td align="center"> <input type = "radio" name="mediadores" value = "-2" checked ></td>
            </tr>
            <tr>
                <td> <p> h.	Anotar las observaciones del conflicto en el observador de la IE  </p></td>
                <td align="center"> <input type = "radio" name="anotar_observaciones" value = "1" > </td>
                <td align="center"> <input type = "radio" name="anotar_observaciones" value = "2" ></td>
                <td align="center"> <input type = "radio" name="anotar_observaciones" value = "3" ></td>
                <td align="center"> <input type = "radio" name="anotar_observaciones" value = "4" ></td>
                <td align="center"> <input type = "radio" name="anotar_observaciones" value = "-2" checked ></td>
            </tr>
            <tr>
                <td> <p> i.	Aviso a las redes de apoyo </p> </td>
                <td align="center"> <input type = "radio" name="redes_apoyo" value = "1" > </td>
                <td align="center"> <input type = "radio" name="redes_apoyo" value = "2" ></td>
                <td align="center"> <input type = "radio" name="redes_apoyo" value = "3" ></td>
                <td align="center"> <input type = "radio" name="redes_apoyo" value = "4" ></td>
                <td align="center"> <input type = "radio" name="redes_apoyo" value = "-2" checked ></td>
            </tr>
            <tr>
                <td><p> j.	Reunión con el comité de convivencia-Invitados como comisaria de familia y personero municipal</p></td>
                <td align="center"> <input type = "radio" name="reunion" value = "1" > </td>
                <td align="center"> <input type = "radio" name="reunion" value = "2" ></td>
                <td align="center"> <input type = "radio" name="reunion" value = "3" ></td>
                <td align="center"> <input type = "radio" name="reunion" value = "4" ></td>
                <td align="center"> <input type = "radio" name="reunion" value = "-2" checked ></td>
            </tr>

            <tr>
                <td><p> k.	Citar a los padres de familia para establecer acuerdos </p></td>
                <td align="center"> <input  type = "radio" name="citacion" value = "1" > </td>
                <td align="center"> <input  type = "radio" name="citacion" value = "2" ></td>
                <td align="center"> <input  type = "radio" name="citacion" value = "3" ></td>
                <td align="center"> <input  type = "radio" name="citacion" value = "4" ></td>
                <td align="center"> <input  type = "radio" name="citacion" value = "-2" checked ></td>
            </tr>
        </table>
        <!-- ---------------------------------------------------------------------------------  -->
        <p><input class="submit" id="submit" type="submit" value="Enviar Formulario" disabled> </p>
	</fieldset>

	
	
	</form>
  

</body></html>
