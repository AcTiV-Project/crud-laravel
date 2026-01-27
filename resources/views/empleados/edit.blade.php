<!DOCTYPE html>
<html>
<head>
    <title>Editar empleado</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<h1>Editar empleado</h1>

<form action="{{ route('empleados.update', $empleado) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="nombre" value="{{ $empleado->nombre }}"><br><br>
    <input type="text" name="cargo" value="{{ $empleado->cargo }}"><br><br>
    <input type="number" step="0.01" name="salario" value="{{ $empleado->salario }}"><br><br>

    <button type="submit">Actualizar</button>
</form>

</body>
</html>
