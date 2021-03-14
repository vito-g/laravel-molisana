<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
    <title>homepage-molisana</title>
  </head>
  <body>

    <div class="container">

        @include('components.header')

      <main>
        @yield('content-homepage')
      </main>

        @include('components.footer')

    </div>

  </body>
</html>
