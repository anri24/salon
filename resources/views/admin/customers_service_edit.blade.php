
@extends('admin.layouts.admin_base')

@section('content')
<section id="admin_panel_sizes" name="new-service" class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg" style="background-image: url(img/shop-open-img.jpg)">
	<div class="container">
	<div class="beautypress-section-headinig beautypress-section-headinig-white">
	<h3>კლიენტის სერვისის რედაქტირება</h3>
	</div>
	<div class="row">
	<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
	<div class="beautypress-single-pricing-table">
	<!-- forma iqneba aq -->
    <center>
	<form action="{{ url('update_customer_data/'.$customerService->id) }}" method="post">
    @csrf
    @method('PUT')
    <label for="service" class="form-label">აირჩიეთ სერვისის ჩარჩო</label>
    <select class="form-select" name="customer_services_place" aria-label="Default select example">
  <option >აირჩიეთ სერვისის ჩარჩო</option>
  @foreach($customerServicePlace as $csp)
  <option selected value="{{ $csp->id }}">{{ $csp->name }}</option>
  @endforeach
</select><br>
  <div class="mb-3">
    <label for="service" class="form-label">სერვისი</label>
    <input type="text" value="{{ $customerService->service }}" class="form-control" name="service" id="service" >
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">ფასი</label>
    <input type="text" value="{{ $customerService->price }}" class="form-control" name="price" id="price" >
  </div>
  
 
  <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
</form>
</center>

	</div>
	</div>
	</div>
	</div>
	</section>
    @endsection('content')




