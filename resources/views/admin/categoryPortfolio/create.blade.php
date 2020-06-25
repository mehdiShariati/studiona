@extends("layout.admin_layout")


@section("content")

<div class="row ">
    <div class="col-6 offset-3  text-center">
    @if(Session::has('success'))
        <p class="alert alert-info">{{ Session::get('success') }}</p>
        @endif
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" style="color:black">نام دسته بندی</label>
                <input class="form-control" type="text" name="name" >
            </div>
            <div class="form-group">
                <label for="cat_image" style="color:black">عکس دسته بندی</label>
                <input class="form-control" type="file" name="cat_image">
            </div>
            <div class="form-group">
               
                <input class="btn btn-success" type="submit" value="ثبت">
            </div>
        </form>
        
    </div>
</div>



@endsection