@extends('layouts.app')

@section('content')
@foreach($info_casals as $casal)
<form method="POST" action="{{ route('update',$casal) }} " enctype="multipart/form-data">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="nom">Nom:</label>
        <input value="{{$casal->nom}}" type="text" name="nom" class="form-control" required> 
    </div>
    <div class="form-group">
        <label for="id_ciutat">Ciutat</label>
        <select name="id_ciutat" class="form-select" required>
            <option value="{{$casal->id_ciutat}}" selected>{{$casal->city_nombre}}</option>
        @forelse($ciutats as $ciutat)
            <option value="{{$ciutat->id}}">{{$ciutat->nombre}}</option>
        @empty  
            <option value="NULL">Sin ciudades añadidas</option>
        @endforelse
        </select>
    </div>
    <div class="form-group">
        <label for="data_inici">Data inicial</label>
        <input name="data_inici"  type="date" value="{{$casal->data_inici}}" required/> 
    </div>
    <div class="form-group">
        <label for="data_final">Data final</label>
        <input name="data_final"  type="date" value="{{$casal->data_final}}" required/> 
    </div>
    <div class="form-group">
        <label for="n_places">Nombre de places</label>
        <input value="{{$casal->n_places}}" name="n_places" type="number" step="1" class="form-control" required/> 
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar Cambios</button> <a href="{{route('home')}}">volver</a>
</form>
@endforeach
@stop