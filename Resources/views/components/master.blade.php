{{--
/*
|--------------------------------------------------------------------------
| Master Template
|--------------------------------------------------------------------------
|
| Master Template from Module "ACP".
| There are a HTML Template with lot of configurations.
| Don't change it, until you know what you do!
|
| @author:  Yezz.Design
| @mail:    yezz.design@schodie.de
| @version: 0.0.1 Alpha
|
*/
--}}

{{-- HTML5 --}}
<!DOCTYPE html>
{{-- change HTML language automatically when app locale has changed --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    {{-- HEAD Section--}}
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Custom META Data--}}
        {{ $meta??'' }}

        {{-- Title of Website | Schema "Site|Module|AppName" --}}
        <title>{{ $title??'Home' }} - {{ config('app.name') }}</title>

        {{-- Custom CSS File --}}
        {{ $style??'' }}

        <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

        {{-- Laravel Asset - CSS File --}}
        <link rel="stylesheet" href="{{ asset('css/acp.css') }}">

        {{-- Custom JS File --}}
        {{ $script??'' }}

        {{-- Laravel Asset - JS File --}}
        <script src="{{ asset('js/acp.js') }}" defer></script>

    </head>
    {{-- End HEAD Section--}}

    {{-- Start BODY Content - no classes preloaded--}}
    <body {{ $attributes }}>
    {{ $slot }}
    </body>
    {{-- End BODY Content --}}
</html>
