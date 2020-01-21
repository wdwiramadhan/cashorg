<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="{{ route('home') }}">
          <img src="{{ asset('argon') }}/img/brand/blue.png" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{route('home')}}">
              <i class="ni ni-shop text-primary"></i>
                <span class="nav-link-text">Dashboards</span>
              </a>
            </li>
            @if(auth()->user()->role == 'admin')
            <li class="nav-item">
              <a class="nav-link" href="#navbar-examples" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-examples">
                <i class="ni ni-ungroup text-orange"></i>
                <span class="nav-link-text">Master</span>
              </a>
              <div class="collapse" id="navbar-examples">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link">User Management</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('type.index')}}" class="nav-link">Type Management</a>
                  </li>
                </ul>
              </div>
            </li>
            @endif
            <li class="nav-item">
              <a class="nav-link" href="#navbar-member" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="navbar-member">
                <i class="ni ni-money-coins text-info"></i>
                <span class="nav-link-text">Finance</span>
              </a>
              <div class="collapse" id="navbar-member">
                <ul class="nav nav-sm flex-column">
                  <li class="nav-item">
                    <a href="{{route('income.index')}}" class="nav-link">Income</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('income.index')}}" class="nav-link">Expenditure</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">
              <i class="ni ni-satisfied text-warning"></i>
                <span class="nav-link-text">Money Together</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('home')}}">
              <i class="ni ni-user-run text-primary"></i>
                <span class="nav-link-text">Bill</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>