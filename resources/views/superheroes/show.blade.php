<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Superhéroe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="container py-5">
        <h1 class="fw-bold mb-4">Detalles del Superhéroe</h1>

        <div class="card" style="background-color: #212529; border: 1px solid #495057; border-radius: 10px;">
            <div class="card-body text-light">
                <p><strong class="text-light">Nombre:</strong> {{ $superhero->name }}</p>
                <p><strong class="text-light">Nombre Real:</strong> {{ $superhero->real_name ?? 'N/A' }}</p>
                <p><strong class="text-light">Tipo:</strong> {{ $superhero->type->name ?? 'N/A' }}</p>
                <p><strong class="text-light">Universo:</strong> {{ $superhero->universe->name ?? 'N/A' }}</p>
                <p><strong class="text-light">Género:</strong> {{ $superhero->gender->name ?? 'N/A' }}</p>
                <p><strong class="text-light">Poderes:</strong> {{ $superhero->powers ?? 'N/A' }}</p>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Volver a la lista</a>
            <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-warning ms-2">Editar</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
