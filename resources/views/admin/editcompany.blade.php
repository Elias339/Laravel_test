@extends('master')
@section('content')
    <section class="container">
        <div class="row mt-5">
            <div class="col-md-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        <h2>Companies </h2>

                        <form action="{{route('updatecompany')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$companyinfo->id}}" name="id">

                            <div class=" row form-group my-3">
                                <label class="col-form-label col-md-3">Company Name:</label>
                                <div class="col-md-9">
                                    <input type="text" name="company_name" class="form-control" value="{{$companyinfo->company_name}}">
                                </div>
                            </div>
                            <div class=" row form-group my-3">
                                <label class="col-form-label col-md-3">Email:</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>
                            <div class=" row form-group my-3">
                                <label class="col-form-label col-md-3">Logo:</label>
                                <div class="col-md-9">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>
                            <div class=" row form-group my-3">
                                <label class="col-form-label col-md-3">Website:</label>
                                <div class="col-md-9">
                                    <input type="url" name="url" class="form-control">
                                </div>
                            </div>

                            <div class=" row form-group my-3 mt-5">
                                <div>
                                    <button type="submit" class="form-control btn btn-outline-success">Update Information</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection()
