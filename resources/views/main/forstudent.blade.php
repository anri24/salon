@extends('main.layouts.app')

@section('content')

<section class="beautypress-welcome-section beautypress-welcome-section-v1 welcome-height-calc-minus">
<div class="beautypress-welcome-slider-wraper">
<div class="beautypress-welcome-slider owl-carousel">
<div class="beautypress-welcome-slider-item content-left beautypress-bg" style="background-image: url(img/haircut.jpg);">
<div class="container">
<div class="beautypress-welcome-content-group">
<div class="beautypress-welcome-container">
<div class="beautypress-welcome-wraper">
<h2 class="color-pink">20 წლიანი</h2>
<h3 class="color-purple">გამოცდილება</h3>
<div class="beautypress-btn-wraper">

</div>
</div>
</div>
</div>
</div>
</div>
<div class="beautypress-welcome-slider-item content-left beautypress-bg" style="background-image: url(img/hair.jpg);">
<div class="container">
<div class="beautypress-welcome-content-group">
<div class="beautypress-welcome-container">
<div class="beautypress-welcome-wraper">
<h2 class="color-pink">შენი სილამაზე</h2>
<h3 class="color-purple">მნიშვნელოვანია</h3>
<!-- <p class="color-black"> beauty specialists to help you prepare for your wedding and enhance your special.</p> -->
<div class="beautypress-btn-wraper">

</div>
</div>
</div>
</div>
</div>
</div>
<div class="beautypress-welcome-slider-item content-right beautypress-bg" style="background-image: url(img/beaut.jpg);">
<div class="container">
<div class="beautypress-welcome-content-group">
<div class="beautypress-welcome-container">
<div class="beautypress-welcome-wraper">
<h2 class="color-pink">სილამაზე ნიშნავს</h2>
<h3 class="color-purple">ბედნიერებას</h3>
<div class="beautypress-btn-wraper">

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section name="new-service" class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg" style="background-image: url(img/shop-open-img.jpg)">
	<div class="container">
	<div class="beautypress-section-headinig beautypress-section-headinig-white">
	<h3>სერვისები</h3>
	</div>
	<div class="row">
	@foreach($studentServicePlace as $ssp)
	<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
	<div class="beautypress-single-pricing-table">

	<div class="beautypress-pricing-footer">
		<center><h2 name="service-title">{{ $ssp->name }} - <span name="service-price">{{ $ssp->price }} ლარი/თვეში</span></h2></center>
<hr>
	<ul class="beautypress-both-side-list">
		<center><h3>სწავლაში შედის:</h3></center><br>
		@foreach($studentService as $ss)
		@if($ssp->id == $ss->student_service_place)

		<li name="service-name"><h4>{{ $ss->service }}</h4></li>

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






<section class="beautypress-booking-section beautypress-bg beautypress-padding-bottom parallax-bg" data-parallax="scroll" data-image-src="img/get_appoinment.jpg">
<div class="container">
<div class="beautypress-section-headinig">
<h3>ჯავშანი</h3>
</div>
<div class="row">
<div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
<div class="beautypress-booking-text-wraper">
<div class="beautypress-booking-content-text beautypress-border beautypress-version-3">
 <div class="beautypress-booking-text">
<h3>სამუშაო საათები</h3>
<div class="beautypress-icon-bg-text">
</div>
<ul>
<li>ორშაბათი - შაბათი : 9:00 - 22:00</li>
<li></li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
<div class="beautypress-booking-form-wraper">
<form action="{{ route('store.student.order') }}" method="post">
	@csrf
<input type="hidden" name="action" value="send_appointment_form" />
<div class="alert hidden" id="beautypress-form-msg"></div>
<div class="beautypress-service-and-date">
<h2>სერვისები და თარიღი</h2>
<div class="beautypress-select">
<div class="input-group">
<select name="student_services_place" id="appointment-service" class="form-control" name="select-service">
<option value="none">აირჩიე სერვისი</option>
@foreach($studentServicePlace as $ssp)
<option value="{{ $ssp->id }}">{{ $ssp->name }}</option>
@endforeach
</select>
</div>
</div>
<div class="beautypress-spilit-container">
<div class="beautypress-date-select beautypress-select">
<div class="input-group">
<input type="text" id="appointment-date" class="form-control datepicker" name="student_date" placeholder="თარიღი">
</div>
</div>

</div>
</div>
<div class="beautypress-personal-information">
<h2>პირადი ინფორმაცია</h2>
<div class="beautypress-spilit-container">
<div class="form-group first-name-group">
<input type="text" name="firstname" class="form-control" id="first-name" placeholder="სახელი">
</div>
<div class="form-group email-group">
<input type="text" name="lastname" class="form-control" id="text" placeholder="გვარი">
</div>
</div>
<div class="form-group phone-group">
<input type="number" name="number" class="form-control" id="phone" placeholder="მობილურის ნომერი">
</div>
<div class="form-group massage-gropu">
<textarea class="form-control" name="sms" rows="5" id="appointment-comment" placeholder="შეტყობინება(არასავალდებულო)"></textarea>
</div>
<div class="form-group button-group">
<input type="submit" name="submit" value="გაგზავნა" id="beautypress-submit">
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>



<section  class="beautypress-testimonial-section beautypress-bg parallax-bg" data-parallax="scroll" data-image-src="img/video-bg.jpg">
	<div class="container">
	<div  class="beautypress-testimonial-slider owl-carousel">
		@foreach($comment as $comm)
	<div  class="beautypress-single-testimonial">
	<h2>{{ $comm->fullname }}</h2>
	<pre>
	<p style="font-size:20px;">{{ $comm->comment }}</p>
	</pre>

	<div class="beautypress-signature">

	</div>
	</div>

	@endforeach
	</div><br><br><br><br><br><br><br><br>

	<center>
	<a href="{{ route('comment') }}"><button type="button" class="btn btn-primary">კომენტარის დამატება</button></a>
	</center>
	</div>

	<div class="beautypress-black-overlay light-overlay"></div>
	</section>



@endsection
