@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenue {{ Auth::user()->first_name}} </h1>
    <div class="row">
        <div class="col s6">
            <ul class="collection with-header">
                <li class="collection-header">
                    <h4>Mes biens</h4>
                </li>

                <li class="collection-item avatar">
                    <img src="images/yuna.jpg" alt="" class="circle">
                    <span class="title">Title</span>
                    <p>First Line <br>
                        Second Line
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle">folder</i>
                    <span class="title">Title</span>
                    <p>First Line <br>
                        Second Line
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle green">insert_chart</i>
                    <span class="title">Title</span>
                    <p>First Line <br>
                        Second Line
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle red">play_arrow</i>
                    <span class="title">Title</span>
                    <p>First Line <br>
                        Second Line
                    </p>
                    <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                </li>
            </ul>
            <a href="{{ route('properties') }}">Voir tous mes biens</a>
        </div>

        <div class="col s6">
            <ul class="collection with-header">
                <li class="collection-header">
                    <h4>Mes locations</h4>
                </li>
                <li class="collection-item">Appartement 9, 93 rue d'Isly</li>
                <li class="collection-item">Appartement 9, 93 rue d'Isly</li>
                <li class="collection-item">Appartement 9, 93 rue d'Isly</li>
                <li class="collection-item">Appartement 9, 93 rue d'Isly</li>
            </ul>
        </div>
    </div>
</div>

</div>
@endsection