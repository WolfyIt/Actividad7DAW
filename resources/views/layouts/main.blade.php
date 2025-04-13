<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Superhéroes App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos generales */
        body {
            min-height: 100vh;
        }

        /* Estilos de tarjetas */
        .entity-card { 
            background-color: #212529; 
            border: 1px solid #495057; 
            border-radius: 10px; 
            transition: all 0.3s ease;
            padding: 1.5rem;
            margin-bottom: 1rem;
        }
        .entity-card:hover { 
            border-color: #0dcaf0; 
            box-shadow: 0 4px 15px rgba(13, 202, 240, 0.3); 
            transform: translateY(-2px);
        }
        .card-title { 
            color: #fff; 
            font-weight: bold;
            margin-bottom: 1rem;
        }
        .card-text { 
            color: #ced4da; 
            line-height: 1.6;
        }

        /* Estilos de formularios */
        .form-card {
            background-color: #212529;
            border: 1px solid #495057;
            border-radius: 10px;
            padding: 2rem;
            margin-bottom: 2rem;
        }
        .form-control, .form-select {
            background-color: #2b3035 !important;
            border-color: #495057 !important;
            color: #ced4da !important;
            transition: all 0.3s ease;
        }
        .form-control:focus, .form-select:focus {
            border-color: #0dcaf0 !important;
            box-shadow: 0 0 0 0.25rem rgba(13, 202, 240, 0.25) !important;
        }
        .form-label {
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        /* Estilos de botones */
        .btn {
            padding: 0.5rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .btn-action { 
            margin: 0 5px; 
        }
        .btn-primary {
            background-color: #0dcaf0;
            border-color: #0dcaf0;
        }
        .btn-primary:hover {
            background-color: #0bacce;
            border-color: #0bacce;
            transform: translateY(-1px);
        }

        /* Estilos de alertas */
        .alert {
            border-radius: 10px;
            margin-bottom: 2rem;
        }
        .alert-danger {
            background-color: #2c1215;
            border-color: #842029;
            color: #ea868f;
        }
    </style>
</head>
<body class="bg-dark text-light">
    <div class="container py-5">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>