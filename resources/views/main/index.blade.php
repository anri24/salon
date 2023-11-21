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
		@foreach($customerServicePlace as $place)
	<div class="col-md-12 col-sm-12 col-lg-4 col-xl-4">
	<div class="beautypress-single-pricing-table">

	<div class="beautypress-pricing-footer">
		<center><h2 name="service-title">{{ $place->name }}</h2></center><br>
<hr>

	<ul class="beautypress-both-side-list">
		@foreach($place->customerService as $service)
		<li name="service-name">{{ $service->service }}<span name="service-price">{{ $service->price }} ლარი</span></li>
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
<form action="{{ route('store.customer.order') }}" method="post">
	@csrf
<input type="hidden" name="action" value="send_appointment_form" />
<div class="alert hidden" id="beautypress-form-msg"></div>
<div class="beautypress-service-and-date">
<h2>სერვისები და თარიღი</h2>
<div class="beautypress-select">
<div class="input-group">
<select name="service_id" id="appointment-service" class="form-control" name="select-service">
<option value="none">აირჩიე სერვისი</option>
@foreach($customerServices as $service)
<option value="{{ $service->id }}">{{ $service->service }}</option>
@endforeach

</select>
</div>
</div>
<div class="beautypress-spilit-container">
<div class="beautypress-date-select beautypress-select">
<div class="input-group">
<input type="text" id="date" class="form-control datepicker" name="date" placeholder="თარიღი">
</div>
</div>
<div class="beautypress-select">
<div class="input-group">
<select name="time" id="appointment-time" class="form-control">
<option value="none">დრო</option>
<option value="00:00">00:00</option>
<option value="00:30">00:30</option>
<option value="01:00">01:00</option>
<option value="01:30">01:30</option>
<option value="02:00">02:00</option>
<option value="03:00">03:00</option>
<option value="02:30">02:30</option>
<option value="03:30">03:30</option>
<option value="04:00">04:00</option>
<option value="04:30">04:30</option>
<option value="05:00">05:00</option>
<option value="05:30">05:30</option>
<option value="06:00">06:00</option>
<option value="06:30">06:30</option>
<option value="07:00">07:00</option>
<option value="07:30">07:30</option>
<option value="08:00">08:00</option>
<option value="08:30">08:30</option>
<option value="09:00">09:00</option>
<option value="09:30">09:30</option>
<option value="10:00">10:00</option>
<option value="10:30">10:30</option>
<option value="11:00">11:00</option>
<option value="11:30">11:30</option>
<option value="12:00">12:00</option>
<option value="12:30">12:30</option>
<option value="13:00">13:00</option>
<option value="13:30">13:30</option>
<option value="14:00">14:00</option>
<option value="14:30">14:30</option>
<option value="15:00">15:00</option>
<option value="15:30">15:30</option>
<option value="16:00">16:00</option>
<option value="16:30">16:30</option>
<option value="17:00">17:00</option>
<option value="17:30">17:30</option>
<option value="18:00">18:00</option>
<option value="18:30">18:30</option>
<option value="19:00">19:00</option>
<option value="19:30">19:30</option>
<option value="20:00">20:00</option>
<option value="20:30">20:30</option>
<option value="21:00">21:00</option>
<option value="21:30">21:30</option>
<option value="22:00">22:00</option>
<option value="22:30">22:30</option>
<option value="23:00">23:00</option>
<option value="23:30">23:30</option>
</select>
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
<!-- <button type="submit" name="submit">გაგზავნა</button> -->

</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>

<!--

<section class="beautypress-photo-gallery-section beautypress-padding-bottom">
<div class="container">
<div class="beautypress-section-headinig">
<br><br>
<h3>პორთფოლიო</h3>
</div>
<div class="beautypress-photo-gallery-wraper">
<div class="beautypress-portfolio-nav portfolio-menu">
<ul id="filters" class="option-set clearfix" data-option-key="filter">
<li><a href="#" data-option-value="*" class="selected">ყველა</a></li>
<li><a href="#" data-option-value=".hair">თმა</a></li>
<li><a href="#" data-option-value=".makeup">მაკიაჟი</a></li>
<li><a href="#" data-option-value=".facial">ბრჩხილები</a></li>
</ul>
</div>
<div class="beautypress-photo-gallery-grid">
<div class="beautypress-photo-gallery-grid-item hair">
<div class="beautypress-single-photo-gallery beautypress-3d">
<div class="beautypress-3d-project-card">
<img src="img/gallery-1.jpg" alt="">
<div class="beautypress-photo-gallery-content">
<a href="img/gallery-1.jpg" class="beautypress-image-popup beautypress-iocn-btn full-round-btn bg-color-pink">
<i class="fa fa-eye"></i>
</a>

</div>
<div class="beautypress-gallery-overlay"></div>
 </div>
</div>
</div>

</div>
</div>
</div>
</section> -->








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
