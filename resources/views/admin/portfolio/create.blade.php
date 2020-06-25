@extends('layout.admin_layout')


@section("content")
<div class="row">
<div class="col-6 offset-3">
@if(Session::has('success'))
        <p class="alert alert-info">{{ Session::get('success') }}</p>
        @endif
<form action="" method="post" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label for="couple_name">نام زوج</label>
<input type="text" name="couple_name" class="form-control">
</div>
<div class="form-group">
<label for="images">عکس ها</label>
<input type="file" name="images[]" multiple class="form-control">
</div>
<div class="form-group">
<label for="description">توضیحات </label>
<textarea name="description" class="form-control" cols="30" rows="10"></textarea>
</div>
<div class="form-group">
<label for="category_portfolio_id"> دسته بندی نمونه کار</label>
    <select name="category_portfolio_id" class="form-control" >
    @foreach($cats as $item)
    <option value="{{$item->id}}">{{$item->name}}</option>
    @endforeach
    </select>
    </div>
<div class="form-group">
    <input type="submit" value="ثبت" class="btn btn-success">
</div>

</form>



</div></div>


@endsection