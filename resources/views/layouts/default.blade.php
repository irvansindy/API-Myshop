<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Myshop</title>
    <meta name="description" content="ShaynaAdmin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- css style --}}
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')


</head>

<body>
    {{-- sidebar --}}
    @include('includes.sidebar')
    {{-- end sidebar --}}

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        {{-- navigation bar --}}
        @include('includes.navbar')
        {{-- end navigation bar --}}
        <!-- Content -->
        <div class="content">
            {{-- main content --}}
            {{-- @include('pages.dashboard') ini tidak terpakai --}}
            @yield('content')
            {{-- end main content --}}
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
    </div>
    <!-- /#right-panel -->

    {{-- script --}}
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')
    {{-- end script --}}
</body>
</html>
