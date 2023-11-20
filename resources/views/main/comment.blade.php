@extends('main.layouts.app')

@section('content')
<section class="beautypress-inner-welocme-section beautypress-bg parallax-bg" data-parallax="scroll" data-image-src="">
<div class="beautypress-black-overlay"></div>
<div class="container">
<div class="beautypress-inner-welcome-content">
<h1 class="color-white">კომენტარი</h1><br>
</div>


<section class="beautypress-booking-section beautypress-bg beautypress-padding-bottom parallax-bg" data-parallax="scroll" data-image-src="img/get_appoinment.jpg">
<div class="container" >

<div class="row">

<div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
<div  class="beautypress-booking-form-wraper">

<form action="{{ route('store.comment') }}" method="post">
	@csrf
<input type="hidden" name="action" value="send_appointment_form" />
<div class="alert hidden" id="beautypress-form-msg"></div>

<div class="beautypress-personal-information">

<div class="form-group phone-group">
<input type="text" name="fullname" class="form-control" id="fullname" placeholder="სახელი და გვარი">
</div>

<div class="form-group massage-gropu">
<textarea class="form-control" name="comment" rows="5" id="appointment-comment" placeholder="კომენტარი"></textarea>
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
</div>
</section>



<div class="beautypress-photo-gallery-section section-padding">
<div class="container">
<div class="beautypress-photo-gallery-wraper">
<div class="beautypress-photo-gallery-grid">
<div class="beautypress-photo-gallery-grid-item hair">
<div class="beautypress-single-photo-gallery beautypress-3d">
<div class="beautypress-3d-project-card">
<div class="beautypress-photo-gallery-content">

<a href="#" class="beautypress-iocn-btn full-round-btn bg-color-purple">
<i class="fa fa-link"></i>
</a>
</div>
<div class="beautypress-gallery-overlay"></div>
</div>
</div>
</div>





</div>
</div>
</div>
</div>

@endsection
