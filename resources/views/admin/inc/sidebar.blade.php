
<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{ asset('admin') }}/images/icon/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                @permission('app.dashboard')
                <li class="active has-sub">
                    <a class="js-arrow" href="{{ route('app.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard
                    </a>
                </li>
                @endpermission
                <li>
                    <a href="table.html">
                        <i class="fas fa-table"></i>Tables</a>
                </li>
                <li>
                    <a href="form.html">
                        <i class="far fa-check-square"></i>Forms</a>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-copy"></i>Pages</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="login.html">Login</a>
                        </li>
                        <li>
                            <a href="register.html">Register</a>
                        </li>
                        <li>
                            <a href="forget-pass.html">Forget Password</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-desktop"></i>Permissions</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        @permission('app.roles.index')
                          
                            <li>
                                <a href="{{ route('app.roles.index') }}">Roles</a>
                            </li>
                            
                        @endpermission
                        @permission('app.users.index')
                            <li>
                                <a href="{{ route('app.users.index') }}">User</a>
                            </li>
                        @endpermission
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
