<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Empleados</title>
</head>
<body>

<h2>Nuevo empleado</h2>

<form action="/empleados" method="POST">
    @csrf
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="cargo" placeholder="Cargo" required>
    <input type="text" name="telefono" placeholder="Teléfono" required>
    <input type="number" step="0.01" name="salario" placeholder="Salario" required>
    <button type="submit">Guardar</button>
</form>

<hr>

<h2>Lista de empleados</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Cargo</th>
        <th>Teléfono</th>
        <th>Salario</th>
    </tr>

    @foreach ($empleados as $empleado)
    <tr>
        <td>{{ $empleado->id }}</td>
        <td>{{ $empleado->nombre }}</td>
        <td>{{ $empleado->cargo }}</td>
        <td>{{ $empleado->telefono }}</td>
        <td>{{ $empleado->salario }}</td>
    </tr>
    @endforeach
</table>

</body>
</html>
