<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/app.css">

    <title>Myrtle</title>
</head>
<body>
{{-- Navigation --}}
<nav class="navbar navbar-dark bg-success">
    <div class="navbar-header">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
            &#9776;
        </button>
        <a href="#" class="navbar-brand">Myrtle</a>
    </div>
    <div class="collapse navbar-toggleable-xs" id="main-nav">
        <ul class="nav navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('credentials.index') }}">Credentials</a>
            </li>
        </ul>
        <ul class="nav navbar-nav pull-md-right">
            @if(Route::has('users.register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.register') }}">Register</a>
                </li>
            @endif
        </ul>
    </div><!--/.nav-collapse -->
</nav>

{{-- Content --}}
<div class="container mt-3">
    <h1>@yield('page-title')</h1>
    <div class="row">
        <div class="col-xs-12">
            @yield('content')
            @yield('pagination')
        </div>
    </div>
</div>



{{-- Footer --}}

<script src="/js/app.js"></script>
<script>
//    $(function() {
//        $('select').select2();
//    });
</script>

@yield('scripts')

</body>
</html>
