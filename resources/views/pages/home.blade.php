@extends('base')






@section('content')
        
        <h1> Hello City!</h1>
        
        <p>L'Heure actuellement est : {{date('H:i')}}.</p>     
        
@endsection

@section('links')
<a href="{{ route('nous') }}">Qui Sommes Nous</a>
@endsection