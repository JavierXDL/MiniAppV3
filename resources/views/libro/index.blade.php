@extends('layouts.app')
@section('content')
    <div class="container">

    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
{{ Session::get('mensaje') }}
<button type="button" class="close " data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>

</div>

@endif

<a href=" {{ url('/libro/create') }} "class="btn btn-secondary" > Agregar nuevo libro</a> <br> <br>
<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Portada</th>
            <th>Nombre</th>
            <th>Autor</th>
            <th>Descripcion Corta</th>
            <th>Acciones</th>

        </tr>
    </thead>

    <tbody>
    @foreach( $spotify as $pasar)
        <tr>
            <td> {{ $pasar->id }} </td>

            <td> 
            <img  src=" {{ asset('storage').'/'.$pasar->Portada }} " widt="100" height="100" alt="">
            </td>

            <td> {{ $pasar->Nombre }} </td>
            <td> {{ $pasar->Autor }} </td>
            <td> {{ $pasar->DescripcionC }} </td>
            <td> 
            <a href=" {{ url('/libro/'.$pasar->id.'/edit') }} " class="btn btn-warning btn btn-primary  ">
            Editar 
            </a>

            <form action=" {{ url('/libro/'.$pasar->id) }} " class="d-inline" method="post">
                @csrf
                {{ method_field('Delete')}}
            <input  class="btn btn-danger  btn btn-primary" type="submit" onclick="return confirm('Deseas borrarlo')" value="Borrar">
            
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
{!! $spotify->links() !!}
</div>
@endsection