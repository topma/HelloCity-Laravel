@extends('base')


@section('title', 'A Propos de Nous | ' . config('app.name'))



@section('content')
        
        <h1> Qui Sommes Nous !</h1>
        
        <p>L'Heure actuellement est : {{date('H:i')}}.</p>
        
        
        <p><a href="{{ route('home') }}">Retour page Accueil</a></p>
        
      
@endsection
