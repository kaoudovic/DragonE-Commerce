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
                        <div class="aa-input-container" id="aa-input-container">
                            <input style="border: solid 1px #4da6ff" type="search" id="aa-search-input" class="aa-input-search" placeholder="Search....
                            ." name="search"
                                   autocomplete="off" />
                            <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
                                <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,
                                        1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,
                                        910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,
                                        316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,
                                        38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,
                                        0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,
                                        332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,
                                        273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,
                                        343C2305.7,1098.7,2318,1128.7,2318,1164z" />
                                </svg>
                        </div>
                    </div>

                </form>

            </div>
            <div class="col-md-5 col-lg-4 col-xl-4 mt-2 mb-1 mb-md-0 pb-2 pb-md-0">
                            <!-- Icons -->
               <div class="d-flex justify-content-start justify-content-md-end text-center">
                <!-- Right -->


                    <!-- Authentication Links -->
                    <div class="mr-4">
                            <a href="{{route('about_us')}}" role="button">
                                <div> <i class="far fa-handshake"></i></div>
                                <small class="text-dark">About</small>
                            </a>
                    </div>
                   <div class="mr-4">
                            <a href="{{route('contact.index')}}" role="button">
                                <div> <i class="fas fa-sms"></i></div>
                                <small class="text-dark">Contact</small>
                            </a>
                    </div>
                   <div class="mr-4">
                            <a href="{{route('blog.index')}}" role="button">
                                <div> <i class="fas fa-blog"></i></div>
                                <small class="text-dark">Blog</small>
                            </a>
                    </div>

                    <div class="mr-4">
                            <a href="{{route('shop.index')}}" role="button">
                                <div> <i class="fas fa-shopping-bag"></i></div>
                                <small class="text-dark">Shop</small>
                            </a>
                    </div>

                    <div class="mr-4">
                            <a href="{{route('track.index')}}" role="button">
                                <div> <i class="fas fa-store"></i></div>
                                <small class="text-dark">Orders</small>
                            </a>
                    </div>


                   <div class="mr-4">
                       <a href="{{route('wishlist.index')}}" role="button">
                           <div> <i class="fas fa-heart"></i></div>
                           <small class="text-dark">Wishlist</small>
                       </a>
                   </div>


                    @guest
                               <div class="mr-4">
                                   <a href="{{ route('login') }}" class="btn btn-primary btn-md active" role="button" aria-pressed="true">Login</a>
                               </div>
                    @else
                        <div class="mr-4">
                                <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <div> <i class="fas fa-user-circle fa-lg "></i></div>
                                    <small class="text-dark">{{ Auth::user()->name }} </small>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('profile', ['id'=>auth()->user()->id]) }}">Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        </div>


                    @endguest
                    <div class="">
                            <a href="{{route('cart.index')}}" role="button">
                                <div> <i class="fas fa-shopping-cart fa-lg "></i>
                                    @if (Cart::instance('default')->count() > 0)
                                        <span class="counter counter-floating counter-lg-icon position-absolute ml-n1 mt-1">{{ Cart::count() }}</strong></span>
                                    @endif
                                </div>
                                <small class="text-dark">Cart</small>

                            </a>
                    </div>
            </div>
            </div>
            <!-- Links -->
        </div>
    </nav>
    <!-- Navbar -->
</header>



