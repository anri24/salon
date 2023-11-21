@extends('admin.layouts.app')

@section('content')

    <section id="admin_panel_sizes" name="new-service"
             class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg"
             style="background-image: url(img/shop-open-img.jpg)">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-section-headinig-white">
                <h3>კლიენტის სერვისის დამატება</h3><br>
                <h4>{{ $place->name }}</h4>
            </div>
            <center>
                <div class="beautypress-single-pricing-table" style="width: 400px; text-align: center">
                    <form action="{{ route('store.customer.service',$place->id) }}" method="post">
                        @csrf
                        <label for="service" class="form-label">აირჩიეთ სერვისის ჩარჩო</label>
                        <div class="mb-3">
                            <label for="service" class="form-label">სერვისი</label>
                            <input type="text" class="form-control" name="service" id="service">
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">ფასი</label>
                            <input type="text" class="form-control" name="price" id="price">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </center>
        </div>
    </section>

@endsection


