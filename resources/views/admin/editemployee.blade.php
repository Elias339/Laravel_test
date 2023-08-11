@extends('master')
@section('content')

    <section class="container">
        <div class="row mt-5">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h2>Employees</h2>

                        <form action="{{route('updateemployee')}}" method="post">
                            @csrf
                            <input type="hidden" value="{{$employeeinfo->id}}" name="id">
                            <div class=" row form-group my-3">
                                <label class="col-form-label col-md-3">First name:</label>
                                <div class="col-md-9">
                                    <input type="text" name="first_name" class="form-control" value="{{$employeeinfo->first_name}}">
                                </div>
                            </div>
                            <div class=" row form-group my-3">
                                <label class="col-form-label col-md-3">Last name:</label>
                                <div class="col-md-9">
                                    <input type="text" name="last_name" class="form-control" value="{{$employeeinfo->last_name}}">
                                </div>
                            </div>
                            <div class=" row form-group my-3">
                                <label class="col-form-label col-md-3">Company:</label>
                                <div class="col-md-9">
                                    <input type="text" name="company" class="form-control" value="{{$employeeinfo->company}}">
                                </div>
                            </div>

                            <div class=" row form-group my-3">
                                <label class="col-form-label col-md-3">Email:</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control" value="{{$employeeinfo->email}}">
                                </div>
                            </div>

                            <div class=" row form-group my-3">
                                <label class="col-form-label col-md-3">Phone:</label>
                                <div class="col-md-9">
                                    <input type="text" name="phone" class="form-control" value="{{$employeeinfo->phone}}">
                                </div>
                            </div>

                            <div class=" row form-group my-3 mt-5">
                                <div>
                                    <button type="submit" class="form-control btn btn-outline-success">Update Employees Info</button>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection()
