<?php

//CRUD Usuarios
function UsuariosCrear(){
	print "Se ha creado un Usuario";
}

function UsuariosLeer($user_id){
	print "Leyendo datos del usuario con ID = $user_id";
}

function UsuariosActualizar($user_id){
	print "Actualizando datos del usuario con ID = $user_id";
}

function UsuariosBorrar($user_id){
	print "Borrando datos del usuario con ID = $user_id";
}

function UsuariosListado(){
	print "Mostrando TODOS los usuarios";
}

//CRUD Noticias
function NoticiasCrear(){
	print "Se ha creado una Noticia";
}

function NoticiasLeer($news_id){
	print "Leyendo las noticias con ID = $news_id";
}

function NoticiasActualizar($news_id){
	print "Actualizando las noticias con ID = $news_id";
}

function NoticiasBorrar($news_id){
	print "Borrando las noticias con ID = $news_id";
}

function NoticiasListado(){
	print "Listado de Noticias";

}

?>