@extends('layouts.app')

@section('content')
<div>
<span>Gestio Casal</span>
<a class="btn btn-info" href="{{route('create')}}">Afegir</a>
</div>

<table class="table table-hover">
    <tr class="encabezado">
        <th scope="col">Nom</th>
        <th scope="col">Data inici</th>
        <th scope="col">Data final</th>
        <th scope="col">Num places</th>
        <th scope="col">Ciutat</th>
        <th scope="col">editar</th>
        <th scope="col">Eliminar</th>
    </tr>
    @forelse($info_casals as $casal)
        <tr> 
            <td>{{$casal->nom}}</td> 
            <td>{{ $casal->data_inici}}</td>
            <td>{{ $casal->data_final}}</td>
            <td>{{ $casal->n_places }}</td>
            <td>{{ $casal->city_nombre}}</td>
            <td><a href="{{route('edit',$casal)}}"><i class="fa-solid fa-pen-to-square"></i></a></td>
            <td><a href="{{route('destroy',$casal)}}"><i class="fa-solid fa-trash"></i></a></td>
        <tr>
    @empty  
        <div>No hay proyectos para mostrar </div>
    @endforelse
</table>
@endsection
