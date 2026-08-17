<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Acceso</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <main>
        <h1>Acceso de administrador</h1>

        @if ($errors->any())
            <div>
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email">Email</label>

                <input
                    id="email"
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    required
                    autofocus
                >
            </div>

            <div>
                <label for="password">Contraseña</label>

                <input
                    id="password"
                    type="password"
                    name="password"
                    required
                >
            </div>

            <button type="submit">
                Iniciar sesión
            </button>
        </form>
    </main>
</body>
</html>