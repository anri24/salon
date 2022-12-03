
@extends('admin.layouts.admin_base')

@section('content')



<section id="admin_panel_sizes" name="new-service" class="beautypress-pricing-table-section beautypress-padding-bottom  beautypress-bg" style="background-image: url(img/shop-open-img.jpg)">
	<div class="container">
	<div class="beautypress-section-headinig beautypress-section-headinig-white">
    <!-- aqedan gaamravle -->
            <h3>ფოტო</h3><br>

        </div>
	<div class="row">
    <!-- aqedan gaamravle -->
    <form action="{{ url('add_photo') }}" method="post" enctype="multipart/form-data">
        @csrf
	<input type="file" name="image">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>

    </form>
    <div class="beautypress-photo-gallery-section section-padding">
<div class="container">
<div class="beautypress-photo-gallery-wraper">
<div class="beautypress-photo-gallery-grid">
@foreach($photo as $img)
<div class="beautypress-photo-gallery-grid-item hair">
<div class="beautypress-single-photo-gallery beautypress-3d">
<div class="beautypress-3d-project-card">
<img src="{{ asset('images/photos/'.$img->photo) }}" alt="">
<div class="beautypress-photo-gallery-content">
<a href="{{ asset('images/photos/'.$img->photo) }}" class="beautypress-image-popup beautypress-iocn-btn full-round-btn bg-color-purple">
<i class="fa fa-eye"></i>
</a>

<a href="{{ url('delete_photo/'.$img->id) }}" class="beautypress-iocn-btn full-round-btn bg-color-red">
<i class="fa fa-trash"></i>
</a>

</div>
<div class="beautypress-gallery-overlay"></div>
</div>
</div>
</div>
@endforeach



    
	</div>
	</div>
	</section>