@extends('template')


@section('contenido')
    <h1 class="text-center">Lista de Instructores</h1>

    <form action="" method="POST">
        @method('GET')
        <label for="">Busqueda:</label>
        <input type="text" class="form-control" name="buscar" placeholder="busqueda por nombre" value="{{ $buscar }}">
        <!-- la variable $buscar hace referencia a los que la persona me ingresa -->

        <input type="submit" class="btn btn-info mt-2" value="Buscar">
    </form>

    <table class="table table-hover mt-3">
        <thead>
            <th>#</th>
            <th>Nombre</th>
            <th>Correo</th>
        </thead>
        <tbody>
            <!-- count() => devuelve el tamaño de una arreglo -->
            @if (count($instructores) <= 0)
                <tr>
                    <td colspan="3">
                        <div class="alert alert-danger" role="alert">
                            No se encontraron resultados
                        </div>
                    </td>
                </tr>
            @else
                <?php $contador = 1; ?>
                @foreach ($instructores as $value)
                    <tr>
                        <td>{{ $contador++ }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->email }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection