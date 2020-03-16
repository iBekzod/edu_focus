<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="text-info fa fa-home"></i> {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse navbar-right" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav mr-auto ">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a class="btn btn-link text-white" href="{{ route('login') }}"><span>Login</span></a></li>
                    <li><a class="btn btn-link text-white"
                           href="{{ route('register') }}"><span>Register</span></a>
                    </li>
                @else


                    @if(isset($enableSearch) && $enableSearch==true)
                        <form class="form-inline" name="searchForm" id="searchForm">
                            <input class="form-control mx-sm-2 form-control-sm" name="q" value="{{request('q')}}"
                                   type="text"
                                   placeholder="Search">
                            <button class="btn btn-outline-secondary btn-sm my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    @endif

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle text-white" data-toggle="dropdown" role="button"
                           aria-expanded="false">
                            Admin Routes
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu p-3 pt-0" role="menu">
                            <li class="py-1">  <a class="fa fa-file-o" href="{{ route('jobs.index') }}">  <span>Jobs</span></a></li>
                            <li class="py-1">  <a class="fa fa-file-o" href="{{ route('learningmethods.index') }}">  <span>Learnign Methods</span></a></li>
                            <li class="py-1">  <a class="fa fa-file-o" href="{{ route('organizations.index') }}">  <span>Organizations</span></a></li>
                            <li class="py-1">  <a class="fa fa-file-o" href="{{ route('professors.index') }}">  <span>Professors</span></a></li>
                            <li class="py-1">  <a class="fa fa-file-o" href="{{ route('progress.index') }}">  <span>Progress</span></a></li>
                            <li class="py-1">  <a class="fa fa-file-o" href="{{ route('roles.index') }}">  <span>Roles</span></a></li>
                            <li class="py-1">  <a class="fa fa-file-o" href="{{ route('scores.index') }}">  <span>Scores</span></a></li>
                            <li class="py-1">  <a class="fa fa-file-o" href="{{ route('statuses.index') }}">  <span>Statuses</span></a></li>
                            <li class="py-1">  <a class="fa fa-file-o" href="{{ route('students.index') }}">  <span>Students</span></a></li>
                            <li class="py-1">  <a class="fa fa-file-o" href="{{ route('studentparents.index') }}">  <span>Parents</span></a></li>
                            <li class="py-1">  <a class="fa fa-file-o" href="{{ route('subjects.index') }}">  <span>Subjects</span></a></li>
                            <li class="py-1">  <a class="fa fa-file-o" href="{{ route('tasks.index') }}">  <span>Tasks</span></a></li>
                            <li class="py-1">  <a class="fa fa-file-o" href="{{ route('users.index') }}">  <span>Users</span></a></li>

                            <li class="dropdown-divider"></li>
                            <li class="py-1">
                                <a class="" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
