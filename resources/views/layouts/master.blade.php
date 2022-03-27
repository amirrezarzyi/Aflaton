<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('layouts.head-tag')
    @yield('head-tag')

</head>

<body dir="rtl">

<div class="main-wrapper">

    @include('layouts.header')

    @include('layouts.sidebar')

    @yield('content')

    @include('layouts.footer')

</div>


@include('layouts.script')
@yield('script')


</body>
</html>
