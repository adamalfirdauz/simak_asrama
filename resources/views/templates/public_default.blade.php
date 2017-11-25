<!DOCTYPE html>
<html lang="en">

  @include('templates.partials._head')

  <body>

    <!-- Navigation -->
    @include('templates.partials._nav')

    <!-- Page Header -->
    @include('templates.partials._page-header')

    <!-- Main Content -->
    <div class="container">
      @yield('content')
    </div>

    <hr>

    <!-- Footer -->
    @include('templates.partials._footer')

  @include('templates.partials._script')
  </body>

</html>
