@extends('admin.layouts.app')

@section('content')

        <div id="layoutSidenav_content">
            <form
                name="add-blog-post-form"
                id="add-blog-post-form"
                method="post"
                action="{{url('admin/motors', ['id' => $motor->id])}}"
            >
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="exampleInputPassword1">وضعیت</label>
                    <select
                        name="status"
                        class="form-select"
                        aria-label="Default select example"
                    >
                        <option
                            value="1"
                            {{ old('status', $motor->status) == 1 ? 'selected' : '' }}
                        >
                            فعال
                        </option>
                        <option
                            value="0"
                            {{ old('status', $motor->status) == 0 ? 'selected' : '' }}
                        >
                            غیرفعال
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">راکب</label>
                    <select name="rider" class="form-select" aria-label="Default select example">
                        <option
                            selected
                            {{ old('rider', $motor->rider) == 'rider' ? 'selected' : '' }}
                        >
                            rider1
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">plate</label>
                    <input type="text" name="plate" class="form-control" value="{{old('plate', $motor->plate)}}" id="exampleInputPassword1" placeholder="name">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
@endsection
