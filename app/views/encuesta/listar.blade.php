
<html>
<head>


	<div>
        <h2><b>Listado de encuestas</b></h2>
    </div>

		
<!-- DataTables CSS -->
    <link rel="stylesheet" type="text/css" href="{{url();}}/assets/js/DataTables/media/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="{{url();}}/assets/js/jquery.js"></script>
<!-- jQuery -->
    <link rel="stylesheet" type="text/css" media="screen" href="{{url();}}/assets/css/estilos.css">
    <link href="{{url();}}/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="{{url();}}/assets/css/custom.css" rel="stylesheet" />
    <link href="{{url();}}/assets/css/bootstrap.css" rel="stylesheet" />
    <link href="{{url();}}/assets/css/font-awesome.css" rel="stylesheet" />
  
<!-- DataTables -->
    <script type="text/javascript" charset="utf8" src="{{url();}}/assets/js/DataTables/media/js/jquery.dataTables.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</head>
<body>
	<div>

			
            <div class="panel panel-default">
                <div class="panel-heading">
                </div> 
                <div class="panel-body">
                    <div class="table-responsive">
                            <table id="myTable" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Encuestador</th>
                                        <th>Institucion</th>
                                        <th>Sede</th>
                                        <th>Nombre Profesor</th>
                                        <th>Fecha</th>
                                    </tr>    
                                </thead>  

                                <tbody>

                                    @foreach($encuestas as $encuesta)
                                    <tr>
                                        <td>{{$encuesta->id}}</td>
                                        <td>{{$encuesta->nombre_profesional}}</td>
                                        <td>{{$encuesta->a1_nombre_ie}}</td>
                                        <td>{{$encuesta->a2_nombre_sede}}</td>
                                        <td>{{$encuesta->a3_nombre_docente}}</td>
                                        <td>{{$encuesta->fecha}}</td>
                                    </tr>
                                    @endforeach	

                                </tbody>    
                            </table>
                    </div>
                </div>  
            </div>    
        
	</div>
</body>
	
</html>
