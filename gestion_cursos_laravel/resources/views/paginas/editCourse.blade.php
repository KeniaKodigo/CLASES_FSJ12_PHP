@extends('template')

@section('contenido')
    <h1 class="text-center text-primary">Editar Curso</h1>

    <!-- haciendo un llamado al name de la ruta de saveCourse -->
    <form action="{{ route('updateById', $curso->id_course ) }}" method="POST">
        @method('PUT') <!-- aclaramos que el metodo es PUT porque asi se asigna en la ruta en web.php -->
        <!-- solicitamos token para el envio de datos -->
        @csrf
        <label for="">Titulo</label>
        <input type="text" name="title" class="form-control" value="{{ $curso->title }}">

        <label for="">Descripcion</label>
        <input type="text" name="description" class="form-control" value="{{$curso->description}}">

        <label for="">Precio</label>
        <input type="text" name="Price" class="form-control" value="{{$curso->price}}">

        <label for="">Selecciona Instructor</label>
        <select name="instructores" class="form-control">
            <option value="{{$curso->id_instructor}}">{{ $curso->instructor }}</option>
            @foreach ($instructor as $element)
                <option value="{{ $element->id }}">{{ $element->name }}</option>
            @endforeach
        </select>

        <input type="submit" class="btn btn-primary mt-3" value="Actualizar Datos">
    </form>
@endsection