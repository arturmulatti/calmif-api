@extends('modelos.modelo')
@section('content')


@endsection

@foreach($post as $posts)


@endforeach

<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Methods: POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, X-CSRF-Token');


die(json_encode($post));



?>

