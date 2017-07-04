<!DOCTYPE html>
<html lang="en">
  <head>
  @include('partials._head')
  <style>
  
  </style>
  </head>
  
  <body>
    <!-- main-content -->

    <div class="container">
        @yield('content')
    </div>
    
    @include('partials._scripts')

  </body>
</html>