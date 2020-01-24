@extends('layouts.app')

@section('content')

<div class="container">
    <h1>Bienvenue {{ $user->first_name}} </h1>

    <div class="row row-cards">
        <div class="col-md-3 col-sm-6">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-blue mr-3">
                        <i class="fa fa-eur"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">132 <small>Sales</small></a></h4>
                        <small class="text-muted">12 waiting payments</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-green mr-3">
                        <i class="fa fa-shopping-bag"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">78 <small>Orders</small></a></h4>
                        <small class="text-muted">32 shipped</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-red mr-3">
                        <i class="fa fa-user"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">1,352 <small>Members</small></a></h4>
                        <small class="text-muted">163 registered today</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="card p-3">
                <div class="d-flex align-items-center">
                    <span class="stamp stamp-md bg-yellow mr-3">
                        <i class="fa fa-comments"></i>
                    </span>
                    <div>
                        <h4 class="m-0"><a href="javascript:void(0)">132 <small>Comments</small></a></h4>
                        <small class="text-muted">16 waiting</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Mes Paiements</h3>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable">
                        <thead>
                            <tr>
                                <th class="w-1">No.</th>
                                <th>Biens</th>
                                <th>Locataire</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Montant</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="text-muted">001401</span></td>
                                <td><a href="invoice.html" class="text-inherit">Design Works</a></td>
                                <td>
                                    Carlson Limited
                                </td>
                                <td>
                                    15 Dec 2017
                                </td>
                                <td>
                                    <span class="status-icon bg-success"></span> Paid
                                </td>
                                <td>$887</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="text-muted">001402</span></td>
                                <td><a href="invoice.html" class="text-inherit">UX Wireframes</a></td>
                                <td>
                                    Adobe
                                </td>
                                <td>
                                    12 Apr 2017
                                </td>
                                <td>
                                    <span class="status-icon bg-warning"></span> Pending
                                </td>
                                <td>$1200</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="text-muted">001406</span></td>
                                <td><a href="invoice.html" class="text-inherit">Sales Presentation</a></td>
                                <td>
                                    Tabdaq
                                </td>
                                <td>
                                    4 Feb 2018
                                </td>
                                <td>
                                    <span class="status-icon bg-secondary"></span> Due in 3 Weeks
                                </td>
                                <td>$300</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="text-muted">001408</span></td>
                                <td><a href="invoice.html" class="text-inherit">Icons</a></td>
                                <td>
                                    Tookapic
                                </td>
                                <td>
                                    13 May 2018
                                </td>
                                <td>
                                    <span class="status-icon bg-success"></span> Paid Today
                                </td>
                                <td>$940</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="text-muted">001409</span></td>
                                <td><a href="invoice.html" class="text-inherit">Design Works</a></td>
                                <td>
                                    Carlson Limited
                                </td>
                                <td>
                                    15 Dec 2017
                                </td>
                                <td>
                                    <span class="status-icon bg-success"></span> Paid
                                </td>
                                <td>$887</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="text-muted">001411</span></td>
                                <td><a href="invoice.html" class="text-inherit">New Dashboard</a></td>
                                <td>
                                    Bluewolf
                                </td>
                                <td>
                                    23 Oct 2017
                                </td>
                                <td>
                                    <span class="status-icon bg-warning"></span> Pending
                                </td>
                                <td>$534</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="text-muted">001412</span></td>
                                <td><a href="invoice.html" class="text-inherit">Landing Page</a></td>
                                <td>
                                    Salesforce
                                </td>
                                <td>
                                    2 Sep 2017
                                </td>
                                <td>
                                    <span class="status-icon bg-secondary"></span> Due in 2 Weeks
                                </td>
                                <td>$1500</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="text-muted">001413</span></td>
                                <td><a href="invoice.html" class="text-inherit">Marketing Templates</a></td>
                                <td>
                                    Printic
                                </td>
                                <td>
                                    29 Jan 2018
                                </td>
                                <td>
                                    <span class="status-icon bg-danger"></span> Paid Today
                                </td>
                                <td>$648</td>
                                <td class="text-right">
                                    <a href="javascript:void(0)" class="btn btn-secondary btn-sm">Manage</a>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary btn-sm dropdown-toggle" data-toggle="dropdown">Actions</button>
                                    </div>
                                </td>
                                <td>
                                    <a class="icon" href="javascript:void(0)">
                                        <i class="fe fe-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <script>
                        require(['datatables', 'jquery'], function(datatable, $) {
                            $('.datatable').DataTable();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>



</div>
@endsection