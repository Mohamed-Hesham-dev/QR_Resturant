  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
          {{-- <li class="nav-item d-none d-sm-inline-block">
              <a href={{ route('resturant', [$rest_item->resturant_name, $rest_item->id]) }} class="nav-link">Home</a>
          </li> --}}
          <li class="nav-item d-none d-sm-inline-block">
              <a href="#" class="nav-link">Contact</a>
          </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto align-items-center">
          <!-- Navbar Search -->
          <li class="nav-item">
              @if (isset($resturant))
                  <a href="{{ route('resturant', [$resturant->resturant_name, $resturant->id]) }}"
                      class="nav-link">my resturant</a>
              @endif
          </li>
          <li class="nav-item">
              <a class="dropdown-item" href="{{ route('owner.logout') }}"
                  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('owner.logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
              <div></div>
              </div>
          </li>


      </ul>
  </nav>
  <!-- /.navbar -->
