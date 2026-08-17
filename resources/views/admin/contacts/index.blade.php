<!doctype html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Mensajes | Admin</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-950 text-slate-300">

    <header class="border-b border-slate-800 bg-slate-950">
        <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between gap-4">

            <div>
                <h1 class="text-xl font-bold text-white">
                    Panel de administración
                </h1>

                <p class="text-sm text-slate-500 mt-1">
                    Mensajes de contacto
                </p>
            </div>

            <div class="flex items-center gap-3">

                <a
                    href="{{ route('home') }}"
                    class="px-4 py-2 rounded-lg border border-slate-700
                           text-sm font-semibold hover:bg-slate-800
                           transition-colors"
                >
                    Portfolio
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="px-4 py-2 rounded-lg bg-pink-600
                               text-white text-sm font-semibold
                               hover:bg-pink-700 transition-colors"
                    >
                        Cerrar sesión
                    </button>
                </form>

            </div>

        </div>
    </header>


    <main class="max-w-7xl mx-auto px-6 py-10">

        <div class="mb-6">
            <h2 class="text-2xl font-bold text-white">
                Mensajes recibidos
            </h2>

            <p class="text-sm text-slate-500 mt-1">
                {{ $messages->total() }}
                {{ $messages->total() === 1 ? 'mensaje' : 'mensajes' }}
                en total
            </p>
        </div>


        @if ($messages->isEmpty())

            <div class="rounded-2xl border border-slate-800 bg-slate-900/50 p-10 text-center">
                <p class="text-slate-400">
                    No hay mensajes todavía.
                </p>
            </div>

        @else

            <div class="space-y-4">

                @foreach ($messages as $message)

                    <article
                        class="rounded-2xl border border-slate-800
                               bg-slate-900/60 p-6"
                    >

                        <div class="flex flex-col md:flex-row
                                    md:items-start md:justify-between
                                    gap-4 mb-5">

                            <div>
                                <h3 class="text-lg font-semibold text-white">
                                    {{ $message->name }}
                                </h3>

                                <a
                                    href="mailto:{{ $message->email }}"
                                    class="text-sm text-pink-400
                                           hover:text-pink-300
                                           transition-colors"
                                >
                                    {{ $message->email }}
                                </a>
                            </div>

                            <time
                                datetime="{{ $message->created_at->toIso8601String() }}"
                                class="text-sm text-slate-500 whitespace-nowrap"
                            >
                                {{ $message->created_at->format('d/m/Y H:i') }}
                            </time>

                        </div>

                        <div
                            class="border-t border-slate-800 pt-5
                                   text-slate-300 whitespace-pre-line
                                   leading-relaxed"
                        >
                            {{ $message->message }}
                        </div>

                    </article>

                @endforeach

            </div>


            <div class="mt-8">
                {{ $messages->links() }}
            </div>

        @endif

    </main>

</body>

</html>