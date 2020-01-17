@extends('layouts.app')

@section('content')
    <p>Showing one property</p>
    <p>Addresse : {{ $property->address }}</p>
    <p>Type : {{ $property->type }}</p>
@endsection