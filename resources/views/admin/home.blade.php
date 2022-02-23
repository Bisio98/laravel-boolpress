@extends('layouts.dashboard')

@section('content')
    <section>
        <div class="container">
            <h1>Benvenuto {{ $user->name }}</h1>

            @if ($userInfo)
                <div>Telefono: {{ $userInfo->phone }}</div>
                <div>Indirizzo: {{ $userInfo->address }}</div>
            @endif
        </div>
    </section>
@endsection