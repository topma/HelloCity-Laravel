@extends('base')






@section('content')
        
<img src="{{ asset('/img/Ofit.png') }}" class="rounded-0 h-40 shadow-sm"  alt="">
        <h1 class="mt-4 text-5xl text-semibold text-indigo-800"> Hello City!</h1>
        
        <p class="text-lg text-gray-500">L'Heure actuellement <span class="text-pink-500">&hearts;</span> est : {{date('H:i')}}.</p>     
        
@endsection

