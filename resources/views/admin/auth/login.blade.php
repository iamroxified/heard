<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | Heard In Africa</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700,800" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-dark text-white">
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="w-full max-w-md rounded-2xl border border-white/10 bg-white/5 p-8 shadow-2xl">
            <p class="text-xs uppercase tracking-[0.35em] text-gold">Admin Access</p>
            <h1 class="mt-3 text-3xl font-bold">Heard In Africa</h1>
            <p class="mt-2 text-sm text-gray-300">Sign in to manage speakers, events, blog posts, enquiries, and settings.</p>

            <form method="POST" action="{{ route('admin.login.store') }}" class="mt-8 space-y-5">
                @csrf
                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-200">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="w-full rounded-lg border border-white/10 bg-white/10 px-4 py-3 text-white placeholder-gray-400 focus:border-gold focus:outline-none" required>
                </div>
                <div>
                    <label class="mb-2 block text-sm font-medium text-gray-200">Password</label>
                    <input type="password" name="password" class="w-full rounded-lg border border-white/10 bg-white/10 px-4 py-3 text-white placeholder-gray-400 focus:border-gold focus:outline-none" required>
                </div>
                <button type="submit" class="w-full rounded-lg bg-gold px-4 py-3 font-bold text-dark transition-colors hover:bg-white">
                    Sign In
                </button>
            </form>
        </div>
    </div>
</body>
</html>
