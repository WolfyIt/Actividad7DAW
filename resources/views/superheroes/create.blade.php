<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Superhéroe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="container py-5">
        <h1 class="fw-bold mb-4">Crear Superhéroe</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card" style="background-color: #212529; border: 1px solid #495057; border-radius: 10px;">
            <div class="card-body text-light">
                <form action="{{ route('superheroes.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Nombre del superhéroe</label>
                        <input type="text" class="form-control bg-dark text-light border-secondary" id="name" name="name" placeholder="Nombre del superhéroe" value="{{ old('name') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="real_name" class="form-label text-light">Nombre real</label>
                        <input type="text" class="form-control bg-dark text-light border-secondary" id="real_name" name="real_name" placeholder="Nombre real" value="{{ old('real_name') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="universe_id" class="form-label text-light">Universo</label>
                        <select class="form-select bg-dark text-light border-secondary" id="universe_id" name="universe_id" required>
                            <option value="">Seleccione un universo</option>
                            @foreach ($universes as $universe)
                                <option value="{{ $universe->id }}" {{ old('universe_id') == $universe->id ? 'selected' : '' }}>
                                    {{ $universe->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="type_id" class="form-label text-light">Tipo</label>
                        <select class="form-select bg-dark text-light border-secondary" id="type_id" name="type_id" required>
                            <option value="">Seleccione un tipo</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" {{ old('type_id') == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="gender_id" class="form-label text-light">Género</label>
                        <select class="form-select bg-dark text-light border-secondary" id="gender_id" name="gender_id" required>
                            <option value="">Seleccione un género</option>
                            @foreach ($genders as $gender)
                                <option value="{{ $gender->id }}" {{ old('gender_id') == $gender->id ? 'selected' : '' }}>
                                    {{ $gender->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="powers" class="form-label text-light">Poderes</label>
                        <textarea class="form-control bg-dark text-light border-secondary" id="powers" name="powers" rows="3" placeholder="Describe los poderes del superhéroe" required>{{ old('powers') }}</textarea>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Crear Superhéroe</button>
                        <a href="{{ route('superheroes.index') }}" class="btn btn-secondary ms-2">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
