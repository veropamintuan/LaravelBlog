<!DOCTYPE html>
<html lang="en">
@include('partials._head')

  <body>

    @include('partials._nav')

  <div class="container">
    @include('partials._messages')

    @yield('layouts.content')

    @include('partials._footer')
        

  </div>
    <!-- end of .container -->
    @include('partials._javascripts')
    
    @yield('scripts')
  </body>

</html>