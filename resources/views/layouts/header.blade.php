
<!-- Main Navigation -->
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
                <a href="{{ route('home') }}">
                    <img src="{{asset('Pictures_Project/logo/logo1.jpg')}}" height="50">
                </a>


        {{-- Search--}}
            <div class="col-md-7 col-lg-2 col-xl-7" style="height:40px;margin-top: -48px;">

                <form action="">

                    <div class="md-form md-outline input-group md-input-group w-100">

                        <div class="select-outline">
                            <select class="mdb-select md-form md-outline my-0">
                                <option value="">All type</option>
                                <option value="codex">Electronics</option>
                                <option value="comments">Phones</option>
                                <option value="content">Tablets</option>
                                <option value="content">Cameras</option>
                                <option value="content">Computers</option>
                                <option value="content">Video Games</option>
                                <option value="content">TV</option>
                            </select>
                        </div>

                        <input type="text" class="form-control mb-0" placeholder="Search">

                        <div class="input-group-append">
                            <button class="btn btn-primary btn-md px-3" type="submit">
                                <i class="fa fa-search"></i> Search
                            </button>
                        </div>

                    </div>

                </form>

            </div>

            <!-- Links -->
            <div class="collapse navbar-collapse" id="basicExampleNav">

                <!-- Right -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('about_us')}}" class="nav-link waves-effect">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('shop.index')}}" class="nav-link waves-effect">
                            Shop
                        </a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a href="{{ route('blog.index')}}" class="nav-link waves-effect">--}}
{{--                            Blog--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a href="{{ route('contact')}}"  class="nav-link waves-effect">
                            Contact
                        </a>
                    </li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link waves-effect" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link btn btn-outline-info btn-md btn-rounded btn-navbar waves-effect
                                waves-light" href="{{ route('register') }}">{{ __('SignUp') }}</a>
                            </li>
                        @endif
                    @else
                        <div class="mr-4 ml3">
                            <li  class="nav-item pl-2 mb-2 mb-md-1" >
                                <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <div> <i class="fas fa-user-circle fa-lg "></i></div>
                                    <small class="text-dark">{{ Auth::user()->name }} </small>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </div>
                    @endguest

                    <div class="mr-4">
                        <li class="nav-item pl-2 mb-2 mb-md-0">
                            <a href="{{route('track_order')}}" role="button">
                                <div> <i class="fas fa-store fa-lg "></i></div>
                                <small class="text-dark">Orders</small>
                            </a>
                    </li>
                    </div>

                    <div class="mr-3">

                        <li class="nav-item" >
                        <a href="{{route('cart.index')}}" role="button">
                                <i class="fas fa-shopping-cart fa-lg "></i>
                                <span class="badge badge-pill red">{{ Cart::count() }}</span>
                                <small class="text-dark">Cart</small>
                            </a>
                    </li>
                    </div>



                </ul>



            </div>
            <!-- Links -->
        </div>
    </nav>
    <!-- Navbar -->
</header>

