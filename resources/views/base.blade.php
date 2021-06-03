<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', config('app.name'))</title>

        <!-- Fonts -->
        

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <!-- Styles -->
        

        
    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
        <main role='main' class="flex flex-col items-center justify-center">
            
          @yield('content')
        
        {{config('project.slogan')}}  
        </main>
        
        
        <footer>
            <p class="text-gray-400">&copy; Copyright {{date('Y')}} &middot; 
                
                @if(! Route::is('nous'))
                <a href="{{ route('nous') }}" class="text-indigo-500 hover:text-indigo-600 underline">Qui Sommes Nous</a>
@endif
            
            </p>
            
        </footer>
        
    </body>
</html>

