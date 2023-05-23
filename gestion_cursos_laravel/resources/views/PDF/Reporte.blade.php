<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('/') }}/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Cursos</title>
</head>
<style>
    /*h1{
        text-align: center;
        color: darkolivegreen;
    }*/
</style>
<body>
    <img src="{{ url('/')}}/img/logo.png" alt="">
    <h1>Cursos Disponibles en 2023</h1>
    <table class="table table-bordered table-striped mt-3">
        <thead>
            <th>#</th>
            <th>Titulo</th>
            <th>Descripcion</th>
            <th>Precio</th>
            <th>Instructor</th>
        </thead>
        <tbody>
            <?php $cont = 1; ?>
            @foreach ($cursos as $item)
                <tr>
                    <td>{{ $cont++ }}</td>
                    <td>{{ $item->title }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->id_instructor }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>