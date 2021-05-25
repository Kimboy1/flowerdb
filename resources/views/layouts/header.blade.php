
  <!-- Navbar -->
  <nav class=" navbar navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link"><span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }} | Dashboard</span></a>
      </li>
      
  
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        
          <a class="nav-link" href="#" role="button" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                        
              <i class="fa fa-power-off"></i>

          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        
        
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->