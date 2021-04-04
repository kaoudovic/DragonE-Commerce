
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dragon Web Store</title>
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
    <link rel="icon" sizes="192x192" href="{{asset('Pictures_Project/logo/logo.png')}}">

    <link rel="stylesheet" href="{{ asset('assets/new/css/algolia.css') }}">


</head>

<body class="skin-light">

<!--Main Navigation-->
<header>

    <!-- Navbar -->
@include('layouts.header')
    <!-- Navbar -->

    <div class="jumbotron jumbotron-image color-grey-light" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(2).jpg'); height: 400px;">
        <div class="mask rgba-black-strong d-flex align-items-center h-100">
            <div class="container text-center white-text py-5" >
                <h1 class="mb-3">Dragon Blog</h1>
                <p class="mb-0"><i class="fas fa-quote-left mr-2">

                    </i>Style is something each of us already has, all we need to do is find it</p>
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
                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(3).jpg" class="img-fluid w-100" alt="Thrid sample image">
                        <a href="">
                            <div class="mask rgba-white-slight waves-effect waves-light"></div>
                        </a>
                    </div>
                    <!-- Featured image -->

                    <!-- Post data -->
                    <div class="post-data d-flex justify-content-between my-4">
                        <!-- Author -->
                        <a href="" class="black-text" rel="nofollow">
                            <img alt="User avatar" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg" class="avatar rounded z-depth-1" height="31" width="31">
                            <strong class="ml-1">Carmen Martinez</strong>
                        </a>
                        <!-- Author -->

                        <!-- Interactions -->
                        <div class="social-buttons smooth-scroll">
                            <!--Facebook-->
                            <a class="btn btn-sm btn-fb mr-1 my-0 waves-effect waves-light" role="button" href="https://www.facebook.com/profile.php?id=100008334753375">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <!--Twitter-->
                            <a class="btn btn-sm btn-tw mr-1 my-0 waves-effect waves-light" role="button" href="https://twitter.com/mostafakaoud6">
                                <i class="fab fa-twitter"></i>
                            </a>

                            <!--Linkedin-->
                            <a class="btn btn-sm btn-li mr-1 my-0 waves-effect waves-light" role="button" href="https://www.linkedin.com/in/mostafa-kaoud-986a44196/">
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

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/alistyle/img(6).jpg" class="img-fluid rounded z-depth-1-half mb-4" alt="">

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
                    <a class="btn btn-sm btn-fb mr-1 waves-effect waves-light" role="button" href="#!">
                        <i class="fab fa-facebook-f"></i>
                    </a>

                    <!--Twitter-->
                    <a class="btn btn-sm btn-tw mr-1 waves-effect waves-light" role="button" href="#!">
                        <i class="fab fa-twitter"></i>
                    </a>

                    <!--Linkedin-->
                    <a class="btn btn-sm btn-li mr-1 waves-effect waves-light" role="button" href="#!">
                        <i class="fab fa-linkedin-in"></i>
                    </a>

                    <hr>

                </section>
                <!-- Section: Share -->

                <!--Section: Author box-->
                <section class="mt-5">


                    <p class="mb-1 text-center"><strong>About author</strong></p>

                    <div class="media mt-4 px-1">
                        <img class="card-img-100 rounded d-flex z-depth-1 mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(2).jpg" alt="Generic placeholder image">
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
                        <img class="card-img-64 rounded z-depth-1 d-flex mx-auto mb-3" src="https://mdbootstrap.com/img/Photos/Avatars/img(20).jpg" alt="Generic placeholder image">
                        <div class="media-body text-center text-md-left ml-md-3 ml-0">
                            <h6><a class="text-reset my-0" href="#!">Miley Steward</a></h6>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                                laborum.</p>
                        </div>
                    </div>
                    <div class="media d-block d-md-flex mt-3">
                        <img class="card-img-64 rounded z-depth-1 d-flex mx-auto mb-3" src="https://mdbootstrap.com/img/Photos/Avatars/img (30).jpg" alt="Generic placeholder image">
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
                            <label for="form78" class="">Website</label>
                        </div>

                        <div class="text-center text-md-left">
                            <button type="button" class="btn btn-primary btn-md waves-effect waves-light">Submit</button>
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
                        <img class="img-fluid" src="https://cf2.s3.souqcdn.com/item/2020/04/15/12/28/74/57/4/item_XL_122874574_a71b9860908ac.jpg" alt="Sample">
                        <a href="/shop?category=digital-cameras" class="text-white">
                            <div class="mask card-mask-color waves-effect waves-light">
                                <div class="d-flex align-items-end h-100 p-3">
                                    <h5 class="mb-0">Digital Camera</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="mb-4">

                    <div class="view zoom brighten z-depth-2 rounded">
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/13.jpg" alt="Sample">
                        <a href="/shop?category=mobile-phones" class="text-white">
                            <div class="mask card-mask-color waves-effect waves-light">
                                <div class="d-flex align-items-end h-100 p-3">
                                    <h5 class="mb-0">Mobile Phone</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="mb-4">

                    <div class="view zoom brighten z-depth-2 rounded">
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/12.jpg"alt="Sample">
                        <a href="/shop?category=laptops" class="text-white">
                            <div class="mask card-mask-color waves-effect waves-light">
                                <div class="d-flex align-items-end h-100 p-3">
                                    <h5 class="mb-0">Laptops</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="mb-4">

                    <div class="view zoom brighten z-depth-2 rounded">
                        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/2.jpg" alt="Sample">
                        <a href="/shop?category=tablets" class="text-white">
                            <div class="mask card-mask-color waves-effect waves-light">
                                <div class="d-flex align-items-end h-100 p-3">
                                    <h5 class="mb-0">Tablets</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

                <div class="mb-4">

                    <div class="view zoom brighten z-depth-2 rounded">
                        <img class="img-fluid" src="https://cf5.s3.souqcdn.com/item/2021/03/21/13/25/29/99/4/item_XL_132529994_1c4ab035f54a9.jpg" alt="Sample">
                        <a href="/shop?category=video-game" class="text-white">
                            <div class="mask card-mask-color waves-effect waves-light">
                                <div class="d-flex align-items-end h-100 p-3">
                                    <h5 class="mb-0">Video Games</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <br>
                <div class="mb-4">

                    <div class="view zoom brighten z-depth-2 rounded">
                        <img class="img-fluid" src="https://cf2.s3.souqcdn.com/item/2020/05/17/12/52/08/14/5/item_XL_125208145_d831ad560c685.jpg" alt="Sample">
                        <a href="/shop?category=tvs" class="text-white">
                            <div class="mask card-mask-color waves-effect waves-light">
                                <div class="d-flex align-items-end h-100 p-3">
                                    <h5 class="mb-0">TVs</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="mb-4">

                    <div class="view zoom brighten z-depth-2 rounded">
                        <img class="img-fluid" src="https://cf3.s3.souqcdn.com/item/2020/12/20/13/21/94/90/2/item_XL_132194902_54b0d9d4d5aab.jpg" alt="Sample">
                        <a href="/shop?category=headphones" class="text-white">
                            <div class="mask card-mask-color waves-effect waves-light">
                                <div class="d-flex align-items-end h-100 p-3">
                                    <h5 class="mb-0">Headphones</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="mb-4">

                    <div class="view zoom brighten z-depth-2 rounded">
                        <img class="img-fluid" src="https://cf5.s3.souqcdn.com/item/2019/03/25/49/41/82/69/item_XL_49418269_ff98d4ea33ad2.jpg"alt="Sample">
                        <a href="/shop?category=smart-watch" class="text-white">
                            <div class="mask card-mask-color waves-effect waves-light">
                                <div class="d-flex align-items-end h-100 p-3">
                                    <h5 class="mb-0">Smart Watch</h5>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- Card -->

                <!-- Card -->
                <div class="mb-4">

                    <div class="view zoom brighten z-depth-2 rounded">
                        <img class="img-fluid" src="https://cf3.s3.souqcdn.com/item/2015/10/06/91/99/84/0/item_XL_9199840_9832615.jpg" alt="Sample">
                        <a href="/shop?category=desktops" class="text-white">
                            <div class="mask card-mask-color waves-effect waves-light">
                                <div class="d-flex align-items-end h-100 p-3">
                                    <h5 class="mb-0">Desktops</h5>
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
</main><!--Main layout-->



<!-- Footer -->
@include('layouts.footer')

<!-- Footer -->

<!-- SCRIPTS -->
<!-- JQuery -->
<script src="{{asset('assets/new/js/jquery-3.4.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('assets/new/js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/bootstrap.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/mdb.min.js')}}"></script>
<!-- MDB Ecommerce JavaScript -->
<script type="text/javascript" src="{{asset('assets/new/js/mdb.ecommerce.min.js')}}"></script>


<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('assets/new/js/algolia.js') }}"></script>
<script>
    $(document).ready(function () {
        // MDB Lightbox Init
        $(function () {
            $("#mdb-lightbox-ui").load("../../../mdb-addons/mdb-lightbox-ui.html");
        });
    });
</script>

</body>

</html>
