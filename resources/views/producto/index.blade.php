<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <style>
        body {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }

        th {
            background-color: #eee;
        }

        a, button {
            margin-right: 5px;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        button {
            background-color: transparent;
            border: 1px solid red;
            color: red;
            padding: 4px 8px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <h1>Productos</h1>
    <a href="{{ route('productos.create') }}">Crear Producto</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>{{ $producto->fecha_de_creacion }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto) }}">Editar</a>
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
