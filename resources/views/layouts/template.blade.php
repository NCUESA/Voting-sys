<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">


    <title>NCUESA-CVS</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">國立彰化師範大學學生會 投票系統</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
-->
                </ul>

                <form class="d-flex" role="search">

                    <input class="form-control me-2" type="search" placeholder="輸入會議代碼" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">加入會議</button>
                    <button class="btn btn-outline-info" type="submit">登入</button>
                </form>

            </div>
        </div>
    </nav>

    @if (!request()->is('meeting*'))
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="alert alert-primary" role="alert" style="margin: 1rem;">
                        <h1 style="text-align: center;">國立彰化師範大學學生會 投票系統</h1>
                        <h2 style="text-align: center;">National Chaunghua University Student Association Voting System</h2>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <div class="container">
        @yield('content')
    </div>





    <!-- Script Area-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/' . $js_name . '.js') }}"></script>

</body>

</html>