@extends('layouts.app')
@section('content')
<style>
header{
    margin: 0 0 0;
    background-image: url({{ asset('images/header-image.png') }});
    background-repeat: repear;
    background-size: center;
    background-attachment: fixed;
    display: flex; 
    height: 50vh;
    margin-bottom:4rem;       
}
h1 {
    text-align: center;
    color: #343a40;
    margin-bottom: 20px;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    font-weight: lighter;
    font-size: 4rem;
}

table {

    width: 80%;
    border-collapse: collapse;
    margin: 20px auto;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(53, 38, 165, 0.1);

}

th, td {
    padding: 12px;
    text-align: left;
    border: 1px solid #dee2e6;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            
}

th {
    background-color: #537faa;
     color: white;
}

tr:nth-child(even) {
    background-color: #f2f2f2;
}

a {
    text-decoration: none;
    color: red;
}

a:hover {
    text-decoration: underline;
}

button {
    background-color: #2e18ae;
    color: white;
    border: none;
    padding: 8px 12px;
    cursor: pointer;
    border-radius: 4px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 1rem;

}

button:hover {
    background-color: rgb(212, 65, 65);
        
}

.alert {
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 4px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 1rem;
    width: 80%;
    margin: 0 auto;
}

.alert-success {
    background-color: #4CAF50; 
    color: white;
    border: 1px solid #45a049;
}

.alert-success a {
    color: white;
    text-decoration: none;
}

.alert-success a:hover {
    text-decoration: underline;
}

</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}" />
    <title>Document</title>
  
</head>
<header ></header>
<body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <h1>Pokémon List</h1>
    <!--<a href="{{ route('pokemons.create') }}">Crear Pokémon</a>-->
    <button type="button" class="btn btn-primary" onclick="window.location.href='{{ route('pokemons.create') }}'">
        Create Pokemon
    </button>
    <table class="table table-striped table-bordered text-center">
        <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
                <th>Level</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pokemons as $pokemon)
                <tr>
                    <td>{{ $pokemon->name }}</td>
                    <td>{{ $pokemon->type }}</td>
                    <td>{{ $pokemon->level }}</td>
                    <td>
                        <form action="{{ route('pokemons.edit', $pokemon->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-warning btn-sm">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('pokemons.destroy', $pokemon->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
  

    <footer style="margin-top: 4rem; text-align:center; border-top: 2px solid #2e18ae">
        <p>© 2024 Jenny P. Vásquez Calero | Desarrollo web Entorno Servidor </p>
    </footer>
    

</body>
</html>


