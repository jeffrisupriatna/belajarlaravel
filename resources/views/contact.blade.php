<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@extends('admin')
@section('mainsb2')
    <h1>ini adalah halaman contact</h1>
    <h2>{{ $name }}</h2>
    <h3>{{ $sesi }}</h3>


    @for ($i=1; $i <= 10; $i++)
        <h1>perulangan</h1>
    @endfor

    <img src="{{ asset('contoh.jpg') }}" width="300" alt="contoh">
@endsection    
</body>
</html>