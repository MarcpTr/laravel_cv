<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
</head>

<body>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Admin Panel</title>
    </head>

    <body>
        <h1>Panel de Administración</h1>

        @if (session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif

        {{-- HEADER --}}
        <h2>Nuevo Header</h2>
        <form method="POST" action="{{ route('admin.storeHeader') }}">
            @csrf
            <input name="title" placeholder="Título" required>
            <input name="subtitle" placeholder="Subtítulo">
            <label>Activo:</label><input type="checkbox" name="is_active" value="1" checked>
            <button type="submit">Guardar</button>
        </form>

        {{-- TECHNOLOGY --}}
        <h2>Nueva Technology</h2>
        <form method="POST" action="{{ route('admin.storeTechnology') }}" enctype="multipart/form-data">
            @csrf
            <input name="name" placeholder="Nombre" required>

            <label>Ícono (imagen):</label>
            <input type="file" name="icon" accept="image/*" required>

            <label>Activo:</label>
            <input type="checkbox" name="is_active" value="1" checked>

            <button type="submit">Guardar</button>
        </form>


        {{-- DESCRIPTION --}}
        <h2>Nueva Description</h2>
        <form method="POST" action="{{ route('admin.storeDescription') }}">
            @csrf
            <input name="description" placeholder="Descripción" required>
            <label>Activo:</label><input type="checkbox" name="is_active" value="1" checked>
            <button type="submit">Guardar</button>
        </form>

        {{-- URL --}}
        <h2>Nueva URL</h2>
        <form method="POST" action="{{ route('admin.storeUrl') }}">
            @csrf
            <input name="name" placeholder="Nombre" required>
            <input name="description" placeholder="Descripción">
            <input name="url" placeholder="https://ejemplo.com" required>
            <label>Activo:</label><input type="checkbox" name="is_active" value="1" checked>
            <button type="submit">Guardar</button>
        </form>

        {{-- PROJECT --}}
        <h2>Nuevo Proyecto</h2>
        <form method="POST" action="{{ route('admin.storeProject') }}" enctype="multipart/form-data">
            @csrf
            <input name="name" placeholder="Nombre" required>
            <input name="description" placeholder="Descripción">
            <input name="live_app_url" placeholder="URL de la App">
            <input name="github_url" placeholder="GitHub URL">

            <label>Imagen del Proyecto:</label>
            <input type="file" name="img" accept="image/*" required>

            <button type="submit">Guardar</button>
        </form>


        {{-- PROJECT - TECHNOLOGY --}}
        <h2>Relacionar Proyecto y Tecnología</h2>
        <form method="POST" action="{{ route('admin.storeProjectTechnology') }}">
            @csrf

            <label>Proyecto:</label>
            <select name="project_id" required>
                <option value="">-- Selecciona un proyecto --</option>
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>

            <label>Tecnología:</label>
            <select name="technologie_id" required>
                <option value="">-- Selecciona una tecnología --</option>
                @foreach ($technologies as $tech)
                    <option value="{{ $tech->id }}">{{ $tech->name }}</option>
                @endforeach
            </select>

            <button type="submit">Guardar</button>
        </form>

    </body>

    </html>

    <br>
    <br>
    <br>
    <br>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
</body>

</html>
