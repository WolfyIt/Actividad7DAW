<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Universo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="container py-5">
        <h1 class="fw-bold mb-4">Detalles del Universo</h1>

        <div class="card" style="background-color: #212529; border: 1px solid #495057; border-radius: 10px;">
            <div class="card-body text-light">
                <p><strong class="text-light">ID:</strong> {{ $universe->id }}</p>
                <p><strong class="text-light">Nombre:</strong> {{ $universe->name }}</p>
                <p><strong class="text-light">Descripción:</strong> {{ $universe->description }}</p>
                <p><strong class="text-light">Superhéroes asociados:</strong> 
                @php
                    try {
                        echo $universe->superheroes ? $universe->superheroes->count() : '0';
                    } catch (\Exception $e) {
                        echo '0 (Error al cargar la relación)';
                    }
                @endphp
                </p>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('universes.index') }}" class="btn btn-secondary">Volver a la lista</a>
            <a href="{{ route('universes.edit', $universe->id) }}" class="btn btn-warning ms-2">Editar</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 