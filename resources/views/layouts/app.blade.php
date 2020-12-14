<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Basic-website') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('inc.navbar')
    
    <div class="container">
        @if (Request::is('/'))
            @include('inc.showcase')
        @endif
        @include('inc.messages');
        <div class="row">
            <div class="col-md-8 col-lg-8">@yield('content')</div>
            <div class="col-md-4 col-lg-4">@include('inc.sidebar')</div>
        </div>
        @if (Request::is('about'))
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong> Nostrum harum excepturi sint repudiandae, voluptatem ea architecto eligendi eum deleniti praesentium, expedita error accusantium iusto culpa beatae unde ab magni! Cum.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum harum excepturi sint repudiandae, <strike> voluptatem ea architecto eligendi eum deleniti praesentium,</strike> expedita error accusantium iusto culpa beatae unde ab magni! Cum.</p>
                    <p>Lorem ipsum dolor sit <em>amet consectetur adipisicing elit.</em> Nostrum harum excepturi sint repudiandae, voluptatem ea architecto eligendi eum deleniti praesentium, expedita error accusantium iusto culpa beatae unde ab magni! Cum.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa rem tempore eveniet saepe, cum modi architecto iure illo nulla voluptas veniam, delectus, tenetur voluptatem ullam earum dolores. Non, ad cum.</p>
                </div>
                <div class="col-md-6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa rem tempore eveniet saepe, <em>cum modi architecto iure illo nulla voluptas veniam,</em> delectus, tenetur voluptatem ullam earum dolores. Non, ad cum.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa rem tempore eveniet saepe, cum modi architecto iure illo nulla voluptas veniam, delectus, tenetur voluptatem ullam earum dolores. Non, ad cum.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa rem tempore eveniet saepe, cum modi architecto iure illo nulla voluptas veniam, delectus, tenetur voluptatem ullam earum dolores. Non, ad cum.</p>
                    <p><strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.</strong> Ipsa rem tempore eveniet saepe, cum modi architecto iure illo nulla voluptas veniam, delectus, tenetur voluptatem ullam earum dolores. Non, ad cum.</p>
                </div>
            </div>
        @endif
    </div>
    <div class="text-center" id="footer">
        <p>2020 &copy; Emmagist204</p>
    </div>    
</body>
</html>
