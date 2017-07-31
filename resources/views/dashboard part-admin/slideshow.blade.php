@extends('layouts.admin_base')
@section('admin_content')


		<!-- Main Contents-->
				<div class="col-xs-10 content">
					<div class="cat">
						<h3>Slideshow</h3>
						<form action="/admin/sliders" method="post" enctype="multipart/form-data">
							{{ csrf_field() }}
						  <div class="row">
							<div class="col-sm-3 form-group">
							  <h4 class="slide">Slide photo name</h4>
							</div>
							<div class="col-sm-8 form-group">
							  <input class="form-control inbox-del" id="slide_name" name="slider_name" placeholder="Add slide name" type="text">
							</div>
						  </div> 
						  <div class="row">
							<div class="col-sm-3 form-group">
							  <h4 class="slide">Add photo for slide</h4>
							</div>
							<div class="col-sm-6 form-group slide">
								<input type="file" id="slider_link" name="slider_link" placeholder="Add a photo" >
							</div>
							<div class="col-sm-2 form-group">
								<button class="btn btn-primary inbox-del pull-right"> Add Slider </button>
							</div>
						  </div>
						</form>


						  <div style="padding-top:10px; border-top:1px dotted #ccc;"></div>
						  <h3>Show sliders</h3>
						  <div class="row slide">
							  @foreach($sliders as $slider)
							  <div class="col-xs-3">
								  <h4>slider1</h4>
								  <img src="{{asset('uploaded')}}{{'/'}}{{$slider->slider_name}}" class="img-thumbnail img-responsive">

								  <form action="/admin/sliders/{{$slider->id}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">

									  {{csrf_field()}}

									  {{method_field('delete')}}
								  <button class="btn btn-danger inbox-del">Delete</button>
									  </form>
							  </div>
								  @endforeach

						  </div>

			  
							<p class="notice"> *Select a name for your slider and add a photo then press ADD SLIDER button.</p>
			  
					</div>
					</div>
		@endsection