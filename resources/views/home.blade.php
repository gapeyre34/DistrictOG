<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>DistrictOG</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Favicons -->
    <script src="https://kit.fontawesome.com/d0fa3504c1.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{{asset("imgs/favicon.png")}}" sizes="180x180">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


</head>
<body>

@include('layouts.header')

<main>

    <section class="py-5 text-center bg-secondary bg-opacity-10 m-0">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">DistrictOG Store</h1>
                <p class="lead text-muted">Découvrez l'univers de DistrictOG, un univers venant de tous les horizons. Trouvez votre bonheur sans plus tarder !</p>
            </div>
        </div>
    </section>

    @yield('content')

</main>

<footer class="text-muted py-5">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#">Back to top</a>
        </p>
        <p>DistrictOG</p>
    </div>
</footer>


<script src="{{asset("/js/bootstrap.bundle.min.js")}}"></script>


</body>
</html>
