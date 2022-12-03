
@extends('admin.layouts.admin_base')

@section('content')



<section id="admin_panel_sizes" name="new-service" class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg" style="background-image: url(img/shop-open-img.jpg)">
	<div class="container">
	<div class="beautypress-section-headinig beautypress-section-headinig-white">
    <!-- aqedan gaamravle -->
            <h3>მოსწავლეების სერვისები</h3><br>
<div align=right>
            <h6><a id="add_main_services" href="{{url('students_add_main_service')}}">სერვისის ადგილის შექმნა</a></h6>
</div>
        </div>
	<div class="row">
    <!-- aqedan gaamravle -->
	@foreach($studentServicePlace as $ssp)
	<div style="margin-top:20px" class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
	<div class="beautypress-single-pricing-table">
	<div class="beautypress-pricing-footer">
		<center><h2 name="service-title">{{ $ssp->name }} - <span name="service-price">{{ $ssp->price }} ლარი/თვეში</span></h2></center>
		<h6 align=right><a id="add_service" href="{{ url('students_add_service') }}">სერვისის დამატება</a></h6><br>

	<ul class="beautypress-both-side-list">
		<center><h3>სწავლაში შედის:</h3></center><br>

		@foreach($studentService as $ss)
		@if($ssp->id == $ss->student_service_place)
		<li name="service-name">{{ $ss->service }}<a href="{{ url('students_service_edit/'.$ss->id) }}"><button style="margin-left:20px;" class="btn btn-warning">რედაქტ.</button></a><a href="{{ url('delete_student_service/'.$ss->id) }}"><button style="margin-left:5px;" class="btn btn-danger">წაშლა</button></a></li>
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