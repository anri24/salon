@extends('admin.layouts.app')

@section('content')

    <section id="admin_panel_sizes" name="new-service"
             class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg"
             style="background-image: url(img/shop-open-img.jpg); margin-top: 5%">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-section-headinig-white">
                <h3>კლიენტებს დაჯავშნილი ცხრილი</h3>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                    <div class="beautypress-single-pricing-table">
                        <!-- cxrili iqneba aq -->

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">თარიღი</th>
                                <th scope="col">დრო</th>
                                <th scope="col">სახელი</th>
                                <th scope="col">გვარი</th>
                                <th scope="col">ნომერი</th>
                                <th scope="col">სერვისი</th>
                                <th scope="col">შეტყობინება</th>
                                <th scope="col">წაშლა</th>

                            </tr>
                            </thead>
                            @foreach($customerOrder as $order)
                                <tbody>
                                <tr>
                                    <td>{{ $order->date }}</td>
                                    <td>{{ $order->time }}</td>
                                    <td>{{ $order->firstname }}</td>
                                    <td>{{ $order->lastname }}</td>
                                    <td>{{ $order->number }}</td>
                                    <td>{{ $order->customerService->service }}</td>
                                    @if(isset($order->sms))
                                        <td>{{ $order->sms }}</td>
                                    @else
                                        <td>შეტყობინების გარეშე</td>
                                    @endif
                                    <td><a href="{{ route('delete.customer.order',$order->id) }}">
                                            <button type="button" class="btn btn-danger">წაშლა</button>
                                        </a></td>
                                </tr>
                                </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


