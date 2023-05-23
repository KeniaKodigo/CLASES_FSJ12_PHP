@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('contenido')
    <h1 class="text-center text-primary">Lista de Cursos Disponibles</h1>

    <a href="{{ url('/form') }}" class="btn btn-secondary mb-3">Registrar Curso</a>

    <a href="{{ url('/reporte_cursos') }}" target="_blank" class="btn btn-success mb-3">Generar Reporte</a>
    <div class="row">
        @foreach ($cursos as $item)
            <div class="col-md-4">
                <div class="card mb-4" style="width: 18rem;">
                    <!-- url('/'): hace referencia a la carpeta public  -->
                    <img src="{{ url('/') }}/img/curso.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <p><b>Precio:</b> {{ $item->price }}</p>
                    
                    <form action="{{ route('editById', $item->id) }}" method="POST">
                        <!-- asigno y actualizo la peticion -->
                        @method('GET')
                        <button class="btn btn-primary">Editar</button>
                    </form>
                    
                    <form action="{{ route('deleteById', $item->id) }}" method="POST">
                        @method('DELETE')
                        @csrf <!-- solicitamos el token de laravel para ejecutar la accion -->
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                    
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

