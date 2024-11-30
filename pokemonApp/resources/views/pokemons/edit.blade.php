@extends('layouts.app')

@section('content')
<style>
    header{    
    margin: 0 0 0;
    background-image: url({{ asset('images/header-image2.png') }});
    background-repeat: repear;
    background-size: center;
    background-attachment: fixed;
    display: flex; 
    height: 50vh;
    
   
}
    h1 {
        text-align: center;
        color: #343a40;
        margin-bottom: 20px;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-weight: lighter;
        font-size: 4rem;
    }

    form {
    width: 80%;
    margin: 20px auto;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(53, 38, 165, 0.1);
    padding: 20px;
    border-radius: 8px;
}

input[type="text"], input[type="number"] {
    width: 98%;
    padding: 12px;
    margin: 10px 0;
    border: 1px solid #537faa;
    border-radius: 4px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 1rem;
}

input[type="text"]:focus, input[type="number"]:focus {
    border-color: #537faa;
    outline: none;
}

button {
    background-color: #2e18ae;
    color: white;
    border: none;
    padding: 12px 20px;
    cursor: pointer;
    border-radius: 4px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 1rem;
    width: 100%;
}

button:hover {
    background-color: rgb(212, 65, 65);
}

input::placeholder {
    color: #797676;
}

</style>
    <header></header>
    <h1>Editar Pokémon</h1>
    <form action="{{ route('pokemons.update', $pokemon) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $pokemon->name }}" required>
        <input type="text" name="type" value="{{ $pokemon->type }}" required>
        <input type="number" name="level" value="{{ $pokemon->level }}" required>
        <button type="submit">Update</button>
    </form>
    <footer style="margin-top: 4rem; text-align:center; border-top: 2px solid #2e18ae">
        <p>© 2024 Jenny P. Vásquez Calero | Desarrollo web Entorno Servidor </p>
    </footer>
@endsection
