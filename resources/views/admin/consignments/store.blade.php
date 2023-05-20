@extends('admin.layouts.app')

@section('content')

        <div id="layoutSidenav_content">
            <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('admin/consignments')}}">
                @csrf
                <div class="form-group">
                    <label for="">نام</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="نام">
                </div>
                <div class="form-group">
                    <label for="">کد مرسوله</label>
                    <input type="text" name="code" class="form-control" id="" placeholder="کد مرسوله">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">راکب</label>
                    <select name="rider_id" class="form-select" aria-label="Default select example">
                        @foreach($riders as $rider)
                            <option value="{{ $rider->id }}">{{ $rider->name. ' '. $rider->lastname }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">تاریخ شروع ارسال مرسوله</label>
                    <input type="text" name="delivery_start" class="form-control" id="" placeholder="تاریخ شروع ارسال مرسوله">
                </div>
                <div class="form-group">
                    <label for="">Delivery end</label>
                    <input type="text" name="delivery_end" class="form-control" id="" placeholder="تاریخ تحویل مرسوله">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">وضعیت</label>
                    <select name="status" class="form-select" aria-label="Default select example">
                        <option value="1">فعال</option>
                        <option value="0">غیرفعال</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
@endsection
