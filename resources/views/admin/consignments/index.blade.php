@extends('admin.layouts.app')

@section('content')

        <div id="layoutSidenav_content">
            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">
                        <a href="{{ url('admin/consignments/create') }}" class="btn btn-success create-user">
                            <i class="fa fa-pen">create</i>
                        </a>
                    </th>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">code</th>
                    <th scope="col">rider</th>
                    <th scope="col">deliver_start</th>
                    <th scope="col">delivery_end</th>
                    <th scope="col">created_at</th>
                    <th scope="col">operation</th>
                </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach($consignments as $consignment)
                        <tr>
                            <th scope="row"></th>
                            <th scope="row">{{ $i }}</th>
                            <td>{{ $consignment->name }}</td>
                            <td>{{ $consignment->code }}</td>
                            <td>{{ $consignment->rider->name }}</td>
                            <td>{{ $consignment->delivery_start }}</td>
                            <td>{{ $consignment->delivery_end }}</td>
                            <td>{{ $consignment->created_At }}</td>
                            <td>{{ $consignment->status }}</td>
                            <td>
                                <form method="POST" action="/admin/consignments/{{$consignment->id}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <div class="form-group">
                                        <a href="/admin/consignments/{{$consignment->id}}/edit" class="btn btn-primary">
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
