<?php

// Inicia de la App

// Carga de ficheros (Controladores)
require ('Modelos/Usuarios.php');
require ('Modelos/Noticias.php');
require ('Include/Funciones.php');

if(isset($_GET['seccion'])){

	$seccion = $_GET['seccion'];

	if($seccion == 'usuarios'){
		// mostrar información del módulo Usuarios.
		print "Seccion Usuarios";
		echo "<br>";
		// evaluamos OPERACION
		// index.php?seccion=usuarios&operacion=editar&id=3


		if(isset($_GET['operacion'])){
			$seccion = $_GET['operacion'];

			switch ($operacion) {
				// CRUD = Create / Read / Update / Delete
				// Crear Usuario -> UsuariosCrear()
				case 'crear':
					UsuariosCrear();
					break;
				// Leer Usuario -> UsuariosRead($id)
				case 'leer':
					UsuariosLeer($_GET['id']);
					break;
				// Actualizar Usuario -> UsuariosUpdate($id)
				case 'actualizar':
					UsuariosActualizar($_GET['id']);
					break;
				// Borrar Usuario -> UsuariosDelete($id)
				case 'borrar':
					UsuarioBorrar($_GET['id']);
					break;
				}
			/*	default:
					// ejectuamos la función UsuariosListado()
					break;*/
			} //end operacion
		 else {
			// Imprimo todos los usuarios
			UsuariosListado();
		}

	}elseif ($seccion == 'noticias'){
		// mostrar información del módulo Noticias.
		print "Seccion Noticias";
		echo "<br>";
		// evaluamos OPERACION
		// index.php?seccion=noticias&operacion=editar&id=3


		if(isset($_GET['operacion'])){
			$seccion = $_GET['operacion'];

			switch ($operacion) {
				// CRUD = Create / Read / Update / Delete
				// Crear Noticia -> NoticiasCrear()
				case 'crear':
					NoticiasCrear();
					break;
				// Leer Noticia -> NoticiasRead($id)
				case 'leer':
					NoticiasLeer($_GET['id']);
					break;
				// Actualizar Noticias -> NoticiasUpdate($id)
				case 'actualizar':
					NoticiasActualizar($_GET['id']);
					break;
				// Borrar Noticias -> NoticiasDelete($id)
				case 'borrar':
					NoticiasBorrar($_GET['id']);
					break;
				/*
				default:
					// ejectuamos la función NoticiasListado()
					break;*/
				}
			} //end operacion
		else {
			// Imprimo todos las noticias
			NoticiasListado();
		}
	}else{
		// Mostrar el Index
		print "ERROR... SECCION NO RECONOCIDA";
	}

} // if de sección
else {
	// Mostrar pagina de inicio
	print "Página de Inicio";
}
?>