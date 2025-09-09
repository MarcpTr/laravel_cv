# Laravel CV Web

Este es un proyecto web desarrollado con **Laravel** que funciona como una página personal de **Currículum Vitae (CV)**. Muestra tus datos profesionales, habilidades y experiencia, y permite a los visitantes enviarte mensajes mediante un formulario de contacto.

## ✨ Características

- 🔧 Backend en Laravel
- 🎨 Plantillas Blade para el frontend
- 📄 Datos personales gestionados desde un archivo PHP
- 📬 Formulario de contacto con envío por `fetch()`
- 🔐 Panel de administración protegido por un **login personalizado**
- ✅ Middleware para autenticación de administrador
- 💾 Contactos recibidos visibles en el panel de control

## 🚀 Instalación

1. Clona este repositorio:

   ```bash
   git clone https://github.com/MarcpTr/laravel_cv.git
   cd laravel_cv
2. Instala las dependencias:
    ```bash
   composer install
   npm install && npm run dev
3. Copia el archivo .env y configura las variables necesarias:
    ```bash
    cp .env.example .env
    php artisan key:generate
4. Define tu email y contraseña de admin en .env:
    ```bash
    ADMIN_EMAIL=admin@ejemplo.com
    ADMIN_PASSWORD=tu_contraseña_segura
## 🔐 Login Personalizado para Admin

El sistema de autenticación de administrador es personalizado, sin usar Laravel Breeze o Jetstream.
```bash
    public function login(Request $request)
    {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $adminEmail = env('ADMIN_EMAIL');
    $adminPassword = env('ADMIN_PASSWORD');

    if ($request->email === $adminEmail && $request->password === $adminPassword) {
        Session::put('admin_logged_in', true);
        return redirect()->route('admin.contacts');
    }
    return back()->withErrors(['email' => 'Credenciales incorrectas']);
    }
```

## Middleware de Autenticación
El middleware admin.auth protege las rutas del panel:
 ```bash
    bootstrap\app.php
    ->withMiddleware(function (Middleware $middleware): void {
          $middleware->alias([
        'admin.auth' => \App\Http\Middleware\AdminAuth::class,
    ]);
    })

    app\Http\Middleware\AdminAuth.php
        class AdminAuth
    {
         public function handle(Request $request, Closure $next)
        {
            if (!Session::get('admin_logged_in')) {
                return redirect()->route('login');
        }
        return $next($request);
        }
    }

    
