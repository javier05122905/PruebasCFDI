
@extends('principal')

@section('contenido')
        <center><h1> <b>Bienvenidos a CFDI, {{ session('nombre') }}</b></h1></center>
        <br><br>
        <center><img class="rounded" src = "{{asset('archivos/logo.png')}}" height = 400 width = 400></center>
        <br>
@stop 
        