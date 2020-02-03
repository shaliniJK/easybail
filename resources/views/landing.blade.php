<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="robots" content="noindex, nofollow" />
    <meta name="description" content="Easy Bail">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Language" content="en" />
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#4188c9">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <title>{{ config('app.name', 'EasyBail') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('/css/landing.css') }}" rel="stylesheet" />
</head>

<body>
    <!-- banner -->
    <div class="jumbotron jumbotron-fluid" id="banner">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="img/logo.png" alt="logo">
                    </div>
                    <div class="col-6 align-self-center text-right">
                        <a href="{{ route('login') }}" class="text-white lead">Se connecter</a>
                    </div>
                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
                Easy Bail
            </h1>
            <p data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="lead text-white my-4">
                Vous avez investi dans un bien immobilier que vous louez ou gérez vous-même ? <br>
                Easy Bail est la solution de gestion locative.
            </p>
            <a href="{{ route('register') }}" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Créer un compte</a>
        </div>
    </div>
    <!-- three-blcok -->
    <div class="container my-5 py-2">
        <h3 class="text-center font-weight-bold my-5">Une meilleure gestion pour plus de bénéfices. <br>
            Avec Easybail la gestion locative n’a jamais été aussi simple.</h3>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <h4>Editez vos beaux et vos états des lieux</h4>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <h4>Transmettez vos quittances de loyers</h4>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">

                <h4>Suivez vos paiements et vos avis d’échéance</h4>

            </div>
        </div>

    </div>
    <div class="jumbotron jumbotron-fluid feature" id="feature-first">

        <!-- contact -->
        <div class="jumbotron jumbotron-fluid" id="contact" style="background-image: url(img/contact-bk.jpg);">
            <div class="container my-5">
                <div class="row justify-content-between">
                    <div class="col-md-6 text-white">
                        <h2 class="font-weight-bold">Contacter nous</h2>
                        <ul class="list-unstyled">
                            <li>Email : company_email@com</li>
                            <li>Numéro de télèphone : 361-688-5824</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- copyright -->
        <div class="jumbotron jumbotron-fluid" id="copyright">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                        Copyright © {{ now()->format('Y') }} <a href="/">EasyBail</a> All rights reserved.
                    </div>
                    <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">
                        <a href="#" class="d-inline-block text-center ml-2">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="d-inline-block text-center ml-2">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>