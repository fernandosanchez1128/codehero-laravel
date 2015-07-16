<!DOCTYPE html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">


<title>Encuesta para docentes</title>
<link rel="stylesheet" type="text/css" media="screen" href="{{url();}}/assets/css/estilos.css">
<script src="{{url();}}/assets/js/jquery-1.4.2.min.js" type="text/javascript"></script><style type="text/css"></style>
<script type="text/javascript" src="{{url();}}/assets/js/formToWizard.js"></script>
<script src="{{url();}}/assets/js/jquery.form.js" type="text/javascript"></script>
<script src="{{url();}}/assets/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript" src="{{url();}}/assets/js/formToWizard.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
			$("#frmContact").validate({
				event: "blur",rules: 
				{
					'nameIE': "required",
					'nameSede': "required",
					'nameDocente': "required",
					'edad': "required"
				},
				messages: 	
				{
					'nameIE': "Por favor indica el nombre de la IE",
					'nameSede': "Por favor, indica el nombre de la sede",
					'nameDocente': "por favor digita tu nombre",
					'edad' : "por favor digte su edad"
				},
			});
	});
</script>
<script>
function activateText(form,obj,num){
	if(obj.checked==true){
		if (num==1)
		{
			form.tit1.disabled= false;
		
		}
		if (num ==2)
		{
			form.tit2.disabled = false;
		}
		
	}
	else
	{
		if (num==1)
		{
			form.tit1.disabled = true;	
		}
		if (num ==2)
		{
			form.tit2.disabled = true;
		}
			
	}

}
</script>

<script type="text/javascript">
        $(document).ready(function(){
            $("#frmContact").formToWizard({ submitButton: 'SaveAccount' })
        });
    </script>
<script>	
function validar(step)
{
	if (step == 1)
	{
		var validator = $( "#frmContact" ).validate();
		return validator.element( "#cnameIE" ) && validator.element( "#cnameSede" ) && validator.element( "#cnameDocente" );
		//& validator.element( "#cedad" );
		
	}
}
</script>	
</head>
<body>
	<h1>Ejemplo jQuery validate con envio en Ajax y phpmailer</h1>
	<div id="mensaje" style="display: none;"><strong>Mensaje enviado correctamente. En breve recibirÃ¡s mi respuesta. Gracias!</strong></div>
	<form id="frmContact" action= "google" method = "get">
	<fieldset>
	<legend>Datos Demograficos</legend>
		 <p>
      <label for="cnameIE">1. Nombre de la IE (required, at least 2 characters)</label>
      <input id="cnameIE" name="nameIE" minlength="2" maxlength = "20" type="text" value = "fernando" >
    </p>
    <p>
      <label for="cnameSede">2. Nombre de la Sede (required)</label>
      <input id="cnameSede" type="text" minlength="2"  name="nameSede"  value = "fernando">
    </p>
	<p>
      <label for="cnameDocente">3. Nombre del Docente (required)</label>
      <input id="cnameDocente" type="text" minlength="2" name="nameDocente"  value = "fernando" >
    </p>
	<p>
      <label for="cedad"> 4. Edad (required)</label>
      <input id="cedad" type="number"  name="edad" value = "20">
    </p>
	<p>
      <label for="cmunicipio"> 6. Municipio Donde Vive</label>
      <input id="cmunicipio" type="text"  name="municipio" >
    </p>
	<p>
      7. Estado Civil 
      <select id="cestado" name="estado" >
	  <option value = "Soltero"> Soltero </option>
	  <option value = "Casado"> Casado </option>
	  <option value = "UnionLibre"> Union Libre </option>
	  <option value = "Divorciado"> Divorciado </option>
	  <option value = "Viudo"> Viudo </option>
	  </select>
    </p>
	</fieldset>
	
	<fieldset>
	<legend> Datos Laborales</legend>
	<p>
      8. Escolaridad <br>
	  <table id= "escol" > 
	<tr>
		<td> <input type="checkbox"  name="escolaridad" value="tecnico" onclick = "activateText(this.form,this, 1)">Tecnico </td>
		<td> <input id = "tit1" type="text" style = 'float:right;' name="nombreTitulo" disabled required> </td>
	</tr>
	<tr>
	<td> <input type="checkbox" name="escolaridad" value="tecnologia" onclick= "activateText(this.form,this, 2)">Tecnologia</td>
	<td> <input type="text" id= "tit2" style = 'float:right;' name="nombreTitulo" disabled required> </td>
	</tr>
