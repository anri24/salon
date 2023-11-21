@extends('admin.layouts.app')

@section('content')

    <section id="admin_panel_sizes" name="new-service"
             class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg"
             style="background-image: url(img/shop-open-img.jpg)">
        <div class="container">
            <div class="beautypress-section-headinig beautypress-section-headinig-white">
                <h3>მოსწავლეების დაჯავშნილი ცხრილი</h3>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                    <div class="beautypress-single-pricing-table">
                        <!-- cxrili iqneba aq -->
                        <table class="table" style="width: 100vw;">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">თარიღი</th>
                                <th scope="col">სახელი</th>
                                <th scope="col">გვარი</th>
                                <th scope="col">ნომერი</th>
                                <th scope="col">სერვისი</th>
                                <th scope="col">შეტყობინება</th>
                                <th scope="col">წაშლა</th>


                            </tr>
                            </thead>
                            @foreach($studentOrder as $so)
                                <tbody>
                                <tr>

                                    <td scope="row">{{ $so->id }}</td>

                                    <td>{{ $so->date }}</td>
                                    <td>{{ $so->firstname }}</td>
                                    <td>{{ $so->lastname }}</td>
                                    <td>{{ $so->number }}</td>

                                    <td>{{ $so->studentServicePlace->name }}</td>


                                    @if(isset($so->sms))
                                        <td>{{ $so->sms }}</td>
                                    @else
                                        <td>შეტყობინების გარეშე</td>

                                    @endif
                                    <td><a href="{{ route('delete.student.order',$so->id) }}">
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
