@props(['title','descriptions','keywords'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$title ?? ""}}</title>
        <meta name="description" content="{{$descriptions ?? ''}}">
        <meta name="keywords" content="{{$keywords ?? ''}}">
        <!-- Fonts -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{asset('boostrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    
    <body>
        <x-layouts.header></x-layouts.header>
       
        
        <main class="py-5 ">
            <div class="container ">
                <x-banner></x-banner>
                
                {{ $slot }}
            </div>
        </main>
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/my.js')}}"></script>
    <script src="{{asset('boostrap/js/bootstrap.min.js')}}" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</html>