
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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

    <link rel="stylesheet" href="{{ asset('assets/new/css/algolia.css') }}">
    <link rel="icon" sizes="192x192" href="{{asset('Pictures_Project/logo/logo.png')}}">


    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('assets/new/js/algolia.js') }}"></script>
</head>
<body class="skin-light">
<header>
            <!-- Navbar -->
        @include('layouts.header')
        <!-- Navbar -->

            <div class="jumbotron color-grey-light mt-70">
                <div class="d-flex align-items-center h-100">
                    <div class="container text-center py-5">
                        <h3 class="mb-0">Register</h3>
                    </div>
                </div>
            </div>

        </header>

<!-- Main layout -->
 <main>
    <div class="container">
        <section class="mt-5 mb-4">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
  </main>

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
<!-- Your custom scripts (optional) -->

<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script src="{{ asset('assets/new/js/algolia.js') }}"></script>

<script>
    $(document).ready(function () {
        $('.mdb-select').materialSelect();
        $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function () {
            $(this).closest('.select-outline').find('label').toggleClass('active');
            $(this).closest('.select-outline').find('.caret').toggleClass('active');
        });

    });

    $(function () {
        $('.material-tooltip-main').tooltip({
            template: '<div class="tooltip md-tooltip-main"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner-main"></div></div>'
        })
    })

    "use strict";function _instanceof(t,n){return null!=n&&"undefined"!=typeof Symbol&&n[Symbol.hasInstance]?n[Symbol.hasInstance](t):t instanceof n}function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _toConsumableArray(t){return _arrayWithoutHoles(t)||_iterableToArray(t)||_nonIterableSpread()}function _nonIterableSpread(){throw new TypeError("Invalid attempt to spread non-iterable instance")}function _iterableToArray(t){if(Symbol.iterator in Object(t)||"[object Arguments]"===Object.prototype.toString.call(t))return Array.from(t)}function _arrayWithoutHoles(t){if(Array.isArray(t)){for(var n=0,o=new Array(t.length);n<t.length;n++)o[n]=t[n];return o}}function _classCallCheck(t,n){if(!_instanceof(t,n))throw new TypeError("Cannot call a class as a function")}function _defineProperties(t,n){for(var o=0;o<n.length;o++){var i=n[o];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function _createClass(t,n,o){return n&&_defineProperties(t.prototype,n),o&&_defineProperties(t,o),t}!function(t){var n="100%",o="vertical",i=!0,e=!1,s=!1,a=!1,l=null,r=null,u="#4285F4",h="#4285F4",g="#fff",c=["#fff"],p=0,m=100,f="",v="",d=1,b=1,y=0,C=function(){function C(t,T){_classCallCheck(this,C),this.defaults={width:n,direction:o,value:{min:p,max:m},single:{active:i,value:{step:d,symbol:f},counting:s,countingTarget:r,bgThumbColor:u,textThumbColor:g,multi:{active:e,value:{step:b,symbol:v},counting:a,rangeLength:y,countingTarget:l,bgThumbColor:h,textThumbColor:c}}},this.$range=t,this.options=this.assignedOptions(T),this.$rangeWrapper=this.$range.parent().hasClass("multi-range-field")?this.$range.parent():null,this.thumbHtml='<span class="thumb"><span class="value"></span></span>',this.rangeMousedown=!1,this.left,this.init()}return _createClass(C,[{key:"assignedOptions",value:function(n){return t.extend({},this.defaults,n)}},{key:"init",value:function(){this.addThumb(),this.rangeChange(),this.multiRangeInit(),this.inputMouseDown(),this.mouseUponInput(),this.mouseMoveOnInput(),this.mouseOutFromInput(),this.multiRangeValue(),this.multiRangeCSS(),this.inputMultiRange()}},{key:"randomLetter",value:function(){for(var t="",n="abcdefghijklmnopqrstuvwxyz123456789",o=arguments.length,i=new Array(o),e=0;e<o;e++)i[e]=arguments[e];for(var s=0;s<new Number(i);s++)t+=n.charAt(Math.floor(Math.random()*n.length));return t}},{key:"addThumb",value:function(){!0===this.options.single.active?t(this.$range.prop({id:this.randomLetter(10),disabled:!1})).after(t(this.thumbHtml).attr("data-id","")):t(this.$range.prop("disabled",!0)),"horizontal"===this.options.direction&&this.$rangeWrapper.addClass("thumb-horizontal-wrapper")}},{key:"rangeChange",value:function(){var n=this;this.$range.on("change",function(o){o.preventDefault();var i=t(o.target),e=i.siblings(".thumb").find(".value");void 0!==n.options.single.value?e.html("".concat(i.val()," ").concat(n.options.single.value.symbol)):e.html(i.val())})}},{key:"multiRangeInit",value:function(){this.$range.attr({min:this.options.value.min,max:this.options.value.max,step:void 0!==this.options.single.value?this.options.single.value.step:this.defaults.single.value.step,symbol:void 0!==this.options.single.value?this.options.single.value.symbol:this.defaults.single.value.symbol}),this.$range.addClass("mdbMultiRange original"),this.$range.val(this.$range.attr("min"))}},{key:"inputMouseDown",value:function(){var n=this;this.$range.on("input mousedown",function(o){var i=t(o.target),e=i.siblings(".thumb"),s=i.outerWidth();if(e.length||n.addThumb(),e.find(".value").html(i.val()),n.rangeMousedown=!0,i.addClass("active"),e.hasClass("active")||e.css({height:"30px",width:"30px",top:"-23px",marginLeft:"-15px"}),"input"!==o.type){var a=o.pageY,l=i.offset().top;"horizontal"===n.options.direction||(a=o.pageX),"horizontal"===n.options.direction||(l=i.offset().left),n.left=null==a?o.originalEvent.touches[0].pageY-l:a-l,n.left<0?n.left=0:n.left>s&&(n.left=s),e.addClass("active").css("left",n.left)}e.attr("data-id",i.attr("id")),i.hasClass("ghost")?(e.css("background-color",i.data("color")),e.children().css("color",i.data("text-color"))):(e.css("background-color",void 0===n.options.single.bgThumbColor?n.defaults.single.bgThumbColor:n.options.single.bgThumbColor),e.children().css("color",void 0===n.options.single.textThumbColor?n.defaults.single.textThumbColor:n.options.single.textThumbColor)),void 0!==n.options.single.value?e.find(".value").html("".concat(i.val()," ").concat(n.options.single.value.symbol)):e.find(".value").html(i.val())})}},{key:"mouseUponInput",value:function(){var n=this;this.$range.on("mouseup",function(o){n.rangeMousedown=!1,t(o.target).parent().removeClass("active")})}},{key:"mouseMoveOnInput",value:function(){var n=this;this.$range.on("mousemove",function(o){var i=t(o.target),e=i.siblings(".thumb");if(n.left,n.rangeMousedown){e.hasClass("active")||e.css({height:"30px",width:"30px",top:"-23px",marginLeft:"-15px"});var s=i.outerWidth(),a=o.pageY,l=i.offset().top;"horizontal"===n.options.direction||(a=o.pageX),"horizontal"===n.options.direction||(l=i.offset().left),"horizontal"===n.options.direction?e.addClass("active thumb-horizontal"):e.addClass("active"),n.left=null==a?o.originalEvent.touches[0].pageY-l:a-l,n.left<0?n.left=0:n.left>s&&(n.left=s),e.css("left",n.left),i.length<1&&e.find(".value").html("".concat(i.val()," ").concat(n.options.single.value.symbol))}})}},{key:"mouseOutFromInput",value:function(){var n=this;this.$range.on("mouseout",function(o){if(!n.rangeMousedown){var i=t(o.target).siblings(".thumb");i.hasClass("active")&&i.animate({marginLeft:"0px",top:"12px",height:"0px",width:"0px"},230),i.removeClass("active")}})}},{key:"multiRangeValue",value:function(){var n=this;if(null!==this.options.single.countingTarget&&void 0!==this.options.single.countingTarget&&""!==this.options.single.countingTarget&&!0===this.options.single.counting){var o=t("".concat(_toConsumableArray(this.options.single.countingTarget.split(" "))));this.$range.on("input mousedown touchstart",function(){void 0===n.options.single.value||o.is("input")?o.is("input")?o.val("".concat(n.$range.val())):o.html("".concat(n.$range.val())):o.html("".concat(n.$range.val()," ").concat(n.options.single.value.symbol))})}}},{key:"multiRangeCSS",value:function(){this.$range.css("width",this.options.width)}},{key:"inputMultiRange",value:function(){var n=this;if(void 0!==this.options.single.multi&&!0===this.options.single.active&&this.options.single.multi.rangeLength>=1)for(var o=0;o<this.options.single.multi.rangeLength;o++){var i=this.$range.clone(!0,!0).prop("id",this.randomLetter(10));void 0!==this.options.single.multi.bgThumbColor&&void 0!==this.options.single.multi.textThumbColor&&this.options.single.multi.bgThumbColor.length>1?i.attr({"data-color":this.options.single.multi.bgThumbColor.length>1?_toConsumableArray(this.options.single.multi.bgThumbColor)[o]:_toConsumableArray(this.options.single.multi.bgThumbColor)[0],"data-text-color":this.options.single.multi.textThumbColor.length>1?_toConsumableArray(this.options.single.multi.textThumbColor)[o]:_toConsumableArray(this.options.single.multi.textThumbColor)[0]}):i.attr({"data-color":[],"data-text-color":[]}),i.attr({step:void 0!==this.options.single.multi.value?this.options.single.multi.value.step:null,symbol:void 0!==this.options.single.multi.value?this.options.single.multi.value.symbol:null}),i.val(i.attr("max")),i.addClass("mdbMultiRange ghost"),i.prev().css("background-color",this.options.single.multi.bgThumbColor),this.$range.after(i),null!==this.options.single.multi.countingTarget&&void 0!==this.options.single.multi.countingTarget&&"object"===_typeof(this.options.single.multi.countingTarget)&&this.options.single.multi.counting&&function(){var e=t("".concat(Object.values(_toConsumableArray(n.options.single.multi.countingTarget))[o]));i.on("input mousedown",function(o){void 0===n.options.single.multi.value||e.is("input")?e.is("input")?e.val(t(o.target).val()):e.html(t(o.target).val()):e.html("".concat(t(o.target).val()," ").concat(n.options.single.multi.value.symbol))})}()}}}]),C}();t.fn.mdbRange=function(n){return this.each(function(){new C(t(this),n)})}}(jQuery);

    $('#multi').mdbRange({
        single: {
            active: true,
            multi: {
                active: true,
                rangeLength: 1
            },
        }
    });

    function applySorting()
    {
        var url = window.location.href;
        var listItems = document.getElementById('select-options-md-sort').getElementsByTagName('li');
        for(var i=0;i<listItems.length;i++)
        {
            var ok =  parseInt(listItems[i].getAttribute('aria-selected'));
            if(listItems[i].getAttribute('aria-selected') !== "false")
            {
                var sort = listItems[i].getElementsByTagName('span')[0].textContent;
                sort = sort.trim();
                sort = sort.replace(' ','_');
                var selected_option = document.getElementById(sort).value;
                var url = window.location.href;

                $.ajax({
                    url: url,
                    type:"GET",
                    data: {
                        sort:sort
                    },
                    success:function(response){
                        if(response) {
                            document.getElementById('products').innerHTML = '';
                            document.getElementById('products').innerHTML = response;
                        }
                    }
                });

            }
        }
    }


</script>

  </body>

</html>

