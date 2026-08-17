<!doctype html>
<html lang="es" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Marc Pericot | Backend Developer</title>

    <meta
        name="description"
        content="Portfolio de Marc Pericot, Desarrollador Backend especializado en Spring Boot, APIs escalables y bases de datos."
    >

    <meta property="og:title" content="Marc Pericot | Backend Developer" />
    <meta
        property="og:description"
        content="Portfolio de Marc Pericot, Desarrollador Backend especializado en Spring Boot, APIs escalables y bases de datos."
    />
    <meta property="og:image" content="https://marcpericot.es/images/cabecera.jpg" />
    <meta property="og:url" content="https://marcpericot.es/" />
    <meta property="og:type" content="website" />

    <link rel="icon" href="resources/icons/user.svg" />

    <link
        href="https://fonts.bunny.net/css?family=instrument-sans:400,600,700"
        rel="stylesheet"
    >

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    
</head>

<body class="text-slate-300 selection:bg-pink-500/30 selection:text-pink-200">

  <header class="fixed w-full top-0 bg-slate-950/80 backdrop-blur-md border-b border-slate-800/50 z-50">
    <nav class="max-w-6xl mx-auto flex justify-between items-center p-4">
      <a href="#" class="text-white font-bold text-lg tracking-tight hover:text-pink-400 transition-colors">
        Marc Pericot <span class="text-pink-500 text-xs uppercase tracking-widest ml-2 hidden sm:inline">Dev</span>
      </a>

      <div class="hidden md:flex space-x-8 text-sm font-medium">
        <a href="#about" class="hover:text-pink-400 transition-colors">Sobre mí</a>
        <a href="#projects" class="hover:text-pink-400 transition-colors">Proyectos</a>
        <a href="#stack" class="hover:text-pink-400 transition-colors">Tecnologías</a>
        <a href="#contact" class="hover:text-pink-400 transition-colors">Contacto</a>
      </div>

      <a href="mailto:marcphtr@gmail.com" class="md:hidden text-pink-400 font-bold">Contacto</a>
    </nav>
  </header>

  <main>
    <section id="about" class="relative min-h-[60vh] flex flex-col justify-center px-6 max-w-6xl mx-auto pt-20">
      <div class="hero-glow"></div>

      <div class="fade-in" data-delay="0">
        <span
          class="inline-block py-1 px-3 rounded-full bg-pink-500/10 text-pink-500 text-xs font-bold mb-6 border border-pink-500/20">
          Disponible para nuevos retos
        </span>
        <h1 class="text-5xl md:text-7xl font-bold text-white leading-[1.1] mb-6">
          Desarrollador Backend Java<br>
          <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-rose-400">
            Spring Boot & APIs REST
          </span>
        </h1>

        <p class="text-lg md:text-xl text-slate-400 max-w-2xl leading-relaxed">
          Especializado en arquitecturas sólidas con <strong class="text-slate-200">Spring Boot</strong> y
          desarrollo frontend con <strong class="text-slate-200">React</strong>.
         </p>

        <div class="flex flex-wrap gap-6 mt-10 items-center">
          <a href="#projects"
            class="bg-pink-600 px-8 py-4 rounded-xl text-white font-bold hover:bg-pink-700 hover:-translate-y-1 transition-all shadow-lg shadow-pink-500/20">
            Explorar proyectos
          </a>
          <div class="flex gap-5 items-center grayscale hover:grayscale-0 transition-all">
            <a href="https://marcpericot.es/docs/Marc_Pericot_Full_Stack_Developer_CV.pdf" target="_blank"
              aria-label="CV">
              <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24" fill="#000" />
                <path fill="#fff" fill-rule="evenodd" clip-rule="evenodd"
                  d="M3 24h19v-23h-1v22h-18v1zm17-24h-18v22h18v-22zm-1 1h-16v20h16v-20zm-2 16h-12v1h12v-1zm0-3h-12v1h12v-1zm0-3h-12v1h12v-1zm-7.348-3.863l.948.3c-.145.529-.387.922-.725 1.178-.338.257-.767.385-1.287.385-.643 0-1.171-.22-1.585-.659-.414-.439-.621-1.04-.621-1.802 0-.806.208-1.432.624-1.878.416-.446.963-.669 1.642-.669.592 0 1.073.175 1.443.525.221.207.386.505.496.892l-.968.231c-.057-.251-.177-.449-.358-.594-.182-.146-.403-.218-.663-.218-.359 0-.65.129-.874.386-.223.258-.335.675-.335 1.252 0 .613.11 1.049.331 1.308.22.26.506.39.858.39.26 0 .484-.082.671-.248.187-.165.322-.425.403-.779zm3.023 1.78l-1.731-4.842h1.06l1.226 3.584 1.186-3.584h1.037l-1.734 4.842h-1.044z" />
              </svg>

            </a>
            <a href="https://github.com/MarcpTr" target="_blank" aria-label="GitHub">
              <svg class="w-6 h-6 fill-current hover:text-white" viewBox="0 0 24 24">
                <path
                  d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
              </svg>
            </a>
            <a href="https://www.linkedin.com/in/marc-pericot-hinojosa/" target="_blank" aria-label="LinkedIn">
              <svg class="w-6 h-6 fill-current hover:text-white" viewBox="0 0 24 24">
                <path
                  d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="max-w-6xl mx-auto px-6 py-20">
      <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-8">
        <div class="glass-card p-8 rounded-2xl text-center fade-in">
          <p class="text-4xl font-bold text-white mb-2">+5</p>
          <p class="text-sm text-slate-500 uppercase tracking-widest font-semibold">Proyectos</p>
        </div>
        <div class="glass-card p-8 rounded-2xl text-center fade-in">
          <p class="text-4xl font-bold text-white mb-2">JWT</p>
          <p class="text-sm text-slate-500 uppercase tracking-widest font-semibold">Auth Pro</p>
        </div>
        <div class="glass-card p-8 rounded-2xl text-center fade-in">
          <p class="text-4xl font-bold text-white mb-2">Full</p>
          <p class="text-sm text-slate-500 uppercase tracking-widest font-semibold">Stack</p>
        </div>
      </div>
    </section>
    <section id="projects" class="max-w-6xl mx-auto px-6 py-20">
      <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
        <div class="fade-in">
          <h2 class="text-4xl font-bold text-white">Proyectos destacados</h2>
          <p class="text-slate-400 mt-2">Soluciones reales de ingeniería de software.</p>
        </div>
      </div>

      <div class="grid md:grid-cols-2 gap-10">
        <article class="glass-card rounded-3xl overflow-hidden group fade-in">
          <div class="relative overflow-hidden">
            <img src="https://marcpericot.es/images/projects/jwt.webp" alt="JWT Auth API"
              class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
          </div>
          <div class="p-8">
            <h3 class="text-2xl font-bold text-white mb-3">JWT Auth API</h3>
            <p class="text-slate-400 mb-6 leading-relaxed">
              Base robusta para Api Rest con autenticación stateless, manejo de roles y seguridad avanzada.
            </p>
            <div class="flex flex-wrap gap-2 mb-8">
              <span class="text-xs font-semibold px-3 py-1 bg-slate-800 text-slate-300 rounded-full">Spring Boot</span>
              <span class="text-xs font-semibold px-3 py-1 bg-slate-800 text-slate-300 rounded-full">Spring Security</span>
              <span class="text-xs font-semibold px-3 py-1 bg-slate-800 text-slate-300 rounded-full">MariaDB</span>
            </div>
            <div class="flex gap-4">
              <a href="https://api-playground.marcpericot.es/" target="_blank"
                class="flex-1 text-center bg-pink-600 text-white text-slate-950 py-3 rounded-xl font-bold hover:bg-pink-400 transition-colors">Demo</a>
              <a href="https://github.com/MarcpTr/SpringBoot-JWT-Template" target="_blank"
                class="flex-1 text-center border border-slate-700 py-3 rounded-xl font-bold hover:bg-slate-800 transition-colors">Código</a>
            </div>
          </div>
        </article>

        <article class="glass-card rounded-3xl overflow-hidden group fade-in">
          <div class="relative overflow-hidden">
            <img src="https://marcpericot.es/images/projects/tweet-manager.webp" alt="Tweet Manager"
              class="w-full h-64 object-cover transition-transform duration-500 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-transparent"></div>
          </div>
          <div class="p-8">
            <h3 class="text-2xl font-bold text-white mb-3">Tweet Manager</h3>
            <p class="text-slate-400 mb-6 leading-relaxed">
              Web para organizar tweets en colecciones personalizadas y compartirlas de forma pública o privada con otros usuarios.
            </p>
            <div class="flex flex-wrap gap-2 mb-8">
              <span class="text-xs font-semibold px-3 py-1 bg-slate-800 text-slate-300 rounded-full">Spring Boot</span>
              <span class="text-xs font-semibold px-3 py-1 bg-slate-800 text-slate-300 rounded-full">Spring Security</span>
              <span class="text-xs font-semibold px-3 py-1 bg-slate-800 text-slate-300 rounded-full">MariaDB</span>
            </div>
            <div class="flex gap-4">
              <a href="https://tweet-manager.marcpericot.es/" target="_blank"
                class="flex-1 text-center bg-pink-600 text-white text-slate-950 py-3 rounded-xl font-bold hover:bg-pink-400 transition-colors">Demo</a>
              <a href="https://github.com/MarcpTr/SpringBootTweetArchive" target="_blank"
                class="flex-1 text-center border border-slate-700 py-3 rounded-xl font-bold hover:bg-slate-800 transition-colors">Código</a>
            </div>
          </div>
        </article>
      </div>
    </section>
    <section id="more-projects" class="max-w-6xl mx-auto px-6 pb-10 fade-in">
      <h2 class="text-3xl font-bold text-white text-center">
        Otros proyectos
      </h2>

      <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-6 mt-10">


        <div
          class="bg-gray-900 p-4 rounded-xl border border-gray-800 hover:border-pink-500/40 hover:-translate-y-1 transition">
          <h3 class="text-lg font-semibold text-white">Password Generator</h3>

          <p class="text-sm text-gray-400 mt-2">
            Genera contraseñas seguras.
          </p>

          <p class="text-xs text-gray-500 mt-2">
            React · Javascript · Tailwind
          </p>

          <div class="flex gap-2 mt-3 text-sm">
            <a href="https://password-generator.marcpericot.es/" class="text-pink-400 hover:underline">Demo</a>
            <a href="https://github.com/MarcpTr/PasswordGenerator" class="text-gray-400 hover:underline">Código</a>
          </div>
        </div>


        <div
          class="bg-gray-900 p-4 rounded-xl border border-gray-800 hover:border-pink-500/40 hover:-translate-y-1 transition">
          <h3 class="text-lg font-semibold text-white">Cine React
          </h3>

          <p class="text-sm text-gray-400 mt-2">
            Descubre nuevas peliculas y gestiona tus favoritas.
          </p>

          <p class="text-xs text-gray-500 mt-2">
            React · Firebase · Tailwind
          </p>
          <div class="flex gap-2 mt-3 text-sm">
            <a href="https://cine-react.marcpericot.es/" class="text-pink-400 hover:underline">Demo</a>
            <a href="https://github.com/MarcpTr/cine-react" class="text-gray-400 hover:underline">Código</a>
          </div>
        </div>

        <div
          class="bg-gray-900 p-4 rounded-xl border border-gray-800 hover:border-pink-500/40 hover:-translate-y-1 transition">
          <h3 class="text-lg font-semibold text-white">Text analyzer</h3>

          <p class="text-sm text-gray-400 mt-2">
            Ofrece métricas útiles de un texto.
          </p>

          <p class="text-xs text-gray-500 mt-2">
            React · Javascript · Vite
          </p>
          <div class="flex gap-2 mt-3 text-sm">
            <a href="https://text-analyzer.marcpericot.es/" class="text-pink-400 hover:underline">Demo</a>
            <a href="https://github.com/MarcpTr/text-analyzer" class="text-gray-400 hover:underline">Código</a>
          </div>
        </div>

        <div
          class="bg-gray-900 p-4 rounded-xl border border-gray-800 hover:border-pink-500/40 hover:-translate-y-1 transition">
          <h3 class="text-lg font-semibold text-white">Quiz time</h3>

          <p class="text-sm text-gray-400 mt-2">
            La aplicación te permite realizar trivia y ver tus resultados.
          </p>

          <p class="text-xs text-gray-500 mt-2">
            Laravel · Mysql · MVC
          </p>
          <div class="flex gap-2 mt-3 text-sm">
            <a href="https://quiztime.marcpericot.es/" class="text-pink-400 hover:underline">Demo</a>
            <a href="https://github.com/MarcpTr/Laravel_quiz" class="text-gray-400 hover:underline">Código</a>
          </div>
        </div>
    </section>
    <section id="stack" class="py-20 ">
      <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-white text-center mb-16 fade-in">Tecnologías</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
          <div
            class="glass-card p-6 rounded-2xl flex flex-col items-center gap-3 hover:border-pink-500/50 transition-colors fade-in">
            <span class="font-bold text-white">Java</span>
          </div>
          <div
            class="glass-card p-6 rounded-2xl flex flex-col items-center gap-3 hover:border-pink-500/50 transition-colors fade-in">
            <span class="font-bold text-white">Spring</span>
          </div>
          <div
            class="glass-card p-6 rounded-2xl flex flex-col items-center gap-3 hover:border-pink-500/50 transition-colors fade-in">
            <span class="font-bold text-white">MariaDB</span>
          </div>
          <div
            class="glass-card p-6 rounded-2xl flex flex-col items-center gap-3 hover:border-pink-500/50 transition-colors fade-in">
            <span class="font-bold text-white">Tailwind</span>
          </div>
          <div
            class="glass-card p-6 rounded-2xl flex flex-col items-center gap-3 hover:border-pink-500/50 transition-colors fade-in">
            <span class="font-bold text-white">Git</span>
          </div>
          <div
            class="glass-card p-6 rounded-2xl flex flex-col items-center gap-3 hover:border-pink-500/50 transition-colors fade-in">
            <span class="font-bold text-white">React</span>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="max-w-4xl mx-auto px-6 py-20">
      <div class="glass-card p-8 md:p-12 rounded-[2rem] border-pink-500/10 fade-in">
        <div class="text-center mb-10">
          <h2 class="text-4xl font-bold text-white mb-4">Contacto profesional</h2>
          <p class="text-slate-400">Si deseas programar una entrevista o solicitar información adicional sobre mi perfil
            profesional, puedes utilizar este canal</p>
        </div>

       <form
    id="contact-form"
    class="grid md:grid-cols-2 gap-6"
    data-contact-url="{{ route('contact.store') }}"
>
    @csrf
          <div class="space-y-2">
            <label class="text-sm font-semibold text-slate-300 ml-1">Nombre</label>
            <input type="text" name="name" placeholder="Tu nombre" required
              class="w-full bg-slate-900/50 border border-slate-700 p-4 rounded-xl focus:outline-none focus:border-pink-500 focus:ring-1 focus:ring-pink-500 transition-all">
          </div>
          <div class="space-y-2">
            <label class="text-sm font-semibold text-slate-300 ml-1">Email</label>
            <input type="email" name="email" placeholder="hola@ejemplo.com" required
              class="w-full bg-slate-900/50 border border-slate-700 p-4 rounded-xl focus:outline-none focus:border-pink-500 focus:ring-1 focus:ring-pink-500 transition-all">
          </div>
          <div class="space-y-2 md:col-span-2">
            <label class="text-sm font-semibold text-slate-300 ml-1">Mensaje</label>
            <textarea name="message" rows="4" placeholder="¿En qué puedo ayudarte?" required
              class="w-full bg-slate-900/50 border border-slate-700 p-4 rounded-xl focus:outline-none focus:border-pink-500 focus:ring-1 focus:ring-pink-500 transition-all"></textarea>
          </div>

          <button id="btn"
            class="md:col-span-2 bg-pink-600 py-4 rounded-xl text-white font-bold hover:bg-pink-700 transition-all flex justify-center items-center gap-2 group">
            <span>Enviar mensaje</span>
            <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </button>
        </form>
        <p id="respuesta" class="text-center mt-6 font-medium"></p>
      </div>
    </section>
  </main>

  <!--  <footer class="text-center py-12 border-t border-slate-900">
    <p class="text-slate-500 text-sm">© 2026 Marc Pericot</p>
  </footer> -->

 
</body>

</html>