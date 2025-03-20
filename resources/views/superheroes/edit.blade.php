<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Superhéroe</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">
    <div class="container py-5">
        <h1 class="fw-bold mb-4">Editar Superhéroe</h1>

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
                <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label text-light">Nombre</label>
                        <input type="text" name="name" id="name" value="{{ old('name', $superhero->name) }}" class="form-control bg-dark text-light border-secondary @error('name') is-invalid @enderror" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="powers" class="form-label text-light">Poder</label>
                        <input type="text" name="powers" id="powers" value="{{ old('powers', $superhero->powers) }}" class="form-control bg-dark text-light border-secondary @error('powers') is-invalid @enderror" required>
                        @error('powers')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="origin" class="form-label text-light">Origen</label>
                        <input type="text" name="origin" id="origin" value="{{ old('origin', $superhero->origin) }}" class="form-control bg-dark text-light border-secondary @error('origin') is-invalid @enderror">
                        @error('origin')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="universe_id" class="form-label text-light">Universo</label>
                        <select name="universe_id" id="universe_id" class="form-select bg-dark text-light border-secondary @error('universe_id') is-invalid @enderror" required>
                            <option value="">Seleccione un universo</option>
                            @foreach ($universes as $universe)
                                <option value="{{ $universe->id }}" {{ old('universe_id', $superhero->universe_id) == $universe->id ? 'selected' : '' }}>
                                    {{ $universe->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('universe_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="type_id" class="form-label text-light">Tipo de Superhéroe</label>
                        <select name="type_id" id="type_id" class="form-select bg-dark text-light border-secondary @error('type_id') is-invalid @enderror" required>
                            <option value="">Seleccione un tipo</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" {{ old('type_id', $superhero->type_id) == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('type_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="gender_id" class="form-label text-light">Género</label>
                        <select name="gender_id" id="gender_id" class="form-select bg-dark text-light border-secondary @error('gender_id') is-invalid @enderror" required>
                            <option value="">Seleccione un género</option>
                            @foreach ($genders as $gender)
                                <option value="{{ $gender->id }}" {{ old('gender_id', $superhero->gender_id) == $gender->id ? 'selected' : '' }}>
                                    {{ $gender->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('gender_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-warning">Actualizar</button>
                        <a href="{{ route('superheroes.index') }}" class="btn btn-secondary ms-2">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>