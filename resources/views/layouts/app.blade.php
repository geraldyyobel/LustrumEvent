<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    @livewireStyles
    
    <link rel="stylesheet" href="{{ asset('vendor/stisla-2.2.0/assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/stisla-2.2.0/assets/modules/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/stisla-2.2.0/assets/modules/bootstrap-social/bootstrap-social.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/stisla-2.2.0/assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/stisla-2.2.0/assets/css/components.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css"> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/modules/jquery.min.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/modules/popper.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/modules/tooltip.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/modules/bootstrap/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/modules/nicescroll/jquery.nicescroll.min.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/modules/moment.min.js') }}" defer></script>
    <script src="{{ asset('vendor/stisla-2.2.0/assets/js/stisla.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <script src="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://unpkg.com/bootstrap-table@1.21.4/dist/bootstrap-table.min.js"></script>
    @livewireScripts
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('layouts.navigation')
            @include('layouts.side-navigation')

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    {{ $header ?? '' }}

                    <div class="section-body">
                        {{ $slot ?? '' }}
                    </div>
                </section>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    <small class="text-muted">Pandu & Aldy IF USD 19 - SMA KOLESE DE BRITTO ©2023</small>
                </div>
            </footer>

        </div>
        <script src="{{ asset('vendor/stisla-2.2.0/assets/js/scripts.js') }}" defer></script>
    

</body>

</html>
