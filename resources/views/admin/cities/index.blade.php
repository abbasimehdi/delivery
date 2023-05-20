@extends('admin.layouts.app')

@section('content')

        <div id="layoutSidenav_content">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">
                        <a href="{{ url('admin/cities/create') }}" class="btn btn-success create-user">
                            <i class="fa fa-pen">create</i>
                        </a>
                    </th>
                    <th scope="col">#</th>
                    <th scope="col">وضعیت شهر</th>
                    <th scope="col">استان</th>
                    <th scope="col">شهر</th>
                    <th scope="col">عرض جغرافیایی</th>
                    <th scope="col">طول جغرافیایی</th>
                    <th scope="col">operation</th>
                </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($cities as $city)
                        <tr>
                            <th scope="row"></th>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $city->status }}</td>
                            <td>{{ $city->state }}</td>
                            <td>{{ $city->name }}</td>
                            <td>{{ $city->lat }}</td>
                            <td>{{ $city->long }}</td>
                            <td>
                                <form method="POST" action="/admin/cities/{{$city->id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="form-group">
                                        <a href="/admin/cities/{{$city->id}}/edit" class="btn btn-primary">
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
