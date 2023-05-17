@extends('admin.layouts.app')

@section('content')

        <div id="layoutSidenav_content">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">
                        <a href="{{ url('admin/users/create') }}" class="btn btn-success create-user">
                            <i class="fa fa-pen">create</i>
                        </a>
                    </th>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">default address</th>
                    <th scope="col">created_at</th>
                    <th scope="col">operation</th>
                </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($users as $user)
                        <tr>
                            <th scope="row"></th>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->addresses[0]->address }}</td>
                            <td>{{ $user->created_At }}</td>
                            <td>
                                <form method="POST" action="/admin/users/{{$user->id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="form-group">
                                        <a href="/admin/users/{{$user->id}}/edit" class="btn btn-primary">
                                            <i class="fa fa-edit">Edit</i>
                                        </a>
                                        <button type="submit" class="btn btn-danger delete-user">
                                            <i class="fa fa-trash">Delete</i>
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @php $i++; @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
