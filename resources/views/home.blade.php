@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenue {{ Auth::user()->first_name}} </h1>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

    </div>
</div>

</div>
@endsection