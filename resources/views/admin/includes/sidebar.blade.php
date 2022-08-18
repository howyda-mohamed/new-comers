<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                University
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">{{App\Models\University::count()}}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.universities')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Universities</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.universities.create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New University</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Countries
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">{{App\Models\Country::count()}}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.Countries')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Countries</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.countries.create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Country</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Faculties
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">{{App\Models\Faculty::count()}}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.faculties')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Faculties</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.faculties.create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Faculty</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Locations
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">{{App\Models\Location::count()}}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.locations')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Location</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.locations.create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Loaction</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Notification
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">{{App\Models\Notification::count()}}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.notifications')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Notification</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.notifications.create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Notification</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Squads
                <i class="right fas fa-angle-left"></i>
                <span class="badge badge-info right">{{App\Models\Squad::count()}}</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.squads')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Squad</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.squads.create')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Squad</p>
                </a>
              </li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="{{url('user/profile')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Profile

              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
