<?php
Route::get('/', function()
{
    return Redirect::to('encuesta');
});

Route::get('usuarios', array('uses' => 'UsuariosController@nuevoUsuario'));

Route::get('usuarios/nuevo', array('uses' => 'UsuariosController@nuevoUsuario'));

Route::post('usuarios/crear', array('uses' => 'UsuariosController@crearUsuario'));
// esta ruta es a la cual apunta el formulario donde se introduce la información del usuario
// como podemos observar es para recibir peticiones POST
Route::get('dropdown', function(){
    $id = Input::get('option');
    $sedes = Instituciones::find($id)->sedes;
    return $sedes->lists('name', 'id');
});
Route::get('usuarios/{id}', array('uses'=>'UsuariosController@verUsuario'));
// esta ruta contiene un parámetro llamado {id}, que sirve para indicar el id del usuario que deseamos buscar
// este parámetro es pasado al controlador, podemos colocar todos los parámetros que necesitemos
// solo hay que tomar en cuenta que los parámetros van entre llaves {}
// si el parámetro es opcional se colocar un signo de interrogación {parámetro?}
Route::get('encuesta', array('uses'=>'EncuestaController@nuevoUsuario'));
Route::post('encuesta/store', array('uses'=>'EncuestaController@mostrarUsuarios'));
?>
