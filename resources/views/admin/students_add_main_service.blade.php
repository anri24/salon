
@extends('admin.layouts.admin_base')

@section('content')


<section id="admin_panel_sizes" name="new-service" class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg" style="background-image: url(img/shop-open-img.jpg)">
	<div class="container">
	<div class="beautypress-section-headinig beautypress-section-headinig-white">
	<h3>მოსწავლის სერვისის ადგილის დამატება</h3>
	</div>
	<div class="row">
	<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
	<div class="beautypress-single-pricing-table">
	<!-- forma iqneba aq -->
	<form action="{{ url('create_student_service_place') }}" method="post">
		@csrf
  <div class="mb-3">
    <label for="services-title" class="form-label">სახელი</label>
    <input type="text" name="student_service_place" class="form-control" id="services-title">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">ფასი</label>
    <input type="number" name="price" class="form-control" id="price" >
  </div>
  
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

	</div>
	</div>
	</div>
	</div>
	</section>



