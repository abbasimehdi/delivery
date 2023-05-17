@extends('admin.layouts.app')
@section('content')

        <div id="layoutSidenav_content">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('admin/motors')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">وضعیت</label>
                    <select name="status" class="form-select" aria-label="Default select example">
                        <option value="1">فعال</option>
                        <option value="0">غیرفعال</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">راکب</label>
                    <select name="rider" class="form-select" aria-label="Default select example">
                        <option selected>rider1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">plate</label>
                    <input type="text" name="name" class="form-control" id="exampleInputPassword1" placeholder="name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
@endsection
