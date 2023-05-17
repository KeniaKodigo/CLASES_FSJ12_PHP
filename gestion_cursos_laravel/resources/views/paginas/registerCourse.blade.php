@extends('template')

@section('contenido')
    <h1 class="text-center text-success">Registrar Curso</h1>

    <form action="" method="POST">
        <label for="">Titulo</label>
        <input type="text" name="title" class="form-control">

        <label for="">Descripcion</label>
        <input type="text" name="description" class="form-control">

        <label for="">Precio</label>
        <input type="text" name="price" class="form-control">

        <label for="">Selecciona Instructor</label>
        <select name="instructores" class="form-control">
            @foreach ($instructor as $element)
                <option value="{{ $element->id }}">{{ $element->name }}</option>
            @endforeach
        </select>

        <input type="submit" class="btn btn-success mt-3" value="Guardar Datos">
    </form>
@endsection