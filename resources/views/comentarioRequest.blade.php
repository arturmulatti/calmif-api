@extends('modelos.modelo')
@section('content')
@foreach($comentario as $comentarios)


@endforeach

@endsection



<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Methods: POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, X-CSRF-Token');
die(json_encode($comentario))







?>