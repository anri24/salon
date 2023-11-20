@extends('admin.layouts.app')

@section('content')

    <section id="admin_panel_sizes" name="new-service"
             class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg"
             style="background-image: url(img/shop-open-img.jpg)">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-section-headinig-white">
                <!-- aqedan gaamravle -->
                <h3>კლიენტის სერვისები</h3><br>
                <div align=right>
                    <h6><a id="add_main_services" href="{{ route('add.customer.service.place') }}">სერვისის ადგილის
                            შექმნა</a></h6>
                </div>
            </div>
            <div class="row">
                <!-- aqedan gaamravle -->
                @foreach($customerServicePlace as $csp)
                    <div style="margin-top:20px" class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
                        <div class="beautypress-single-pricing-table">
                            <div class="beautypress-pricing-footer">
                                <center><h2 name="service-title">{{ $csp->name }}</h2></center>
                                <h6 align=right><a id="add_service" href="{{ route('add.customer.service') }}">სერვისის
                                        დამატება</a></h6><br>
                                <ul class="beautypress-both-side-list">
                                    @foreach($customerService as $cs)
                                        @if($csp->id == $cs->customer_service_place)
                                            <li name="service-name">{{ $cs->service }}<span name="service-price">{{$cs->price}} ლარი</span><a
                                                    href="{{ route('edit.customer.service',$cs->id) }}">
                                                    <button style="margin-left:20px;" class="btn btn-warning">რედაქტ.
                                                    </button>
                                                </a><a href="{{ route('delete.customer.service',$cs->id) }}">
                                                    <button style="margin-left:5px;" class="btn btn-danger">წაშლა
                                                    </button>
                                                </a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

@endsection
