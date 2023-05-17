@extends('admin.layouts.app')

@section('content')

        <div id="layoutSidenav_content">
            <form
                name="add-blog-post-form"
                id="add-blog-post-form"
                method="post"
                action="{{url('admin/riders', ['id' => $rider->id])}}"
            >
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" name="name" class="form-control" value="{{old('name', $rider->name)}}" placeholder="Enter name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">lastname</label>
                    <input type="text" name="lastname" class="form-control" value="{{old('lastname', $rider->lastname)}}" placeholder="Enter lastname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">personnel code</label>
                    <input type="text" name="personnel_code" class="form-control" value="{{old('personnel_code', $rider->personnel_code)}}" placeholder="Enter personnel code">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">وضعیت</label>
                    <select
                        name="status"
                        class="form-select"
                        aria-label="Default select example"
                    >
                        <option
                            value="1"
                            {{ old('status', $rider->status) == 1 ? 'selected' : '' }}
                        >
                            فعال
                        </option>
                        <option
                            value="0"
                            {{ old('status', $rider->status) == 0 ? 'selected' : '' }}
                        >
                            غیرفعال
                        </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
@endsection
