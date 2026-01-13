<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>{{$title ?? "Workopia | Find and list jobs"}}</title>
</head>
<body class="bg-gray-300">
    <x-header />
    <x-top-banner />
    @if(request()->is('/'))
    <x-hero title="Find Your Dream Job" />
    @endif

    <main class="container mx-auto p-4 mt-4">
        {{--        Display alert message--}}
        @if(session('success'))
            <x-alert type="success" message="{{session('success')}}" ></x-alert>
        @endif
        @if(session('error'))
            <x-alert type="error" message="{{session('error')}}"></x-alert>
        @endif
        {{$slot}}
    </main>

<script src="{{asset('js/script.js')}}"></script>
</body>
</html>

