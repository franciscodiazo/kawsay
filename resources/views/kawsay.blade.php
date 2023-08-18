@extends('layouts.app')

@section('content')
<div class="container">
    <h1>City Life Data</h1>
    
    <ul>
        @foreach ($data as $item)
            <li>{{ $item['campo'] }}</li> <!-- Actualiza con los campos reales de tus datos -->
        @endforeach
    </ul>
</div>
@endsection
