<!-- Crear un directiva para el layout principal -->

@extends('layouts.app')

<!--  crear contenido de  titulo que inserta en el contenedor yield-->
@section('titulo')
    Pagina Web
@endsection

@section('contenido')
    Contenido de la pagina
@endsection