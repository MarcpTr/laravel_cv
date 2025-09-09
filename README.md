# Laravel CV

This is a web project developed with Laravel that functions as a personal **Curriculum Vitae (CV) page**. It displays your professional information, skills, and experience, and allows visitors to send you messages through a contact form.

## ✨ Features

- 🔧 Backend built with Laravel
- 🎨 Blade templates for the frontend
- 📄 Personal data managed from a PHP file
- 📬 Contact form with submission via fetch()
- 🔐 Admin panel protected by a custom login
- ✅Middleware for admin authentication
- 💾Received messages visible in the control panel

## 🚀 Installation

1. Clone this repository:

   ```bash
   git clone https://github.com/MarcpTr/laravel_cv.git
   cd laravel_cv
2. Install the dependencies:
    ```bash
   composer install
   npm install && npm run dev
3. Copy the .env file and configure the necessary variables:
    ```bash
    cp .env.example .env
    php artisan key:generate
4. Set your admin email and password in the .env file:
    ```bash
    ADMIN_EMAIL=admin@ejemplo.com
    ADMIN_PASSWORD=tu_contraseña_segura
## 🔐 Custom Admin Login

The admin authentication system is custom-built, without using Laravel Breeze or Jetstream.
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

## Authentication Middleware
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

    
