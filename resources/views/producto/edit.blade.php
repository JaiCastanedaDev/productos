<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear producto</title>
</head>

<body>
    <h1>Actualizar Producto</h1>
    <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
        </div>
        <div>
            <label for="referencia">Descripción:</label>
            <textarea id="referencia" name="referencia" required>{{ $producto->referencia }}</textarea>
        </div>
        <div>
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" value="{{ $producto->precio }}" required>
        </div>
        <div>
            <label for="stock">Stock:</label>
            <input type="number" id="stock" name="stock" value="{{ $producto->stock }}" required>
        </div>
        <input
            type="date"
            id="fecha_de_creacion"
            name="fecha_de_creacion"
            value="{{ \Carbon\Carbon::parse($producto->fecha_de_creacion)->format('Y-m-d') }}"
            required
        >
        <button type="submit">Actualizar Producto</button>
    </form>
</body>
</html>
