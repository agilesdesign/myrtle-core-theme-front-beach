<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/themes/admin/beach/css/app.css">

    <title>Myrtle</title>
</head>
<body>

{{-- Navbar --}}
<nav class="navbar navbar-light bg-faded navbar-full navbar-fixed-top">
    <div class="navbar-header">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="exCollapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">
            &#9776;
        </button>
        <div class="logo">
            <h1 class="navbar-brand pl-3">
                <a href="{{ route('admin.frontpage') }}">
                    Myrtle <span class="tag tag-info">CMS</span>
                </a>
            </h1>
        </div>
    </div>

    @hasSection('toolbar')
    <div class="btn-group btn-group-sm pull-right" role="group" aria-label="Toolbar">
        @yield('toolbar')
    </div>
    @endHasSection
</nav>

<div class="col-md-2 col-xs-1 pl-0 pr-0 collapse in sidebar sidebar-left sidebar-visible bg-faded" id="sidebar">
    @include('admin::blocks.menus.index')
</div>

{{-- Content --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 mt-3 pt-3">
            <div class="col-xs-12">
                <h1 class="mb-2">
                    @yield('page-title')
                </h1>
                @yield('content')
                @yield('pagination')
            </div>
            @include('admin::blocks.debug.index')
        </div>
    </div>
</div>



{{-- Footer --}}
<script src="/themes/admin/beach/js/app.js"></script>
<script>
//    $(function() {
//        $('select').select2();
//    });
</script>

<script>
    $(function(){
        @foreach($alerts->messages() as $level => $alert)
            @foreach($alert as $message)
                 notie.alert(
                            "@if($level == 'danger'){{ 'error' }}@else{{ $level }}@endif",
                            "{{ $message }}",
                            2
                    );
            @endforeach
        @endforeach
    });
</script>

@yield('scripts')

</body>
</html>
