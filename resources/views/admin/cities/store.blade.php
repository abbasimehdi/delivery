@extends('admin.layouts.app')
@section('content')

        <div id="layoutSidenav_content">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('admin/cities')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">وضعیت</label>
                    <select name="status" class="form-select" aria-label="Default select example">
                        <option value="1">فعال</option>
                        <option value="0">غیرفعال</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">استان</label>
                    <input type="text" name="state" class="form-control" id="" placeholder="استان">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">شهر</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="شهر">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">عرض جغرافیایی</label>
                    <input type="text" name="lat" class="form-control" id="" placeholder="عرض جغرافیایی">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">طول جغرافیایی</label>
                    <input type="text" name="long" class="form-control" id="" placeholder="طول جغرافیایی">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
@endsection
