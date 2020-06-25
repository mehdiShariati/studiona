@extends("layout.main_layout")

@section("content")

<aside id="fh5co-hero" class="js-fullheight">
			<div id="sw-first" class=" js-fullheight">
				<ul class="swiper-wrapper" style="padding:0;list-style:none">
                   <li class="swiper-slide" style="background-image: url(images/wedding1.jpg);background-position:center;background-repeat:no-repeat;background-size:cover">
			   		
			   	</li>
			   	<li  class="swiper-slide" style="background-image: url(images/wedding2.jpg);background-position:center;background-repeat:no-repeat;background-size:cover">
			   		
			   	</li>
			   	<li  class="swiper-slide" style="background-image: url(images/wedding3.jpg);background-position:center;background-repeat:no-repeat;background-size:cover">
			   		
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div id="fh5co-services-section">
			
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box ">
						<div class="heading-section">
							<h2>برخی از نمونه کار های ما </h2>
							
						</div>
					</div>

					</div>
					
				</div>
			

				<div id="fh5co-page">

	<div class="container-fluid" id="fh5co-image-grid">
		

		<div class="grid">
		  <div class="grid-sizer"></div>

	

		@foreach($categories as $item)


		<div class="grid-item item animate-box" data-animate-effect="fadeIn">
		    <a href="single.html">
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
	<div id="fh5co-services-section " style="margin-top:2em;">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box ">
						<div class="heading-section">
							<h2>برخی از خدمات ما </h2>
							<p>مفتخر به ثبت بهترین لحظات زندگی شما هستیم</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<div class="icon">
								<span><i class="icon-camera"></i></span>
							</div>
							<h3>فیلم برداری </h3>
							<p>فیلم برداری از مراسم ها و لحظات خاص شما یکی از خدمات گروه هنری ما میباشد</p>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<div class="icon">
								<span><i class="icon-camera"></i></span>
							</div>
							<h3>تدوین فیلم و عکس</h3>
							<p>تدوین فیلم به سلیقه شما و ادیت عکس هم از خدمات گروه هنری نرگس میباشد</p>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="services">
							<div class="icon">
								<span><i class="icon-camera"></i></span>
							</div>
							<h3>عکاسی</h3>
							<p>حال خوب یعنی عکس خوب ، با یکی از خوش ذوق ترین تیم های عکاسی </p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-services-section" style="margin-top:3em;margin-bottom:0">
			
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box ">
						<div class="heading-section">
							<h2>آخرین پست های ما در اینستاگرام </h2>
							
						</div>
					</div>

					</div>
					
				</div>

		<div id="fh5co-page">

<div class="container-fluid" id="fh5co-image-grid">
	

	<div class="grid" id="ins">
	  <div class="grid-sizer"></div>

	  </div>
	  </div>
	  </div>
	  </div>
@endsection
@section("extra_js")


<script>


window.addEventListener('DOMContentLoaded', (event) => {
	
	let containerInsta=document.querySelector("#ins");
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    data=JSON.parse(this.response);
		data.map(item=>{
			containerInsta.innerHTML+=`<div class="grid-item item " data-animate-effect="fadeIn">
		    <a href="https://www.instagram.com/narges.photoo">
					<div class="img-wrap">
						<img src="${item}" alt="" class="img-responsive">
					</div>
					<div class="text-wrap">
						<div class="text-inner">
							<div>
								<h2>دشپث</h2>
								<span>72 photos</span>
							</div>
						</div>
					</div>
				</a>
		  </div>
`;
		});
    }
  };
  xhttp.open("GET", "/api/getPostInsta", true);
  xhttp.send();


});
  </script>
  


@endsection