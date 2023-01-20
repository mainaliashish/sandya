  <!-- Navbar -->
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fas fa-user-circle fa-x"></i>
              </a>

              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <div class="dropdown-divider"></div>
                  <a href="" class="dropdown-item profile" style="background-color: lavender">
                      <img src="{{ asset(imagePath(Auth::user()->profile_image, 'settings')) }}" class="img img-responsive img-circle center-block" style="width: 90px;height:90px;margin-left:75px;">

                      <p class="text-center text-bold mt-2">{{ Auth::user()->name }}</p>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ route('backend.accounts.changepassword') }}" class="dropdown-item">

                      <i class="fas fa-cog"></i>&nbspUpdate Password
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="{{ route('backend.accounts.profile') }}" class="dropdown-item">

                      <i class="fa fa-user"></i> &nbsp Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();

                                                                this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt"></i>
                        Logout
                      </a>
                  </form>
                  <div class="dropdown-divider"></div>
              </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt fa-x"></i>
              </a>
          </li>
      </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{ asset(imagePath(Auth::user()->profile_image, 'settings')) }}" class="img-circle elevation-2" alt="User Image">


              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ Auth::user()->name }}</a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{ route('backend.dashboard') }}" class="nav-link {{ request()->routeIs('backend.dashboard') ? 'active' : '' }}">
                          <i class="nav-icon fas fa-tachometer-alt"></i>
                          <p>
                            Dashboard
                          </p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="" class="nav-link {{ request()->routeIs('backend.blogs*') ? 'active' : '' }}">
                          <i class="fas fa-newspaper"></i>
                          <p>
                              Blogs
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('backend.blogs') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All Blogs</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('backend.blogs.create') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Create Blog</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('backend.blogs.trashed') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Trashed Blogs</p>
                              </a>
                          </li>

                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="" class="nav-link  {{ request()->routeIs('backend.categories*') ? 'active' : '' }}">
                          <i class="fas fa-layer-group"></i>
                          <p>
                              Category
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('backend.categories') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All Category</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('backend.categories.create') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Create Category</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('backend.categories.trashed') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Trashed Categories</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                <li class="nav-item">
                    <a href="" class="nav-link {{ request()->routeIs('backend.announcements*') ? 'active' : '' }}">
                        <i class="fas fa-bullhorn"> </i>
                        <p>
                            Announcement
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('backend.announcements') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Announcements</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('backend.announcements.create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Announcement</p>
                            </a>
                        </li>
                    </ul>
                </li>


                  <li class="nav-item">
                      <a href="#" class="nav-link {{ request()->routeIs('backend.services*') ? 'active' : '' }}">
                         <i class="fas fa-atlas"></i>
                          <p>
                              Services
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('backend.services') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All Services</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('backend.services.create') }}" class="nav-link">

                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Create Service</p>
                              </a>
                          </li>

                      </ul>
                  </li>


                  <li class="nav-item">
                      <a href="#" class="nav-link {{ request()->routeIs('backend.gallery*') ? 'active' : '' }}">
                          <i class="fas fa-file-image"></i>

                          <p>
                              Gallery
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('backend.gallery') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Images</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('backend.gallery.create') }}" class="nav-link">

                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Add Image</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('backend.gallery.manage') }}" class="nav-link">

                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Manage Image</p>
                              </a>
                          </li>
                      </ul>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link {{ request()->routeIs('backend.contacts*') ? 'active' : '' }}">
                       <i class="fas fa-address-book"></i>
                          <p>
                              Contact
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('backend.contacts') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>All Contacts</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('backend.contacts.create') }}" class="nav-link">

                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Create Contact</p>
                              </a>
                          </li>
                      </ul>
                  </li>

          <li class="nav-item">
              <a href="#" class="nav-link {{ request()->routeIs('backend.teams*') ? 'active' : '' }}">

                  <i class="fas fa-users"></i>
                  <p>
                      Teams
                      <i class="fas fa-angle-left right"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('backend.teams') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>All teams</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('backend.teams.create') }}" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Add Team</p>
                      </a>
                  </li>
              </ul>
          </li>

    <li class="nav-item">
        <a href="#" class="nav-link {{ request()->routeIs('backend.sliders*') ? 'active' : '' }}">

            <i class="fas fa-images"></i>
            <p>
                Sliders
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('backend.sliders') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Slider Images</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.sliders.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Images</p>
                </a>
            </li>
        </ul>
    </li>

    <li class="nav-item">
        <a href="#" class="nav-link {{ request()->routeIs('backend.clients*') ? 'active' : '' }}">

            <i class="fas fa-book"></i>
            <p>
                Clients
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('backend.clients') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Clients</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.clients.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Add Client</p>
                </a>
            </li>
        </ul>
    </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link {{ request()->routeIs('backend.account.*') ? 'active' : '' }}">
                          <i class="fas fa-cogs"></i>
                          <p>
                              Site Settings
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="{{ route('backend.accounts.about') }}" class="nav-link">

                                  <i class="far fa-circle nav-icon"></i>
                                  <p>About Us</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('backend.accounts.changepassword') }}" class="nav-link">

                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Change Password</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="{{ route('backend.accounts.profile') }}" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Update Profile</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item {{ request()->routeIs('backend.messages*') ? 'active' : '' }}">

                      <a href="{{ route('backend.messages') }}" class="nav-link">
                          <i class="fas fa-envelope-square"></i>

                          <p>
                              &nbspMessages
                          </p>
                      </a>
                  </li>

                <li class="nav-item">
                <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                                this.closest('form').submit();">
                    <i class="fas fa-sign-out-alt"></i>
                    <p> Logout</p>
                </a>
                </form>
                </li>
              </ul>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>

