@extends("layout.admin_layout")
@section("content")
<div class="row">
    <div class="col text-center">
        <a href="/admin/portfolio/createCategoryPortfolio" class="btn btn-success">ایجاد دسته بندی نمونه کار</a>
        <a href="/admin/portfolio/createPortfolio" class="btn btn-success">ایجاد نمونه کار</a>
        <a href="/admin/portfolio/editPortfolio" class="btn btn-primary">ویرایش نمونه کار</a>
        <a href="/admin/portfolio/deleteCategoryPortfolio" class="btn btn-danger">حذف نمونه کار</a>
    </div>
</div>

@endsection