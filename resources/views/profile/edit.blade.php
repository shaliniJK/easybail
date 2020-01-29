@extends('layouts.app')

@section('content')
<div class="row">

    <form class="card">
        <div class="card-body">
            <h3 class="card-title">Edit Profile</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Address email</label>
                        <input type="email" class="form-control" placeholder={{ $user-> email}} value={{ $user-> email}}>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Prenom</label>
                        <input type="text" class="form-control" placeholder={{ $user-> first_name}} value={{ $user-> first_name}}>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label">Nom</label>
                        <input type="text" class="form-control" placeholder={{ $user-> last_name}} value={{ $user-> last_name}}>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label class="form-label">Ville</label>
                        <input type="text" class="form-control" placeholder="City" value="Melbourne">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <label class="form-label">Code Postal</label>
                        <input type="number" class="form-control" placeholder="ZIP Code">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label class="form-label">Country</label>
                        <select class="form-control custom-select">
                            <option value="">Germany</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="card-footer text-right">
                <button type="submit" class="btn btn-primary">Update Profile</button>
            </div>
    </form>
</div>
</div>
@endsection