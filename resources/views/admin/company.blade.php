@extends('master')
@section('content')

    <section class="container mt-5">
        <div class="row">
            <div class="col-md-10 offset-1">
                <table class="table table-striped table-bordered table-responsive">
                    <tr>
                        <th scope="col">Company Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Logo</th>
                        <th scope="col">Website</th>
                        <th scope="col">Action</th>
                    </tr>
                    @foreach($companies as $company)
                        <tr>
                             <td>{{$company->company_name}}</td>
                             <td>{{$company->email}}</td>
                             <td>
                                 <img style="height: 50px;" src="{{asset($company->image)}}" alt="Image" >
                             </td>
                             <td>{{$company->url}}</td>
                            <td>
                                <a href="{{route('editcompany',$company->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('deletecompany',$company->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </section>

@endsection()
