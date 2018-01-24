<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.meta-head')
</head>
<body>
    @section('sidebar')
        @include('layouts.partials.sidebar')
    @show

    @include('layouts.partials.head-panel')

    @yield('breadcrumb')
    @yield('content')
</body>
@include('layouts.partials.scripts')
</html>
