@extends('admin.layouts.app')

@section('content')

    <section id="admin_panel_sizes" name="new-service"
             class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg"
             style="background-image: url(img/shop-open-img.jpg)">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-section-headinig-white">
                <h3>კლიენტის სერვისის ადგილის დამატება</h3>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
                    <div class="beautypress-single-pricing-table">
                        <form action="{{ route('store.customer.service.place') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="services-title" class="form-label">სახელი</label>
                                <input type="text" name="name" class="form-control"
                                       id="services-title">
                            </div>


                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
