@extends('base')


@section('title', 'A Propos de Nous | ' . config('app.name'))



@section('content')
        
<h1 class="text-5xl text-semibold text-indigo-800"> Qui Sommes Nous !</h1>
        
        <p class="text-lg text-gray-500">L'Heure actuellement est : {{date('H:i')}}.</p>
        <img src="{{ asset('/img/Ofit.png') }}" class="rounded-0 h-40 shadow-sm"  alt="">
        
        <p><a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Retour page Accueil</a></p>
        
      
@endsection
