<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="José Eduardo Lopes de Souza">
    <meta name="generator" content="Jos3duardo v1.0.0">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"  crossorigin="anonymous">
    <link href="{{asset('css/dashboard.css')}}" rel="stylesheet" >

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/dashboard/">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <title>Dashboard Template · Bootstrap</title>
</head>
<body>
@include('layout.navbar')
<div class="container-fluid">
    <div class="row">
    @include('layout.sidebar')
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        @yield('content')
        </main>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="{{asset('js/dashboard.js')}}"></script>

</body>
</html>
