<!DOCTYPE html>
<html>
  <head>
    <title>
      @hasSection('title')
        @yield('title') - {{ config('app.name') }}
      @else
        {{ config('app.name') }}
      @endif
    </title>
    <base href="{{ config('app.url') }}">
    <meta charset="utf-8" />
    {{-- <link href="{{ mix('/css/app.css') }}" rel="stylesheet" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <meta content="{{ csrf_token() }}" name="csrf-token">
    <script src="{{ asset('/js/app.js') }}" defer></script>
    @yield('head')
  </head>
  <body>
    @inertia
  </body>
</html>