@extends('admin.layouts.app')

@section('content')

        <div id="layoutSidenav_content">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">
                        <a href="{{ url('admin/riders/create') }}" class="btn btn-success create-user">
                            <i class="fa fa-pen">create</i>
                        </a>
                    </th>
                    <th scope="col">#</th>
                    <th scope="col">وضعیت راکب</th>
                    <th scope="col">نام راکب</th>
                    <th scope="col">نام خانوادگی راکب</th>
                    <th scope="col">کد پرسنلی</th>
                    <th scope="col">operation</th>
                </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($riders as $rider)
                        <tr>
                            <th scope="row"></th>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $rider->status }}</td>
                            <td>{{ $rider->name }}</td>
                            <td>{{ $rider->lastname }}</td>
                            <td>{{ $rider->personnel_code }}</td>
                            <td>
                                <form method="POST" action="/admin/riders/{{$rider->id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="form-group">
                                        <a href="/admin/riders/{{$rider->id}}/edit" class="btn btn-primary">
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
