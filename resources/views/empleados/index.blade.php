<!DOCTYPE html>
<html>
<head>
    <title>Empleados</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<h1>Lista de empleados</h1>

<a href="{{ route('empleados.create') }}">Nuevo empleado</a>

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Cargo</th>
        <th>Salario</th>
        <th>Acciones</th>
    </tr>

    @foreach($empleados as $empleado)
    <tr>
        <td>{{ $empleado->nombre }}</td>
        <td>{{ $empleado->cargo }}</td>
        <td>{{ $empleado->salario }}</td>
        <td>
            <a href="{{ route('empleados.edit', $empleado) }}">Editar</a>

            <form action="{{ route('empleados.destroy', $empleado) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