</table> 
    </p>
	<p>
      <label for="cexperiencia">9. ¿Cuantos Anios lleva laborando como docente?</label>
      <input id="cexperiencia" type="number" name="experiencia" >
    </p>
	<p>
      <label for="cexperienciaSede">10. ¿Cuantos Anios lleva laborando como docente en la sede?</label>
      <input id="cexperienciaSede" type="number" name="experienciaSede" required>
    </p>
	<p>
      <label for="cjornada">11. ¿Dentro de la sede educativa, en qué jornada o jornadas labora?</label>
      <select id="cjornada" name="jornada" >
	  <option value = "Manana"> Manana </option>
	  <option value = "Tarde"> Tarde </option>
	  </select>
    </p>
	<p>
	<br>
	12. Por Favor seleccione las asignaturas en las que enseña y digite los grados en los 
	que enseña
	<br>
	<table>
	<tr>
		<td> ciencias sociales</td>
		<td> <input type="checkbox" name="asignaturas" value="sociales" ></td>
		<td> <input type="text" id= "grado1A" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1B" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1C" name="grado" disabled required> </td>
	</tr>
	<!-- ----------------------------------------------------------------------------- -->
	<tr>
		<td> Etica , democracia y valores</td>
		<td> <input type="checkbox" name="asignaturas" value="etica" ></td>
		<td> <input type="text" id= "grado1A" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1B" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1C" name="grado" disabled required> </td>
	</tr>
	<!-- ----------------------------------------------------------------------------- -->
	<tr>
		<td> ciencias Naturales</td>
		<td> <input type="checkbox" name="asignaturas" value="ciencias" ></td>
		<td> <input type="text" id= "grado1A" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1B" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1C" name="grado" disabled required> </td>
	</tr>
	<!-- ----------------------------------------------------------------------------- -->
	<tr>
		<td> Matematicas</td>
		<td> <input type="checkbox" name="asignaturas" value="matematicas" ></td>
		<td> <input type="text" id= "grado1A" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1B" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1C" name="grado" disabled required> </td>
	</tr>
	<!-- ----------------------------------------------------------------------------- -->
	<tr>
		<td> Tecnologia e informática</td>
		<td> <input type="checkbox" name="asignaturas" value="informatica" ></td>
		<td> <input type="text" id= "grado1A" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1B" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1C" name="grado" disabled required> </td>
	</tr>
	<!-- ----------------------------------------------------------------------------- -->
	<tr>
		<td> fisica</td>
		<td> <input type="checkbox" name="asignaturas" value="fisica" ></td>
		<td> <input type="text" id= "grado1A" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1B" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1C" name="grado" disabled required> </td>
	</tr>
	<!-- ----------------------------------------------------------------------------- -->
	<tr>
		<td> quimica</td>
		<td> <input type="checkbox" name="asignaturas" value="quimica" ></td>
		<td> <input type="text" id= "grado1A" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1B" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1C" name="grado" disabled required> </td>
	</tr>
	<!-- ----------------------------------------------------------------------------- -->
	<tr>
		<td>Humanidades y lenguaje</td>
		<td> <input type="checkbox" name="asignaturas" value="humanidades" ></td>
		<td> <input type="text" id= "grado1A" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1B" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1C" name="grado" disabled required> </td>
	</tr>
	<!-- ----------------------------------------------------------------------------- -->
	<tr>
		<td>Segunda lengua: ingles u otros</td>
		<td> <input type="checkbox" name="asignaturas" value="ingles" ></td>
		<td> <input type="text" id= "grado1A" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1B" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1C" name="grado" disabled required> </td>
	</tr>
	<!-- ----------------------------------------------------------------------------- -->
	<tr>
		<td>Edicacion físicia - Deportes</td>
		<td> <input type="checkbox" name="asignaturas" value="deportes	" ></td>
		<td> <input type="text" id= "grado1A" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1B" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1C" name="grado" disabled required> </td>
	</tr>
	<!-- ----------------------------------------------------------------------------- -->
	<tr>
		<td>Artes: pintura, teatro, música,manualidades</td>
		<td> <input type="checkbox" name="asignaturas" value="deportes" ></td>
		<td> <input type="text" id= "grado1A" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1B" name="grado" disabled required> </td>
		<td> <input type="text" id= "grado1C" name="grado" disabled required> </td>
	</tr>
	<!-- ----------------------------------------------------------------------------- -->
	<tr></tr>
	<!-- ----------------------------------------------------------------------------- -->
