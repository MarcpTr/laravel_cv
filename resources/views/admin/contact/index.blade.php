<!DOCTYPE html>
<html>

<head>
    <title>Dashboard Admin</title>
</head>

<body>
    <h1>Panel de Administración</h1>
    <div class="container">
        <h1>Mensajes de contacto</h1>

        @if ($messages->count())
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Mensaje</th>
                        <th>Enviado</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($messages as $message)
                        <tr>
                            <td>{{ $message->name }}</td>
                            <td><a href="mailto:{{ $message->email }}">{{ $message->email }}</a></td>
                            <td>{{ $message->message }}</td>
                            <td>{{ $message->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $messages->links() }}
        @else
            <p>No hay mensajes.</p>
        @endif
    </div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar sesión</button>
    </form>
</body>

</html>
