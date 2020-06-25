@extends("layout.main_layout")


@section("content")
<div id="fh5co-contact-section" style="margin-top:2em;">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-md-push-1 animate-box">
                        <h3 class="text-center">تماس با ما </h3>
                        <p dir="rtl">در صورتی که نیاز به مشاوره دارید ، فرم  را پر کنید تا در سریع ترین زمان ممکن با شما تماس گرفته شود.</p>
						<ul class="contact-info">
							<li><i class="icon-location-pin"></i>تهران ، شهرک راه آهن ،سروستان دهم ، پلاک ۷۲، و۲</li>
							<li><i class="icon-phone2"></i>+982156348466 </li>
							<li><i class="icon-mail"></i><a href="#">info@yoursite.com</a></li>
							<li><i class="icon-globe2"></i><a href="#">www.yoursite.com</a></li>
						</ul>
					</div>
					<div class="col-md-7 col-md-push-1 animate-box">
						<div class="row">
							<div class="col-md-6">
                                <form action="/contact" method="POST">
                                @csrf
								<div class="form-group">
									<input type="text" class="form-control" name="full_name" placeholder="نام و نام خانوادگی">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" name="phoneNumber" class="form-control" placeholder="شماره موبایل">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<textarea name="description" class="form-control" id="" cols="30" rows="7" placeholder="ضمینه مشاوره"></textarea>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group text-center">
									<input type="submit" value="ارسال درخواست تماس" class="btn btn-primary">
                                </div>
                                </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection