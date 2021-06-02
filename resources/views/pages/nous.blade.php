<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>A Propos de Nous|Hello City</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        

        
    </head>
    <body >
        
        <h1> Qui Sommes Nous !</h1>
        
        <p>L'Heure actuellement est : {{date('H:i')}}.</p>
        
        
        <p><a href="/">Retour page Accueil</a></p>
        
        
        <footer>
            <p>&copy; Copyright {{date('Y')}} &middot; </p>
            
        </footer>
        
    </body>
</html>