</table>
	</p>
	
	
	</fieldset>
	
	
	<fieldset>
	<legend> Practicas Pedagógicas</legend>
	<p>
	<table id = 'procesos'>
	<tr>
		<td style = "width:350"> 
		<p align="justify" >
		13. Seleccione, sí Ud, previo al desarrollo de esta 
		investigación ha participado en procesos de formación 
		e indique tiempo de duración y finalización
		(Si ha realizado un diplomado que incluye todas las  temáticas marca solo una opción) 
		</p>
		</td>
		<td style = "width:50"> <p align= "center"> Si</p></td>
		<td>Tiempo de duracion (meses)</td>
		<td>Hace cuanto tiempo finalizo (meses)</td>
	</tr>
	
	<tr>
		<td> Convivencia</td>
		<td> <input type="checkbox" name="areas" value="convivencia" > </td>
		<td> <input type="number" name="tiempo1"  required disabled> </td>
		<td> <input type="number" name="tiem_fini1"  required disabled> </td>
	</tr>
	<!-- ------------------------------------------------------------------------- -->
	<tr>
		<td> Ciudadania y derechos humanos </td>
		<td> <input type="checkbox" name="areas" value="ciudadania" > </td>
		<td> <input type="number" name="tiempo1" required disabled  > </td>
		<td> <input type="number" name="tiem_fini1"  required disabled> </td>
	</tr>
	<!-- ------------------------------------------------------------------------- -->
	<!-- ------------------------------------------------------------------------- -->
	<tr>
		<td> Sexualidad </td>
		<td> <input type="checkbox" name="areas" value="sexualidad" > </td>
		<td> <input type="number" name="tiempo1" required disabled > </td>
		<td> <input type="number" name="tiem_fini1"  required disabled> </td>
	</tr>
	<!-- ------------------------------------------------------------------------- -->
	<!-- ------------------------------------------------------------------------- -->
	<tr>
		<td> Medio ambiente </td>
		<td> <input type="checkbox" name="areas" value="ambiente" > </td>
		<td> <input type="number" name="tiempo1" required disabled > </td>
		<td> <input type="number" name="tiem_fini1"  required disabled> </td>
	</tr>
	<!-- ------------------------------------------------------------------------- -->
	<!-- ------------------------------------------------------------------------- -->
	<tr>
		<td> Prevencion de consumo de sustancias psicoactivas </td>
		<td> <input type="checkbox" name="areas" value="prevencion_consumo" > </td>
		<td> <input type="number" name="tiempo1"  required disabled > </td>
		<td> <input type="number" name="tiem_fini1" required disabled > </td>
	</tr>
	<!-- ------------------------------------------------------------------------- -->
	
	<!-- ------------------------------------------------------------------------- -->
	<tr>
		<td> Manejo de conflictos y/o mediación escolar </td>
		<td> <input type="checkbox" name="areas" value="mediacion" > </td>
		<td> <input type="number" name="tiempo1" required disabled > </td>
		<td> <input type="number" name="tiem_fini1" required disabled  > </td>
	</tr>
	<!-- ------------------------------------------------------------------------- -->
	<!-- ------------------------------------------------------------------------- -->
	<tr>
		<td> Manejo y prevencion de acoso escolar</td>
		<td> <input type="checkbox" name="areas" value="prevencion_escolar" > </td>
		<td> <input type="number" name="tiempo1"  required disabled> </td>
		<td> <input type="number" name="tiem_fini1"  required disabled> </td>
	</tr>
	<!-- ------------------------------------------------------------------------- -->
	
</table>
	
	</p>
	<p>
      <label for="caplica">14. ¿Ud. aplica algunos de los conocimientos aprendidos en los procesos de formación mencionados anteriormente?</label>
	  a.
	  <input type="radio" name="group1" value="True"> Si 
	  <input type="radio" name="group1" value="False" checked> No 
	  <p id="opcional"> 
	  b.	¿De qué manera y en qué momentos los aplica?
	  <textarea name="aplicacion"></textarea>
	 </p>
	 
	 
    <p><input class="submit" type="submit" value="Enviar Formulario"></p>          	
	</fieldset>
	
	
	
	</form>
  

</body></html>
