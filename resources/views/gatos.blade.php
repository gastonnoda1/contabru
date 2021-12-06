
@extends('welcome')
<h1 class="saludos">datos de prueba</h1> 
<input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
<input type="text" name="nombre" id="nombre" class="nombre" >


