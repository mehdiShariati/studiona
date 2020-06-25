@extends("layout.main_layout")

@section("content")
<div id="fh5co-services-section" style="margin-top:3em;margin-bottom:0">
			
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center animate-box ">
                    <div class="heading-section">
                        <h2>نمونه کار ها </h2>
                        
                    </div>
                </div>

                </div>
                
            </div>

<div id="fh5co-page">

<div class="container-fluid" id="fh5co-image-grid">
	

	<div class="grid" id="ins">
	  <div class="grid-sizer"></div>

    @foreach($categories as $item)
	<div class="grid-item item animate-box" data-animate-effect="fadeIn">
		    <a href="/portfolio/show/">
					<div class="img-wrap">
						<img src="/uploads/category/{{$item->image}}" alt="" class="img-responsive">
					</div>
					<div class="text-wrap">
						<div class="text-inner">
							<div>
								<h2>{{$item->name}}</h2>
								<span>72 photos</span>
							</div>
						</div>
					</div>
				</a>
		  </div>


    @endforeach
	  </div>
	  </div>
	  </div>
	  </div>

@endsection