@extends('admin.layouts.app')

@section('content')

        <div id="layoutSidenav_content">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">
                        <a href="{{ url('admin/motors/create') }}" class="btn btn-success create-user">
                            <i class="fa fa-pen">create</i>
                        </a>
                    </th>
                    <th scope="col">#</th>
                    <th scope="col">وضعیت موتور</th>
                    <th scope="col">راکب</th>
                    <th scope="col">پلاک</th>
                    <th scope="col">operation</th>
                </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($motors as $motor)
                        <tr>
                            <th scope="row"></th>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $motor->status }}</td>
                            <td>{{ $motor->rider }}</td>
                            <td>{{ $motor->plate }}</td>
                            <td>
                                <form method="POST" action="/admin/motors/{{$motor->id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="form-group">
                                        <a href="/admin/motors/{{$motor->id}}/edit" class="btn btn-primary">
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
