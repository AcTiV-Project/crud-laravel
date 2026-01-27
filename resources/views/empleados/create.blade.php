<!DOCTYPE html>
<html>
<head>
    <title>Nuevo empleado</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<h1>Nuevo empleado</h1>

<form action="{{ route('empleados.store') }}" method="POST">
    @csrf

    <input type="text" name="nombre" placeholder="Nombre"><br><br>
    <input type="text" name="cargo" placeholder="Cargo"><br><br>
    <input type="number" step="0.01" name="salario" placeholder="Salario"><br><br>

    <button type="submit">Guardar</button>
</form>

</body>
</html>
