@extends('master')
@section('content')

    <section class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-1">
                <table class="table table-striped table-bordered table-responsive">
                    <tr>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Company</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                    @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->first_name}}</td>
                            <td>{{$employee->last_name}}</td>
                            <td>{{$employee->company}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->phone}}</td>
                            <td>
                                <a href="{{route('editemployee',$employee->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('deleteemployee',$employee->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </section>

@endsection()
