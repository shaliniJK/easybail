@extends('layouts.app')

@section('content')
    <div>
        <p>Showing one property</p>
        <p>Addresse : {{ $property->address }}</p>
        <p>Size : {{ $property->size }} m2</p>
    </div>
@endsection