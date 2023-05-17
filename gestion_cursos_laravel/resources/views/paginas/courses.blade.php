@extends('template')

<!-- Haciendo referencia al yield de template.blade.php -->

@section('contenido')
    <h1 class="text-center text-primary">Lista de Cursos Disponibles</h1>

    <a href="{{ url('/form') }}" class="btn btn-secondary mb-3">Registrar Curso</a>

    <div class="row">
        @foreach ($cursos as $item)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <!-- url('/'): hace referencia a la carpeta public  -->
                    <img src="{{ url('/') }}/img/curso.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $item->title }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                    <p><b>Precio:</b> {{ $item->price }}</p>
                    
                    <button class="btn btn-primary">Editar</button>
                    <button class="btn btn-danger">Eliminar</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

