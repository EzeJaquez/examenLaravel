@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('store') }} " enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="nom">Nom:</label>
        <input  type="text" name="nom" class="form-control" required> 
    </div>
    <div class="form-group">
        <label for="id_ciutat">Ciutat</label>
        <select name="id_ciutat" class="form-select" required>
            <option value="" selected>-----</option>
        @forelse($ciutats as $ciutat)
            <option value="{{$ciutat->id}}">{{$ciutat->nombre}}</option>
        @empty  
            <option value="NULL">Sin ciudades añadidas</option>
        @endforelse
        </select>
    </div>
    <div class="form-group">
        <label for="data_inici">Data inicial</label>
        <input name="data_inici"  type="date"  required/> 
    </div>
    <div class="form-group">
        <label for="data_final">Data final</label>
        <input name="data_final"  type="date"  required/> 
    </div>
    <div class="form-group">
        <label for="n_places">Nombre de places</label>
        <input name="n_places" type="number" step="1" class="form-control" required/> 
    </div>
    
    <button type="submit" class="btn btn-primary">Afegir Casal</button> <a href="{{route('home')}}">volver</a>
</form>

@stop