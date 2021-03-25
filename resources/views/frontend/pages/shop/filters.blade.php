<div class="col-lg-4 mt-3 mb-4">

    <h4 class="mb-4">Categories</h4>

    <!-- Section: Categories -->

    <!-- Section: Categories -->
    <section>
        <br>
        <br>
        <h5 class="mb-3">Categories</h5>

        <div class="text-muted small text-uppercase mb-5">
            @foreach($categories as $category)
                <p class="mb-3">
                    <a href="{{ route('shop.index',['category'=>$category->slug])}}" class="card-link-secondary">{{$category->name}}</a>
                </p>
            @endforeach

        </div>

    </section>
    <!-- Section: Categories -->

    <!-- Section: Filters -->
    <form action="{{route('shop.index')}}?{{!empty(request()->category) ? request()->category : ''}}" method="get">

        @if(isset(Request::all()['category']))
            <input type="hidden" value="{{Request::all()['category']}}" name="category">
        @endif

        @if(count($options) > 0)
            <section>
                <h5 class="mb-4">Filters</h5> <hr class="w-20">

                @foreach($options as $key =>  $option)
                    @if(strtolower($key) != 'color')
                        <section class="mb-4">

                            <h6 class="font-weight-bold mb-3">{{$key}}</h6>
                            @foreach($option as $value)
                                <div class="form-check pl-0 mb-3">
                                    <input name="filter[{{$key}}][{{$value}}]" type="checkbox" {{in_array($value,$appliedFilters['filters']) ? 'checked' : ''}} class="form-check-input filled-in" id="{{$value}}">
                                    <label class="form-check-label small text-uppercase card-link-secondary" for="{{$value}}">{{$value}}</label>
                                </div>
                            @endforeach

                        </section>

                    @else
                    <!-- Section: Color -->
                        <section class="mb-4" filter="color">
                            <h6 class="font-weight-bold mb-3">Color</h6>

                            <div
                                class="btn-group btn-group-toggle btn-color-group d-block mt-n2 ml-n2"
                                data-toggle="buttons"
                            >
                                @foreach($option as $value)
                                    <label style="background-color: {{$value}}" for="color-{{$value}}" class="btn rounded-circle {{$value}} p-3 m-2">
                                        <input name="filter[{{$key}}][{{$value}}]"
                                               id="color-{{$value}}"
                                               class="filter-option"
                                               type="checkbox"
                                               color="{{$value}}"
                                        />
                                    </label>
                                @endforeach
                            </div>
                        </section>
                        <!-- Section: Color -->
                    @endif
                @endforeach
            </section>
    @endif

    <!-- Section: Price version 2 -->
        <section class="mb-4">

            <h6 class="font-weight-bold mb-3">Price</h6>

            <div class="d-flex align-items-center mt-4 pb-1">
                <div class="md-form md-outline my-0">
                    <input name="filter[price][min_price]" id="from" type="text" value="{{$appliedFilters['min_price']!= 0 ?$appliedFilters['min_price'] : ''}}" class="form-control mb-0">
                    <label for="form">$ Min</label>
                </div>
                <p class="px-2 mb-0 text-muted"> - </p>
                <div class="md-form md-outline my-0">
                    <input name="filter[price][max_price]" id="to" type="text" value="{{$appliedFilters['max_price']!= 0 ?$appliedFilters['max_price'] : ''}}" class="form-control mb-0">
                    <label for="to">$ Max</label>
                </div>
            </div>
        </section>
        <!-- Section: Price version 2 -->

        </section>
        <button type="submit" class="btn btn-primary btn-sm mr-1 waves-effect waves-light"><i class="fas fa-angle-double-right pr-2"></i>Apply filters</button>
        <a type="button" href="{{route('shop.index')}}" class="btn btn-danger btn-sm mr-1 waves-effect waves-light"><i class="fas fa-minus-circle pr-2"></i>Reset</a>

    </form>
    <!-- Section: Filters -->

</div>
