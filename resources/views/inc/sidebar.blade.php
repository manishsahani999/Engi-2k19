<div class="nav-container">
    <nav class="bar bar-toggle bar--transparent bar--absolute" data-fixed-at="200">
        <div class="container">
            <div class="row align-items-center">
                <div class="col">
                    <div class="bar__module">
                        <a href="index-2.html">
                            <img class="logo" style="max-size:5rem;" alt="logo" src="{{ asset('img/logo.png') }}" />
                        </a>
                    </div>
                    <!--end module-->
                </div>
                <div class="col d-flex justify-content-end">
                    <div class="bar__module">
                        <a class="menu-toggle pull-right" href="#" data-notification-link="sidebar-menu">
                            <i class="stack-interface stack-menu"></i>
                        </a>
                    </div>
                    <!--end module-->
                </div>
                <!--end columns-->
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </nav>
    <div class="notification pos-right pos-top side-menu bg--white" data-notification-link="sidebar-menu" data-animation="from-right">
        <div class="side-menu__module pos-vertical-center text-right">
            <ul class="menu-vertical">
                <li>
                    <a class="inner-link" href="/home">Home</a>
                </li>
                <li>
                    <a class="inner-link" href="/contact">Registerd</a>
                </li>
                <hr>

                <li>
                    <a class="inner-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <!--end module-->
        <div class="side-menu__module pos-bottom pos-absolute col-12 text-right">
            <ul class="social-list list-inline text-right list--hover">
                <li>
                    <a href="#">
                        <i class="socicon socicon-google icon icon--xs"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="socicon socicon-twitter icon icon--xs"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="socicon socicon-facebook icon icon--xs"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="socicon socicon-instagram icon icon--xs"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>