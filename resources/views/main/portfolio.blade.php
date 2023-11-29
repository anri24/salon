@extends('main.layouts.app')

@section('content')
<section class="beautypress-inner-welocme-section beautypress-bg parallax-bg" data-parallax="scroll" data-image-src="img/testimonial-bg.jpg">
<div class="beautypress-black-overlay"></div>
<div class="container">
<div class="beautypress-inner-welcome-content">
<h1 class="color-white">პორთფოლიო</h1>
</div>
<div class="beautypress-inner-welcome-footer-content">
<ul class="beautypress-breadcrumb">
<li><a href="#">Home</a></li>
<li><a href="#">portfolio</a></li>
</ul>
</div>
</div>
</section>


<div class="beautypress-photo-gallery-section section-padding">
<div class="container">
<div class="beautypress-photo-gallery-wraper">
<div class="beautypress-photo-gallery-grid">
@foreach($photo as $img)
<div class="beautypress-photo-gallery-grid-item hair">
<div class="beautypress-single-photo-gallery beautypress-3d">
<div class="beautypress-3d-project-card">
<img src="{{ asset('gallery/'.$img->photo) }}" alt="">
<div class="beautypress-photo-gallery-content">
<a href="{{ asset('gallery/'.$img->photo) }}" class="beautypress-image-popup beautypress-iocn-btn full-round-btn bg-color-pink">
<i class="fa fa-eye"></i>
</a>

</div>
<div class="beautypress-gallery-overlay"></div>
</div>
</div>
</div>
@endforeach





</div>
</div>
</div>
</div>

@endsection
