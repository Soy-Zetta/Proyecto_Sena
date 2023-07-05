{{-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reporte de Compra</title>
</head>
<body>
    <h1>Reporte de Compra</h1>
    <p><strong>ID de Compra:</strong> {{ $compra->id }}</p>
    <p><strong>Proveedor:</strong> {{ $compra->proveedor->nombre }}</p>
    <p><strong>Fecha:</strong> {{ $compra->fecha }}</p>
    <p><strong>Estado:</strong> {{ $compra->estado }}</p>

    <h2>Detalle de la Compra</h2>
    <table>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            @foreach($detalleCompra as $detalle)
                <tr>
                    <td>{{ $detalle->producto->descripcion }}</td>
                    <td>{{ $detalle->cantidad }}</td>
                    <td>{{ $detalle->precio }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <a href="{{ route('reporte.compra') }}" class="btn btn-outline-primary" target="_blank">Imprimir Reporte</a> --}}
</body>
</html> --}}