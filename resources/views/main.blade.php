<!-- Layout File -->
<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials/_head') {{-- the html contailer --}}  
  </head>
  
  <body>
    <!--Default nav bar-->
    @include('partials/_nav') {{-- the nav container --}}

    <div class="container">

      @include('partials._messages')
      @yield('content') <!-- This will be different for every page -->
      @include('partials/_footer')
      
    </div> <!-- end of container-->

    @include('partials/_javascript')
    @yield('scripts')
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  </body>
</html>