
<!-- Main Navigation -->
<header>

    <!-- Modal Contact -->
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header py-4">
                    <h5 class="modal-title mx-auto">Write to us</h5>
                    <button type="button" class="close p-0 m-0" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form md-outline">
                        <i class="fas fa-user prefix"></i>
                        <input type="text" id="contactForm-name1" class="form-control">
                        <label for="contactForm-name1">Your name</label>
                    </div>
                    <div class="md-form md-outline">
                        <i class="fas fa-envelope prefix"></i>
                        <input type="email" id="contactForm-email1" class="form-control">
                        <label for="contactForm-email1">Your email</label>
                    </div>
                    <div class="md-form md-outline">
                        <i class="fas fa-tag prefix"></i>
                        <input type="text" id="contact321" class="form-control">
                        <label for="contact321">Subject</label>
                    </div>
                    <div class="md-form md-outline">
                        <i class="fas fa-pencil-alt prefix"></i>
                        <textarea type="text" id="contact81" class="md-textarea form-control" rows="4"></textarea>
                        <label for="contact81">Your message</label>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center py-4">
                    <button class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Contact -->


    <!-- Modal Login / Register -->
    <div class="modal fade show" id="modalLoginRegister2" tabindex="-1" role="dialog" aria-modal="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">

                    <!-- Pills -->
                    <ul class="nav md-pills nav-justified pills-primary">
                        <li class="nav-item">
                            <a class="nav-link border border-primary border-rounded" data-toggle="tab"
                               href="#modalLoginRegister-login2" role="tab" aria-selected="true">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link border border-primary border-rounded active show" data-toggle="tab"
                               href="#modalLoginRegister-register2" role="tab" aria-selected="false">Register</a>
                        </li>
                    </ul>
                    <!-- Pills -->

                    <!-- Content -->
                    <div class="tab-content py-0">

                        <!-- First panel -->
                        <div class="tab-pane fade" id="modalLoginRegister-login2" role="tabpanel">

                            <!-- Login form -->
                            <form id="formLoginRegister-login2" class="pt-2" action="login" method="post">

                                <div class="md-form md-outline">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="email" id="formLoginRegister-email2" class="form-control">
                                    <label data-error="wrong" data-success="right" for="formLoginRegister-email2">Your email</label>
                                </div>
                                <div class="md-form md-outline">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="formLoginRegiser-password2" class="form-control">
                                    <label data-error="wrong" data-success="right" for="formLoginRegiser-password2">Your password</label>
                                </div>

                                <div class="text-center mt-4 pt-3">
                                    <button type="button" class="btn btn-outline-primary mr-1 mb-2 waves-effect waves-light">Forgot password?</button>
                                    <button type="button" class="btn btn-primary mb-2">Login</button>
                                </div>

                            </form>
                            <!-- Login form -->

                        </div>
                        <!-- First panel -->

                        <!-- Second panel -->
                        <div class="tab-pane fade in show active" id="modalLoginRegister-register2" role="tabpanel">

                            <!-- Register form -->
                            <form id="formLoginRegister-register2" class="pt-2" action="register" method="post">

                                <div class="md-form md-outline">
                                    <i class="fas fa-user prefix"></i>
                                    <input type="text" id="formLoginRegister-name2" class="form-control">
                                    <label data-error="wrong" data-success="right" for="formLoginRegister-name2">Your name</label>
                                </div>
                                <div class="md-form md-outline">
                                    <i class="fas fa-pencil-alt prefix"></i>
                                    <input type="text" id="formLoginRegister-username2" class="form-control">
                                    <label data-error="wrong" data-success="right" for="formLoginRegister-username2">Your username</label>
                                </div>
                                <div class="md-form md-outline">
                                    <i class="fas fa-envelope prefix"></i>
                                    <input type="email" id="formLoginRegister-email-example2" class="form-control">
                                    <label data-error="wrong" data-success="right" for="formLoginRegister-email-example2">Your email</label>
                                </div>
                                <div class="md-form md-outline">
                                    <i class="fas fa-lock prefix"></i>
                                    <input type="password" id="formLoginRegister-password-example2" class="form-control">
                                    <label data-error="wrong" data-success="right" for="formLoginRegister-password-example2">Your password</label>
                                </div>
                                <div class="md-form md-outline">
                                    <i class="fas fa-key prefix"></i>
                                    <input type="password" id="formLoginRegister-password-repeat2" class="form-control">
                                    <label data-error="wrong" data-success="right" for="formLoginRegister-password-repeat2">Repeat password</label>
                                </div>

                                <div class="form-check mt-4 mb-3 pl-0 text-left">
                                    <input type="checkbox" class="form-check-input filled-in" id="formLoginRegister-newsletter2" name="newsletter">
                                    <label class="form-check-label small grey-text" for="formLoginRegister-newsletter2">
                                        I agree to sign up for account notifications and newsletter
                                    </label>
                                </div>

                                <div class="text-center">
                                    <p class="small grey-text mb-4">Lorem ipsum dolor sit amet <a target="_blank" href="#!">Privacy Policy</a>.</p>
                                    <button type="button" class="btn btn-primary my-2">Sign up</button>
                                </div>

                            </form>
                            <!-- Register form -->

                        </div>
                        <!-- Second panel -->

                    </div>
                    <!-- Content -->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-primary waves-effect waves-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Login / Register -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light fixed-top scrolling-navbar">
        <div class="container-fluid">

            <!-- Brand -->
            <a class="navbar-brand" href="{{ route('main')}}">
                <strong><span class="text-grey">Hom</span><span class="text-primary">i</span><span class="text-grey">es</span><span class="text-primary">.</span></strong>
            </a>
            {{-- Search--}}
            <div class="col-md-10 col-lg-2 col-xl-7" style="height:40px;margin-top: -48px;">

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


            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

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
                    <li class="nav-item">
                        <a href="{{ route('blog.index')}}" class="nav-link waves-effect">
                            Blog
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contact')}}"  class="nav-link waves-effect">
                            Contact
                        </a>
                    </li>
                    <li class="nav-item pl-2 mb-2 mb-md-0">
                        <a href="#!" data-toggle="modal" data-target="#modalLoginRegister2" type="button" class="btn
                        btn-outline-info btn-md btn-rounded btn-navbar waves-effect waves-light">Sign up</a>
                    </li>


{{--                    <li class="nav-item pl-2 mb-2 mb-md-0">--}}
{{--                        <a href="#!" role="button">--}}
{{--                                <i class="fas fa-user fa-lg text-muted"></i>--}}
{{--                                <span class="counter counter-floating counter-lg-icon position-absolute ml-n1 mt-1"></span>--}}
{{--                            <small class="text-dark">My profile</small>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    <li class="nav-item pl-2 mb-2 mb-md-0">
                            <a href="{{route('track_order')}}" role="button">
                                    <i class="fas fa-store fa-lg text-muted"></i>
                                <small class="text-dark">Orders</small>
                            </a>
                    </li>

                    <li class="nav-item">
                            <a href="{{url('/main/cart/1')}}" role="button">
                                    <i class="fas fa-shopping-cart fa-lg text-muted"></i>
                                <small class="text-dark">Cart</small>
                            </a>
                    </li>
                </ul>

            </div>
            <!-- Links -->
        </div>
    </nav>
    <!-- Navbar -->
</header>

