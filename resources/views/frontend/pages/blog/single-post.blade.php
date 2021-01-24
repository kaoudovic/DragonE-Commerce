{{--@extends('layouts.master')--}}

{{--@push('head')--}}

{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">--}}
{{--<link href="{{asset('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/blog_styles.css')}}">--}}
{{--<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/blog_responsive.css')}}">--}}

{{--@endpush--}}

{{--@push('footer')--}}
{{--    --}}
{{--<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/styles/bootstrap4/popper.js')}}"></script>--}}
{{--<script src="{{asset('assets/styles/bootstrap4/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/greensock/TweenMax.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/greensock/TimelineMax.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/greensock/animation.gsap.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>--}}
{{--<script src="{{asset('assets/plugins/easing/easing.js')}}"></script>--}}
{{--<script src="{{asset('assets/blog_custom.js')}}"></script>--}}

{{--@endpush--}}

{{--@section('banner', $banner)--}}
{{--@section('content')--}}

{{--<div class="blog">--}}
{{--  <div class="single_post">--}}
{{--		<div class="container">--}}
{{--			<div class="row">--}}
{{--				<div class="col-lg-8 offset-lg-2">--}}
{{--					<div class="single_post_title"><h2 class="text-center">{{$post->title}}</h2></div>--}}
{{--					<div class="single_post_text">--}}
{{--						<p style="font-size: 19px" class="text-center">{{$post->body}}</p>--}}
{{--					</div>--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}
{{--</div>--}}

{{--<div class="blog">--}}
{{--	<div class="container">--}}
{{--		<div class="row">--}}
{{--			<div class="col">--}}
{{--				<div class="blog_posts d-flex flex-row align-items-start justify-content-between">--}}
{{--					@foreach($last3 as $last)--}}
{{--						@if($post->id != $last->id)--}}
{{--							<div class="blog_post">--}}
{{--								<div class="blog_image" style="background-image:url({{asset('assets/images/blog_9.jpg')}})"></div>--}}
{{--								<div class="blog_text">{{$post->title}}</div>--}}
{{--								<div class="blog_button"><a href="{{route('blog.show',['id' => $post])}}">Continue Reading</a></div>--}}
{{--							</div>--}}
{{--						@endif--}}
{{--					@endforeach--}}
{{--				</div>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}
{{--</div>--}}


{{--@endsection--}}


    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Algmdan.com</title>
    <!-- Roboto Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&display=swap">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('assets/new/css/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/new/css/mdb-pro.min.css')}}">
    <!-- Material Design Bootstrap Ecommerce -->
    <link rel="stylesheet" href="{{asset('assets/new/css/mdb.ecommerce.min.css')}}">

</head>

<body class="skin-light">

<!--Main Navigation-->
<header>

    <!-- Navbar -->
@include('layouts.header')
    <!-- Navbar -->

    <div class="jumbotron color-grey-light mt-70">
        <div class="d-flex align-items-center h-100">
            <div class="container text-center py-5">
                <h3 class="mb-0">This is a post title</h3>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->


<!--Main layout-->
<main>
    <div class="container mt-4">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-9 mb-4">

                <!--Section: Intro-->
                <section>

                    <!-- Featured image -->
                    <div class="view overlay rounded z-depth-1-half mb-4" style="max-height: 450px;">
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/new/img(18).jpg" class="img-fluid w-100"
                             alt="Thrid sample image">
                        <a href="">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!-- Featured image -->

                    <!-- Post data -->
                    <div class="post-data d-flex justify-content-between my-4">
                        <!-- Author -->
                        <a href="" class="black-text" rel="nofollow">
                            <img alt="User avatar" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg"
                                 class="avatar rounded z-depth-1" height="31" width="31">
                            <strong class="ml-1">Carmen Martinez</strong>
                        </a>
                        <!-- Author -->

                        <!-- Interactions -->
                        <div class="social-buttons smooth-scroll">
                            <!--Facebook-->
                            <a class="btn btn-sm btn-fb mr-1 my-0" role="button"
                               href="https://www.facebook.com"
                               onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600'); return false;">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <!--Twitter-->
                            <a class="btn btn-sm btn-tw mr-1 my-0" role="button"
                               href="https://twitter.com"
                               onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <!--Linkedin-->
                            <a class="btn btn-sm btn-li mr-1 my-0" role="button"
                               href="https://www.linkedin.com"
                               onclick="event.preventDefault();window.open(this.href, 'Share', 'width=500,height=500,menubar=no,location=no,resizable=yes,scrollbars=yes,status=yes')">
                                <i class="fab fa-linkedin-in"></i>
                            </a>

                        </div>
                        <!-- Interactions -->

                    </div>
                    <!-- Post data -->

                </section>
                <!--Section: Intro-->

                <hr>

                <!-- Text -->
                <section class="text-justify">

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu vulputate elit.
                        Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus.
                        Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante. Nulla
                        sem sem, bibendum eu magna ac, ornare ultricies mi. Class aptent taciti sociosqu ad litora torquent
                        per conubia nostra, per inceptos himenaeos. Sed eget mollis est, in tincidunt nisl. Fusce bibendum
                        nisl at congue tempus. Nam vel volutpat nibh. Vestibulum ante ipsum primis in faucibus orci luctus et
                        ultrices posuere cubilia Curae; Nulla et arcu pharetra, rutrum nulla sit amet, volutpat metus. Nunc
                        sem arcu, varius laoreet vestibulum sed, mollis eget orci.</p>

                    <blockquote class="blockquote my-5">
                        <p class="py-1 mb-0"><em>Nulla sem sem, bibendum eu magna ac, ornare ultricies mi.</em></p>
                    </blockquote>

                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.
                        Nulla et arcu pharetra, rutrum nulla sit amet, volutpat metus.&nbsp;<em>Class aptent taciti sociosqu
                            ad litora torquent per conubia nostra, per inceptos himenaeos.</em></p>

                    <img
                        src="https://images.pexels.com/photos/1154861/pexels-photo-1154861.jpeg"
                        class="img-fluid rounded z-depth-1-half mb-4" alt="">

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quibusdam amet sed laboriosam
                        repudiandae sunt provident perspiciatis! Ipsam eos repellendus voluptates minus sint facere nihil hic
                        tempora. Eveniet, quia itaque?</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu vulputate elit.
                        Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus.
                        Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante. Nulla
                        sem sem, bibendum eu magna ac, ornare ultricies mi. Class aptent taciti sociosqu ad litora torquent
                        per conubia nostra, per inceptos himenaeos. Sed eget mollis est, in tincidunt nisl. Fusce bibendum
                        nisl at congue tempus. Nam vel volutpat nibh. Vestibulum ante ipsum primis in faucibus orci luctus et
                        ultrices posuere cubilia Curae; Nulla et arcu pharetra, rutrum nulla sit amet, volutpat metus. Nunc
                        sem arcu, varius laoreet vestibulum sed, mollis eget orci.</p>

                </section>
                <!-- Text -->

                <!-- Section: Share -->
                <section class="text-center mb-4">

                    <hr>

                    <span class="font-weight-bold mr-2">Spreed the word: </span>

                    <!--Facebook-->
                    <a class="btn btn-sm btn-fb mr-1" role="button" href="#!">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <!--Twitter-->
                    <a class="btn btn-sm btn-tw mr-1" role="button" href="#!">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <!--Linkedin-->
                    <a class="btn btn-sm btn-li mr-1" role="button" href="#!">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <hr>

                </section>
                <!-- Section: Share -->

                <!--Section: Author box-->
                <section class="mt-5">


                    <p class="mb-1 text-center"><strong>About author</strong></p>

                    <div class="media mt-4 px-1">
                        <img class="card-img-100 rounded d-flex z-depth-1 mr-3"
                             src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg" alt="Generic placeholder image">
                        <div class="media-body">

                            <div class="d-block">
                                <h6><a class="text-reset" href="#!">Carmen Martinez
                                    </a></h6>
                                <div class="my-2">
                                    <a href="#!" class="text-reset mr-1" role="button"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#!" class="text-reset mx-1" role="button"><i class="fab fa-twitter"></i></a>
                                    <a href="#!" class="text-reset mx-1" role="button"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>

                            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis molestiae
                                delectus
                                nulla porro voluptatem fugiat quod amet aspernatur iusto! Minus debitis quos molestias voluptatibus et
                                vero
                                corrupti cupiditate odit dolores.</p>
                        </div>
                    </div>

                </section>
                <!--Section: Author box-->

                <hr class="my-5">

                <!--Section: Block Content-->
                <section class="text-center text-lg-left mb-4">

                    <p class="mb-1 text-center"><strong><span>2</span> comments</strong></p>

                    <div class="media d-block d-md-flex mt-3">
                        <img class="card-img-64 rounded z-depth-1 d-flex mx-auto mb-3"
                             src="https://mdbootstrap.com/img/Photos/Avatars/img (20).jpg" alt="Generic placeholder image">
                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h6><a class="text-reset my-0" href="#!">Miley Steward</a></h6>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                laborum.</p>
                        </div>
                    </div>
                    <div class="media d-block d-md-flex mt-3">
                        <img class="card-img-64 rounded z-depth-1 d-flex mx-auto mb-3"
                             src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" alt="Generic placeholder image">
                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h6><a class="text-reset my-0" href="#!">Caroline Horwitz</a></h6>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                laborum.</p>
                        </div>
                    </div>

                </section>
                <!--Section: Block Content-->

                <!-- Section: Block Content -->
                <section>

                    <div class="mb-5">

                        <p class="mb-1 text-center"><strong>Leave a Reply</strong></p>

                        <!-- Your review -->
                        <div class="md-form md-outline">
                            <textarea id="form76" class="md-textarea form-control" rows="4"></textarea>
                            <label for="form76">Message</label>
                        </div>

                        <!-- Name -->
                        <div class="md-form md-outline">
                            <input type="text" id="form75" class="form-control">
                            <label for="form75">Name</label>
                        </div>

                        <!-- Email -->
                        <div class="md-form md-outline">
                            <input type="email" id="form77" class="form-control">
                            <label for="form77">Email</label>
                        </div>

                        <!-- Name -->
                        <div class="md-form md-outline">
                            <input type="text" id="form78" class="form-control">
                            <label for="form78">Website</label>
                        </div>

                        <div class="text-center text-md-left">
                            <button type="button" class="btn btn-primary btn-md">Submit</button>
                        </div>

                    </div>

                </section>
                <!-- Section: Block Content -->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 mb-4">

                <!-- Card -->
                <div class="mb-4">

                    <div class="view zoom brighten z-depth-2 rounded">
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/new/img(14).jpg" alt="Sample">
                        <a href="#!" class="text-white">
                            <div class="mask card-mask-color">
                                <div class="d-flex align-items-end h-100 p-3">
                                    <h5 class="mb-0">Lorem ipsum</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="mb-4">

                    <div class="view zoom brighten z-depth-2 rounded">
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/new/img(15).jpg" alt="Sample">
                        <a href="#!" class="text-white">
                            <div class="mask card-mask-color">
                                <div class="d-flex align-items-end h-100 p-3">
                                    <h5 class="mb-0">Lorem ipsum</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="mb-4">

                    <div class="view zoom brighten z-depth-2 rounded">
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/new/img(19).jpg" alt="Sample">
                        <a href="#!" class="text-white">
                            <div class="mask card-mask-color">
                                <div class="d-flex align-items-end h-100 p-3">
                                    <h5 class="mb-0">Lorem ipsum</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="mb-4">

                    <div class="view zoom brighten z-depth-2 rounded">
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/new/img(16).jpg" alt="Sample">
                        <a href="#!" class="text-white">
                            <div class="mask card-mask-color">
                                <div class="d-flex align-items-end h-100 p-3">
                                    <h5 class="mb-0">Lorem ipsum</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- Card -->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
</main>
<!--Main layout-->

<!-- Footer -->
@include('layouts.footer')
<!-- Footer -->


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{asset('assets/new/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('assets/new/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/mdb.min.js')}}"></script>
<!-- MDB Ecommerce JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/mdb.ecommerce.min.js')}}"></script>
<script>

</script>
</body>

</html>
