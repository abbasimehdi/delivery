@extends('admin.layouts.app')

@section('content')

        <div id="layoutSidenav_content">
            <form
                name="add-blog-post-form"
                id="add-blog-post-form"
                method="post"
                action="{{url('admin/users', ['id' => $user->id])}}"
            >
                @csrf
                {{ method_field('PUT') }}

                <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="name" class="form-control" value="{{old('name', $user->name)}}" id="exampleInputPassword1" placeholder="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" value="{{old('email', $user->email)}}"  id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" value="{{old('name', $user->password)}}"  id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
@endsection
