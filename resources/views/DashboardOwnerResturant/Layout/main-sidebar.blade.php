<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">

        <img src="{{ asset('assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">QR-Reaturant</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">

                <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>

            <div class="info">
                <a href="#" class="d-block">
                  

                    {{Auth::guard('owner')->user()->name}}
                 
                </a>
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
                <li class="nav-item menu-open">

                    <a class="nav-link" href="{{ route('dashboard') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p style="pointer:cursor">
                            Dashboard
                        </p>
                    </a>

                </li>
                {{-- <li class="nav-item">
                    <a href="#" onclick="content()" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Live Orders
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Orders
                            <i class="fas fa-angle-right right"></i>
                            <span class="badge badge-info right">6</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tree"></i>
                        <p>
                            Menu
                            <i class="fas fa-angle-right right"></i>
                        </p>
                    </a>

                </li> --}}

                <li class="nav-item">
                    <a href="{{route('table.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                          
                        </p>
                    </a>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/tables/simple.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Simple Tables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/data.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>DataTables</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/tables/jsgrid.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>jsGrid</p>
                            </a>
                        </li>
                    </ul> --}}
                </li>

                   <li class="nav-item has-treeview">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-bars"></i>
                                <p>
                                   Menu
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" style="display: none;">
                                <li class="nav-item">
                                    <a href="{{route('categories.index')}}" class="nav-link {{  request()->is('setting.edit')|| request()->is('setting/*') ? 'active':'' }}">
                                        <i class="nav-icon fas  fa-list-alt"></i>
                                        <p>
                                                Category
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('options.index')}}" class="nav-link {{  request()->is('setting.edit')|| request()->is('setting/*') ? 'active':'' }}">
                                        <i class="nav-icon fas  fa-list-alt"></i>
                                        <p>
                                                Option
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('products.index')}}" class="nav-link {{  request()->is('setting.edit')|| request()->is('setting/*') ? 'active':'' }}">
                                        <i class="nav-icon fab fa-product-hunt"></i>                                        <p>
                                                Product
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                           <li class="nav-item">
                    <a href="{{ route('contactUsSettingResturant.edit') }}" class="nav-link {{ request()->is('contactUsSetting.edit') || request()->is('contactUsSetting/*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-address-book" style='font-size:20px;color:rgb(255, 255, 255)'></i>
                        <p>
                            Contact Us Setting
                        </p>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="{{ route('aboutUsSettingResturant.edit') }}" class="nav-link {{ request()->is('contactUsSetting.edit') || request()->is('contactUsSetting/*') ? 'active' : '' }}">
                        <i class="nav-icon fa fa-info" style='font-size:20px;color:rgb(255, 255, 255)'></i>
                        <p>
                            About Us Setting
                        </p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="pages/calendar.html" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Staff
                            <span class="badge badge-info right">2</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/gallery.html" class="nav-link">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            QR Builder
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="pages/kanban.html" class="nav-link">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Customers log
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Plan
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="pages/mailbox/mailbox.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/compose.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/mailbox/read-mail.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
