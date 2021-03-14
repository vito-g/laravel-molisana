<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    <title>laravel-molisana</title>
  </head>
  <body>

    <div class="container">

        @include('components.header')

      <main>
        @yield('content-main')
      </main>

        @include('components.footer')

    </div>

  </body>
</html>
