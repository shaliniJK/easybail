@extends('layouts.app')

@section('content')
{{-- <div class="page-header">
    <h1 class="page-title">
        Mes Informations
    </h1>
</div> --}}
<div class="row">
    <div class="col-lg-3 order-lg-1 mb-4">
        <a href="{{ route('profile.edit') }}" class="btn btn-block btn-primary mb-6">
            Modifier
        </a>
    </div>
    <div class="col-lg-9">
        @include('partials.alerts')
        <div class="col">
            <div class="card">
                <div class="card-status card-status-top bg-blue"></div>
                <div class="card-header">
                    <span class="avatar avatar-blue">{{ $user->initials() }}</span>
                    <h3 class="card-title col-6">Mes Informations</h3>
                </div>
                <div class="card-body">
                    <div class="col col-sm-6 col-md-4">
                        <h4 >{{ $user->fullName() }}</h4>
                        <p class="text-muted">{{ $user-> email}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection