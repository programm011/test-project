<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/">Dashboard</a>
        </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userdropdown"
               role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{auth()->user()->username}}
            </a>
            <div class="dropdown-menu" aria-labelledby="userdropdown">
                <a class="dropdown-item" href="#">Profile</a>
                <div class="dropdown-divider"></div>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    @method('post')
                    <button class="dropdown-item" type="submit">{{__('auth.logout')}}</button>
                </form>
            </div>
        </li>

    </ul>
</nav>
