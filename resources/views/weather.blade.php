@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Weather in Bogota</h1>
    
    @if (isset($weather['main']))
        <p>Temperature: {{ $weather['main']['temp'] }}°C</p>
        <p>Humidity: {{ $weather['main']['humidity'] }}%</p>
    @else
        <p>Weather data not available.</p>
    @endif
</div>
@endsection
