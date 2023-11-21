@extends('admin.layouts.app')

@section('content')

    <section id="admin_panel_sizes" name="new-service"
             class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg"
             style="background-image: url(img/shop-open-img.jpg);margin-top: 5% ">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-section-headinig-white">
                <h3>კლიენტის სერვისის რედაქტირება</h3><br>
                <h4>{{ $service->customerServicePlace->name }}</h4>
            </div>

            <center>
                <div class="beautypress-single-pricing-table" style="width: 400px; text-align: center">
                    <!-- forma iqneba aq -->
                    <center>
                        <form action="{{ route('update.customer.service',$service->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <label for="service" class="form-label">აირჩიეთ სერვისის ჩარჩო</label>
                            <div class="mb-3">
                                <label for="service" class="form-label">სერვისი</label>
                                <input type="text" value="{{ $service->service }}" class="form-control"
                                       name="service" id="service">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">ფასი</label>
                                <input type="text" value="{{ $service->price }}" class="form-control"
                                       name="price" id="price">
                            </div>


                            <center>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </center>
                        </form>
                    </center>

                </div>
            </center>
        </div>
    </section>
@endsection




