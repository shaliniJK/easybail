@extends('layouts.app')

@section('content')
<div class="page-header">
    <h1 class="page-title">
        Mes Informations
    </h1>
</div>
<div class="row">
    <div class="col-lg-3 order-lg-1 mb-4">
        <a href="{{ route('profile.edit') }}" class="btn btn-block btn-primary mb-6">
            Modifier
        </a>
    </div>
    <div class="col-lg-9">
        @include('partials.alerts')
        <div class="card">
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-auto">
                            <span class="avatar avatar-blue">{{ $user->initials() }}</span>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label class="form-label">Email-Address</label>
                                <input class="form-control" placeholder="your-email@domain.com">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Bio</label>
                        <textarea class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email-Address</label>
                        <input class="form-control" placeholder="your-email@domain.com">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" value="password">
                    </div>
                    <div class="form-footer">
                        <button class="btn btn-primary btn-block">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection