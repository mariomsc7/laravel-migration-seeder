@extends('layouts.main')

@section('content')
    <h1>DESTINATIONS</h1>

    @foreach ($destinations as $destination)
        <div>
            <h2>Meta: {{ $destination->country }}</h2>
            <h3>Citta: {{ $destination->city }}</h3>
            <h4>Resort: {{ $destination->resort }}</h4>
            <h5>Prezzo: {{ number_format($destination->price) }} Euro</h5>
            <p>Descrizione: {{ $destination->description }}</p>
            @if (! $loop->last)
                <hr>
            @endif
        </div>
    @endforeach
    
@endsection