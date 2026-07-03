<!DOCTYPE html>
<html>

<head>
    <title> {{ $title ?? 'Dr. Aparna Venugopal - General & Laparoscopic Surgeon' }} </title>
    <meta name="description" content="@yield('meta_desc', 'Consult Dr. Aparna Venugopal for expert general surgery, advanced laparoscopic treatments, hernia repair, and specialized surgical care.')">

    @include('includes.head')
    
</head>

<body>

    @include('includes.header')
    @yield('content')
    @include('includes.footer')

</body>

</html>
