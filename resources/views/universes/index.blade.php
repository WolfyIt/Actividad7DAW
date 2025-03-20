<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Universos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .entity-card { 
            background-color: #212529; 
            border: 1px solid #495057; 
            border-radius: 10px; 
            transition: all 0.3s; 
        }
        .entity-card:hover { 
            border-color: #0dcaf0; 
            box-shadow: 0 4px 15px rgba(13, 202, 240, 0.3); 
        }
        .card-title { 
            color: #fff; 
            font-weight: bold; 
        }
        .card-text { 
            color: #ced4da; 
        }
        .btn-action { 
            margin: 0 5px; 
        }
    </style>
</head>
<body class="bg-dark text-light">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-center mb-5">
            <h1 class="fw-bold">Universos</h1>
            <a href="{{ route('universes.create') }}" class="btn btn-primary">+ Nuevo Universo</a>
        </div>

        @if ($universes->isEmpty())
            <div class="alert alert-dark text-center" role="alert">
                No hay universos registrados.
            </div>
        @else
            <div class="row g-4">
                @foreach ($universes as $universe)
                    <div class="col-md-4">
                        <div class="card entity-card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $universe->name }}</h5>
                                <p class="card-text">ID: {{ $universe->id }}</p>
                                <div class="mt-3">
                                    <a href="{{ url('/universes/'.$universe->id) }}" class="btn btn-info btn-sm btn-action">Ver</a>
                                    <a href="{{ route('universes.edit', $universe->id) }}" class="btn btn-warning btn-sm btn-action">Editar</a>
                                    <form action="{{ route('universes.destroy', $universe->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm btn-action" onclick="return confirm('¿Seguro que deseas eliminar {{ $universe->name }}?')">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>