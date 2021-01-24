@extends('layouts.master')

@push('head')

<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{asset('assets/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/blog_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/styles/blog_responsive.css')}}">

@endpush

@push('footer')
    
<script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('assets/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('assets/plugins/easing/easing.js')}}"></script>
<script src="{{asset('assets/s/blog_custom.js')}}"></script>

@endpush

@section('banner', $banner)
@section('content')

    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog_posts d-flex flex-row align-items-start justify-content-between">

                        @foreach($posts as $post)
                            
                        <div class="blog_post">
                            <div class="blog_image" style="background-image:url({{asset('assets/images/blog_9.jpg')}})"></div>
                            <div class="blog_text">{{$post->title}}</div>
                            <div class="blog_button"><a href="{{route('blog.show',['id' => $post])}}">Continue Reading</a></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection