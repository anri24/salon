
@extends('admin.layouts.admin_base')

@section('content')

<section id="admin_panel_sizes" name="new-service" class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg" style="background-image: url(img/shop-open-img.jpg)">
	<div class="container">
	<div class="beautypress-section-headinig beautypress-section-headinig-white">
	<h3>კლიენტებს დაჯავშნილი ცხრილი</h3>
	</div>
	<div class="row">
	<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
	<div class="beautypress-single-pricing-table">
	<!-- cxrili iqneba aq -->
	
	<table class="table" >
  <thead>
    <tr>
	<th scope="col">ID</th>
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
  @foreach($customerOrder as $co)
  <tbody>
    <tr>
		
	<td scope="row">{{ $co->id }}</td>

      <td>{{ $co->date }}</td>
	  <td>{{ $co->time }}</td>
      <td>{{ $co->firstname }}</td>
      <td>{{ $co->lastname }}</td>
      <td>{{ $co->number }}</td>
	  @if(isset($co->custmoerServiceForOrder->service))
	  <td>{{ $co->custmoerServiceForOrder->service }}</td>
	  @else
	  <td>სერვისის გარეშე</td>

	  @endif
	@if(isset($co->sms))
	  <td>{{ $co->sms }}</td>
	  @else
	  <td>შეტყობინების გარეშე</td>

	  @endif
	  <td><a href="{{ url('delete_customer_order/'.$co->id) }}"><button type="button" class="btn btn-danger">წაშლა</button></a></td>

    </tr>
   
    
  </tbody>
  @endforeach
</table>
	</div>
	</div>
	</div>
	</div>
	</section>




