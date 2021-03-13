<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    {{-- Vecchio sistema per linkare il css --}}
    {{-- <link rel="stylesheet" href="css/app.css"> --}}
    {{-- Sistema Blade per linkare il css. Mi trova il css in automatico. Piuttosto: Quando i sistemi faranno il deploy cambieranno il nome del file per fare in modo che il nostro browser cancelli la cache in maniera automatica--}}
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    <title>titolo pagina</title>
  </head>
  <body>
    @include('components.header')
    @yield('content')
    @include('components.footer')
  </body>
</html>
