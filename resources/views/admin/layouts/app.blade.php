
<!--  Header -->
  @include('admin.layouts.partials.header')

  <!-- Sidebar -->
  @include('admin.layouts.partials.aside')

  <!--  Main -->
  @yield('content')
  
  
  <!--  Footer -->
  @include('admin.layouts.partials.footer')