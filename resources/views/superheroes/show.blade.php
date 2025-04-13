<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superhero Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="container py-5">
        <h1 class="fw-bold mb-4">Superhero Details</h1>

        <div class="card" style="background-color: #212529; border: 1px solid #495057; border-radius: 10px;">
            <div class="card-body text-light">
                <p><strong class="text-light">Name:</strong> {{ $superhero->name }}</p>
                <p><strong class="text-light">Real Name:</strong> {{ $superhero->real_name ?? 'N/A' }}</p>
                <p><strong class="text-light">Type:</strong> {{ $superhero->type->name ?? 'N/A' }}</p>
                <p><strong class="text-light">Universe:</strong> {{ $superhero->universe->name ?? 'N/A' }}</p>
                <p><strong class="text-light">Gender:</strong> {{ $superhero->gender->name ?? 'N/A' }}</p>
                <p><strong class="text-light">Powers:</strong> {{ $superhero->powers ?? 'N/A' }}</p>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Back to List</a>
            <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-warning ms-2">Edit</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
