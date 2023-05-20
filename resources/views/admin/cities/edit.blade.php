@extends('admin.layouts.app')

@section('content')

        <div id="layoutSidenav_content">
            <form
                name="add-blog-post-form"
                id="add-blog-post-form"
                method="post"
                action="{{url('admin/cities', ['id' => $city->id])}}"
            >
                @csrf
                {{ method_field('PUT') }}
                <div class="form-group">
                    <label for="exampleInputPassword1">وضعیت</label>
                    <select name="status" class="form-select" aria-label="Default select example">
                        <option
                            value="1"
                            {{ old('status', $city->status) == 1 ? 'selected' : '' }}
                        >
                            فعال
                        </option>
                        <option
                            value="0"
                            {{ old('status', $city->status) == 0 ? 'selected' : '' }}
                        >
                            غیرفعال
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">استان</label>
                    <input type="text" name="state" class="form-control" id="" value="{{old('state', $city->state)}}" placeholder="استان">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">شهر</label>
                    <input type="text" name="name" class="form-control" value="{{old('name', $city->name)}}" id="" placeholder="شهر">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">عرض جغرافیایی</label>
                    <input type="text" name="lat" class="form-control" id="" value="{{old('lat', $city->lat)}}" placeholder="عرض جغرافیایی">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">طول جغرافیایی</label>
                    <input type="text" name="long" class="form-control" id="" value="{{old('long', $city->long)}}" placeholder="طول جغرافیایی">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
@endsection
