
@extends('admin.layouts.admin_base')

@section('content')


<section id="admin_panel_sizes" name="new-service" class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg" style="background-image: url(img/shop-open-img.jpg)">
	<div class="container">
	<div class="beautypress-section-headinig beautypress-section-headinig-white">
	<h3>მოსწავლის სერვისის დამატება</h3>
	</div>
	<div class="row">
	<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
	<div class="beautypress-single-pricing-table">
	<!-- forma iqneba aq -->
    <center>
	<form method="post" action="{{ url('create_student_service') }}">
  @csrf
    <label for="service" class="form-label">აირჩიეთ სერვისის ჩარჩო</label>
    <select class="form-select" aria-label="Default select example" name="student_services_place">
  <option selected>აირჩიეთ სერვისის ჩარჩო</option>
  @foreach($studentServicePlace as $ssp)
  <option value="{{ $ssp->id }}">{{ $ssp->name }}</option>
  @endforeach

</select><br>
  <div class="mb-3">
    <label for="service" class="form-label">სერვისი</label>
    <input type="text" name="service" class="form-control" id="service" >
  </div>

  
 
  <center><button type="submit" name="submit" class="btn btn-primary">Submit</button></center>
</form>
</center>

	</div>
	</div>
	</div>
	</div>
	</section>




